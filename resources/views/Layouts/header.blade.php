<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keyword" content="" />
    <meta name="author" content="CMS PROJECT" />

    <title>CMS - {{ $title }} </title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets_admin/images/favicon.ico') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_admin/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_admin/css/theme.min.css') }}" />

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

    <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <style>
        .nxl-submenu {
            display: none;
            padding-left: 20px;
            list-style: none;
        }

        .nxl-item.nxl-hasmenu:hover>.nxl-submenu {
            display: block;
        }

        .nxl-submenu .nxl-item a {
            color: #555;
            text-decoration: none;
        }

        .nxl-submenu .nxl-item a:hover {
            color: #007bff;
        }
    </style>
</head>

<body>
    <!-- Navigation Menu -->
    <nav class="nxl-navigation">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="{{ url('/') }}" class="b-brand">
                    <img src="{{ asset('image.png') }}" alt="" style="width: 50px; height:40px;" />
                </a>
            </div>
            <div class="navbar-content">
                <ul class="nxl-navbar">
                    <li class="nxl-item nxl-caption"><label>Navigation</label></li>
                    <li class="nxl-item nxl-hasmenu"><a href="{{ url('dashboard-admin') }}" class="nxl-link"><span class="nxl-micon"><i class="feather-airplay"></i></span><span class="nxl-mtext">About Us</span></a></li>
                    <li class="nxl-item nxl-hasmenu"><a href="{{ url('dashboard-admin/carousel') }}" class="nxl-link"><span class="nxl-micon"><i class="feather-airplay"></i></span><span class="nxl-mtext">Carousel</span></a></li>
                    <li class="nxl-item nxl-hasmenu"><a href="{{ url('dashboard-admin/tenant') }}" class="nxl-link"><span class="nxl-micon"><i class="feather-airplay"></i></span><span class="nxl-mtext">Tenant</span></a></li>
                    <li class="nxl-item nxl-hasmenu"><a href="{{ url('dashboard-admin/event') }}" class="nxl-link"><span class="nxl-micon"><i class="feather-airplay"></i></span><span class="nxl-mtext">Poster Event</span></a></li>
                    <li class="nxl-item nxl-hasmenu"><a href="{{ url('dashboard-admin/video_event') }}" class="nxl-link"><span class="nxl-micon"><i class="feather-airplay"></i></span><span class="nxl-mtext">Video</span></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="nxl-header">
        <div class="header-wrapper">
            <div class="header-left d-flex align-items-center gap-4">
                <a href="javascript:void(0);" class="nxl-head-mobile-toggler" id="mobile-collapse">
                    <div class="hamburger hamburger--arrowturn">
                        <div class="hamburger-box"><div class="hamburger-inner"></div></div>
                    </div>
                </a>
                <div class="nxl-navigation-toggle">
                    <a href="javascript:void(0);" id="menu-mini-button"><i class="feather-align-left"></i></a>
                    <a href="javascript:void(0);" id="menu-expend-button" style="display: none"><i class="feather-arrow-right"></i></a>
                </div>
            </div>

            <div class="header-right ms-auto">
                <div class="d-flex align-items-center">
                    <div class="dropdown nxl-h-item">
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" role="button" data-bs-auto-close="outside">
                            <img src="{{ asset('image.png') }}" alt="user-image" class="img-fluid user-avtar me-0" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-user-dropdown">
                            <div class="dropdown-header">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('image.png') }}" alt="user-image" class="img-fluid user-avtar" />
                                    <div>
                                        <h6 class="text-dark mb-0">Admin<span class="badge bg-soft-success text-success ms-1">PRO</span></h6>
                                        <span class="fs-12 fw-medium text-muted">leasingevent@gmail.com</span>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-divider"></div>

                            <!-- Logout Form -->
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            <a href="javascript:void(0);" class="dropdown-item"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="feather-log-out"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>
