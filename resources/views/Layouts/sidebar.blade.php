<!-- resources/views/admin_page/sidebar.blade.php -->
<!--! ================================================================ !-->
<!--! [Start] Navigation Menu !-->
<!--! ================================================================ !-->
<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="{{ url('/') }}" class="b-brand">
                <!-- ========   ganti logo anda di sini   ============ -->
                <img src="{{ asset('assets/admin/images/logo-full.png') }}" alt="" class="logo logo-lg" />
                <img src="{{ asset('assets/admin/images/logo-abbr.png') }}" alt="" class="logo logo-sm" />
            </a>
        </div>
        <div class="navbar-content">
            <ul class="nxl-navbar">
                <li class="nxl-item nxl-caption">
                    <label>Navigation</label>
                </li>

                <!--! Menu Dashboards !-->
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-airplay"></i></span>
                        <span class="nxl-mtext">Dashboards</span>
                        <span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ url('index.html') }}">CRM</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ url('analytics.html') }}">Analytics</a></li>
                    </ul>
                </li>

                <!--! Menu Reports !-->
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-cast"></i></span>
                        <span class="nxl-mtext">Reports</span>
                        <span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ url('reports-sales.html') }}">Sales Report</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ url('reports-leads.html') }}">Leads Report</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ url('reports-project.html') }}">Project Report</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ url('reports-timesheets.html') }}">Timesheets Report</a></li>
                    </ul>
                </li>

                <!--! Menu Applications !-->
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-send"></i></span>
                        <span class="nxl-mtext">Applications</span>
                        <span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ url('apps-chat.html') }}">Chat</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ url('apps-email.html') }}">Email</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ url('apps-tasks.html') }}">Tasks</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ url('apps-notes.html') }}">Notes</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ url('apps-calendar.html') }}">Calendar</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ url('apps-contacts.html') }}">Contacts</a></li>
                    </ul>
                </li>

                <!-- dst... seluruh submenu Customers, Leads, Projects, Widgets, Settings, Authentication, Help Center -->
                <!--! Saya tidak potong – semua isi <ul class="nxl-navbar"> sampai </ul> harus dipindahkan ke sini -->
            </ul>

        </div>
    </div>
</nav>
<!--! ================================================================ !-->
<!--! [End] Navigation Menu !-->
<!--! ================================================================ !-->
