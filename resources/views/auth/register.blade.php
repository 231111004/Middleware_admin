<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Register' }} | Cataliz</title>

    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/iconoir-icons/iconoir@main/css/iconoir.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/dist/sweetalert2.min.css">

    <style>
        .swal2-toast {
            background: #272727;
            color: white;
        }

        div:where(.swal2-icon).swal2-success {
            color: #00cc88;
            border-color: #00cc88;
        }

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

        html,
        body {
            height: 100%;
            overflow: hidden;
        }

        .page-wrapper {
            height: 100%;
            overflow: auto;
            padding: 2rem;
        }

        .card {
            max-height: 90vh;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .card-body {
            overflow-y: auto;
            padding: 2rem;
        }

        @media (max-width: 768px) {
            .card-body {
                padding: 1rem;
            }
        }
    </style>
</head>

<body style="min-height: 100vh; background: #1B1B1B; position: relative;">

    <div class="bg-1 d-none d-md-block"></div>
    <div class="bg-2 d-block d-md-none"></div>

    @if (session('resp_msg'))
        <div class="alert alert-success" role="alert">
            {{ session('resp_msg') }}
        </div>
    @endif

    <div class="d-flex align-items-center justify-content-center"
        style="min-height: 100vh; padding: 2rem; position: relative; z-index: 1; padding-bottom: 5rem;">
        <div class="card w-100" style="max-width: 700px; margin: auto;">
            <div class="card-body px-6 py-5">
                <div class="card-title">
                    <h2 class="text-primary fw-bold text-center mb-0">Daftar Sekarang</h2>
                    <h5 class="text-center fw-normal">Buat akun baru Anda</h5>
                </div>

                <form action="{{ url('/register/store') }}" method="POST">
                    @csrf
                    <div class="py-4" style="min-width: 20vw;">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" name="name-reg" class="form-control px-3"
                                placeholder="Masukkan nama lengkap" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email-reg" class="form-control px-3"
                                placeholder="contoh@gmail.com" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password-reg" class="form-control px-3"
                                placeholder="Minimal 8 karakter" required>
                        </div>

                    </div>

                    <div class="text-center mx-3">
                        <button type="submit" class="btn btn-primary fw-bold w-100"
                            style="border-radius: 25px">DAFTAR</button>
                    </div>

                    <div class="text-center mt-3">
                        <a href="/login" class="text-decoration-none text-secondary">
                            Sudah punya akun? <span class="text-primary fw-semibold">Masuk di sini</span>.
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
<script>
    @if (session('resp_msg'))
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'success',
            title: "{{ session('resp_msg') }}"
        })
    @endif
    
    $("form").on("submit", function(event) {
        const email = $("input[name='email-reg']").val();
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        if (!emailPattern.test(email)) {
            event.preventDefault();
            alert("Mohon masukkan email yang valid!");
        }
    });
</script>
</html>
