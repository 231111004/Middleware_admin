<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AuthenticationController extends Controller
{
    public function login_function(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'email-input'    => 'required',
            'password-input' => 'required',
        ], [
            'required' => 'Please fill out all form',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // cek user login
        $auth = DB::selectOne("
            SELECT
                ma.KODE_USER,
                ma.EMAIL,
                ma.ID_ROLE,
                mr.nama AS ROLE,
                mp.KODE_PENDAFTARAN,
                mp.NAMA,
                mp.NO_HP
            FROM
                md_auth ma
            LEFT JOIN md_role mr ON ma.ID_ROLE = mr.id_role
            LEFT JOIN md_pendaftaran mp ON mp.KODE_USER = ma.KODE_USER
            WHERE
                ma.EMAIL = ? 
            AND
                ma.PASSWORD = ?
            AND
                ma.STATUS != 0
            LIMIT 1
        ", [
            $req->input('email-input'),
            hash('sha256', md5($req->input('password-input')))
        ]);

        if ($auth) {
            // update log time
            DB::table('md_auth')
                ->where(['KODE_USER' => $auth->KODE_USER])
                ->update(['LOG_TIME'  => now()]);

            // simpan user ke session
            $user_data = [
                'KODE_USER'         => $auth->KODE_USER,
                'KODE_PENDAFTARAN'  => $auth->KODE_PENDAFTARAN,
                'EMAIL'             => $auth->EMAIL,
                'ROLE'              => $auth->ROLE,
                'ID_ROLE'           => $auth->ID_ROLE,
                'NAMA'              => $auth->NAMA,
                'NO_HP'             => $auth->NO_HP,
            ];

            Session::put('user', $user_data);
            Session::put('usersession', $auth->ROLE);

            // redirect sesuai role
            switch ($auth->ROLE) {
                case "ADMIN":
                    return redirect('/dashboard-admin');
                case "CONSULTANT":
                    return redirect('/consultant-profile');
                case "USER":
                    return redirect('/dashboard-user');
                default:
                    return redirect('/login')->with('resp_msg', "Role tidak dikenali.");
            }
        } else {
            return redirect('/login')->with('resp_msg', "Your account not found.");
        }
    }

    public function check_email_ajax(Request $req)
    {
        $email = $req->input('email');
        $exists = DB::table('md_auth')->where('EMAIL', $email)->exists();

        return response()->json(['exists' => $exists]);
    }

    public function register_function(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'name-reg'        => 'required',
            'email-reg'       => 'required',
            'password-reg'    => 'required',
        ], [
            'required' => 'Please fill out all form',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Please fill out all form',
                'errors' => $validator->errors()
            ]);
        }

        $auth = DB::selectOne("
            SELECT ma.* FROM md_auth ma WHERE ma.EMAIL = ?
        ", [$req->input('email-reg')]);

        if (!empty($auth)) {
            return response()->json([
                'status' => 'exists',
                'message' => 'Email already registered'
            ]);
        }

        $data = [
            'KODE_USER' => $this->GenerateUniqID('USR', $req->input('email-reg')),
            'EMAIL'     => $req->input('email-reg'),
            'ID_ROLE'   => 3, // default USER
            'PASSWORD'  => hash('sha256', md5($req->input('password-reg'))),
            'STATUS'    => 1,
            'REG_TIME'  => now()
        ];

        $user_data = [
            'KODE_PENDAFTARAN'  => $this->GenerateUniqID('KDP', $req->input('email-reg')),
            'KODE_USER'         => $data['KODE_USER'],
            'NAMA'              => $req->input('name-reg')
        ];

        try {
            DB::beginTransaction();

            DB::table('md_auth')->insert($data);
            DB::table('md_pendaftaran')->insert($user_data);

            DB::commit();

            return response()->json([
                'status' => 'success',
                'message' => 'Silahkan lakukan aktivasi akun anda melalui email yang digunakan'
            ]);
        } catch (\Throwable $e) {
            DB::rollBack();

            return response()->json([
                'status' => 'error',
                'message' => 'terdapat kesalahan pada sistem, silakan coba lagi.'
            ]);
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect('/login');
    }

    private function GenerateUniqID($first, $var)
    {
        $string = preg_replace('/[^a-z]/i', '', $var);
        $vocal = ["a", "e", "i", "o", "u", "A", "E", "I", "O", "U", " "];
        $scrap = str_replace($vocal, "", $string);
        $begin = substr($scrap, 0, 4);
        $uniqid = strtoupper($begin);
        $microtime = microtime(true);
        $microtime = str_replace('.', '', $microtime);
        $hashed_short_microtime = md5($microtime);
        $short_hashed_microtime = substr($hashed_short_microtime, 0, 3);
        return $first . "_" . $uniqid . $short_hashed_microtime;
    }
}
