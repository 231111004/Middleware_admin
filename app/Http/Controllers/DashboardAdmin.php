<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardAdmin extends Controller
{
    
    public function index(){

        $data['title'] = "Dashboard";

        $data['NAMA_DEPAN'] = "ADMIN";

        return 
        view('Layouts.header',$data).
        view('Layouts.sidebar',$data).
        view('admin.dashboard',$data).
        view('Layouts.footer');
    }
}
