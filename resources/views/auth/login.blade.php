<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Login' }} | Cataliz</title>

    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/iconoir-icons/iconoir@main/css/iconoir.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/dist/sweetalert2.min.css">

    <style>
        .swal2-toast {
            background: #272727;
            color: white;
        }
        div:where(.swal2-icon).swal2-warning {
            color: #ffcc00;
            border-color: #ffcc00;
        }
    </style>
</head>

<body class="overflow-hidden position-fixed" style="max-width: 100vw; max-height: 100vh;">
    {{-- ✅ SweetAlert pesan session --}}
    @if(session('resp_msg'))
        <script>
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'warning',
                title: "{{ session('resp_msg') }}",
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true
            });
        </script>
    @endif

    <style>
        .bg-1 {
            width: 100vw;
            height: 200vh;
            background: linear-gradient(137.78deg, #FFCC00 14.48%, #FFAE00 90.76%);
            border-radius: 50%;
            position: absolute;
            left: -50vw;
            top: -50vh;
        }
        .bg-2 {
            width: 200vw;
            height: 100vh;
            background: linear-gradient(137.78deg, #FFCC00 14.48%, #FFAE00 90.76%);
            border-radius: 50%;
            position: absolute;
            top: -50vh;
            left: -50vw;
        }
        @media (min-width: 768px) {
            .w-md-auto { width: auto !important; }
        }
    </style>

    <div class="overflow-hidden" style="height: 100vh; width: 100vw; background: #1B1B1B">
        <div class="bg-1 d-none d-md-block"></div>
        <div class="bg-2 d-block d-md-none"></div>
        <div class="d-flex align-items-center justify-content-center" style="min-height: 99vh; min-width: 99vw; background: #1B1B1B">
            <div class="card w-100 w-md-auto">
                <div class="card-body px-5 py-5 px-md-8 py-md-6">
                    <div class="card-title">
                        <h2 class="text-primary fw-bold text-center mb-0">Selamat Datang!</h2>
                        <h5 class="text-center fw-normal">Masuk ke akun anda</h5>
                    </div>

                    {{-- ✅ Form login dengan CSRF --}}
                    <form id="form-user" action="{{ url('/login/authentication') }}" method="POST">
                        @csrf
                        <div class="py-4" style="min-width: 20vw;">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <div class="input-group">
                                    <input type="email" class="form-control px-3" id="email" name="email-input"
                                           placeholder="Masukkan email Anda" required
                                           style="border-radius: 25px; padding-right: 45px !important;">
                                    <span class="align-self-center fw-semibold" style="cursor: pointer; margin-left: -37px; z-index: 5; margin-right: 13px;">
                                        <i class="iconoir-user fs-4" style="margin-top: 6px;"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control px-3" id="password" name="password-input"
                                           placeholder="Masukkan password Anda" required
                                           style="border-radius: 25px; padding-right: 45px !important;">
                                    <span class="align-self-center fw-semibold" id="togglePassword" style="cursor: pointer; margin-left: -37px; z-index: 5; margin-right: 13px;">
                                        <i class="iconoir-eye fs-4" style="margin-top: 6px;"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="rememberMe"
                                           style="border-radius: 25px; border: 1px solid white">
                                    <label class="form-check-label" for="rememberMe">Ingat Saya</label>
                                </div>
                                <div>
                                    <a href="#" style="text-decoration: none;">Lupa Password?</a>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mx-3">
                            <button type="submit" class="btn btn-primary fw-bold w-100" style="border-radius: 25px">
                                MASUK
                            </button>
                        </div>
                    </form>

                    <div class="text-center mt-3">
                        <a href="/register" class="text-decoration-none text-secondary">
                            Belum punya akun? <span class="text-primary fw-semibold">Daftar di sini</span>.
                        </a>
                    </div>
                    <hr/>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function(e) {
            if (password.value) {
                const type = password.getAttribute("type") === "password" ? "text" : "password";
                password.setAttribute("type", type);
                togglePassword.innerHTML = password.getAttribute("type") === "password"
                    ? "<i class='iconoir-eye fs-4' style='margin-top: 6px;'></i>"
                    : "<i class='iconoir-eye-closed fs-4' style='margin-top: 6px;'></i>";
                e.preventDefault();
            }
        });
    </script>
</body>
</html>
