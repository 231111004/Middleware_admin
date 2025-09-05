<header class="nxl-header">
    <div class="header-wrapper">
        <div class="header-left d-flex align-items-center gap-4">
            <a href="javascript:void(0);" class="nxl-head-mobile-toggler" id="mobile-collapse">
                <div class="hamburger hamburger--arrowturn">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>
            <div class="nxl-navigation-toggle">
                <a href="javascript:void(0);" id="menu-mini-button">
                    <i class="feather-align-left"></i>
                </a>
                <a href="javascript:void(0);" id="menu-expend-button" style="display: none">
                    <i class="feather-arrow-right"></i>
                </a>
            </div>
        </div>
        <div class="header-right ms-auto d-flex align-items-center gap-3">
            <!-- Search -->
            <div class="dropdown nxl-h-item nxl-header-search">
                <a href="javascript:void(0);" class="nxl-head-link me-0" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <i class="feather-search"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-search-dropdown">
                    <div class="input-group search-form">
                        <span class="input-group-text">
                            <i class="feather-search fs-6 text-muted"></i>
                        </span>
                        <input type="text" class="form-control search-input-field" placeholder="Search...." />
                        <span class="input-group-text">
                            <button type="button" class="btn-close"></button>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Fullscreen -->
            <div class="nxl-h-item">
                <a href="javascript:void(0);" class="nxl-head-link" id="fullscreen-button">
                    <i class="feather-maximize-2"></i>
                </a>
            </div>

            <!-- Notifications -->
            <div class="dropdown nxl-h-item">
                <a href="javascript:void(0);" class="nxl-head-link" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <i class="feather-bell"></i>
                    <span class="nxl-badge nxl-badge-danger nxl-badge-pill nxl-badge-sm">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-notification-dropdown">
                    <div class="nxl-notification-header">
                        <h6 class="mb-0">Notifications</h6>
                    </div>
                    <ul class="nxl-notification-list">
                        <li class="nxl-notification-item">
                            <a href="javascript:void(0);">
                                <div class="nxl-notification-icon bg-primary">
                                    <i class="feather-mail"></i>
                                </div>
                                <div class="nxl-notification-text">
                                    <p class="mb-0">You have 3 new messages</p>
                                    <span class="fs-11">3 min ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="nxl-notification-item">
                            <a href="javascript:void(0);">
                                <div class="nxl-notification-icon bg-success">
                                    <i class="feather-check-circle"></i>
                                </div>
                                <div class="nxl-notification-text">
                                    <p class="mb-0">Your order is placed</p>
                                    <span class="fs-11">1 hour ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="nxl-notification-item">
                            <a href="javascript:void(0);">
                                <div class="nxl-notification-icon bg-danger">
                                    <i class="feather-alert-circle"></i>
                                </div>
                                <div class="nxl-notification-text">
                                    <p class="mb-0">Payment failed</p>
                                    <span class="fs-11">2 hours ago</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="nxl-notification-footer">
                        <a href="javascript:void(0);">View all</a>
                    </div>
                </div>
            </div>

            <!-- User Dropdown -->
            <div class="dropdown nxl-h-item">
                <a href="javascript:void(0);" class="nxl-head-link" data-bs-toggle="dropdown" role="button" data-bs-auto-close="outside">
                    <img src="{{ asset('assets/admin/images/avatar/1.png') }}" alt="user-image" class="img-fluid user-avtar me-0" />
                </a>
                <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-user-dropdown">
                    <div class="nxl-user-header">
                        <div class="nxl-user-info">
                            <h6 class="mb-0">John Doe</h6>
                            <span>john.doe@example.com</span>
                        </div>
                    </div>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="feather-user"></i>
                        <span>Profile Details</span>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="feather-activity"></i>
                        <span>Activity Feed</span>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="feather-dollar-sign"></i>
                        <span>Billing Details</span>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="feather-bell"></i>
                        <span>Notifications</span>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="feather-settings"></i>
                        <span>Account Settings</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                    <a href="javascript:void(0);" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="feather-log-out"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>