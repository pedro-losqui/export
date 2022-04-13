<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>Export SOC</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link href="{{ asset('assets/css/config/default/bootstrap.min.css') }}" rel="stylesheet"
        type="text/css" id="bs-default-stylesheet" />
    <link href="{{ asset('assets/css/config/default/app.min.css') }}" rel="stylesheet"
        type="text/css" id="app-default-stylesheet" />
    <link href="{{ asset('assets/css/config/default/bootstrap-dark.min.css') }}"
        rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled="disabled" />
    <link href="{{ asset('assets/css/config/default/app-dark.min.css') }}" rel="stylesheet"
        type="text/css" id="app-dark-stylesheet" disabled="disabled" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <livewire:styles />
</head>

<body class="loading" data-layout-mode="horizontal"
    data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>
    <div id="wrapper">
        <div class="navbar-custom">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-end mb-0">
                </ul>

                <div class="logo-box">
                    <a href="#" class="logo logo-light text-center">
                    </a>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>

        <div class="topnav">
            <div class="container-fluid">
                <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
                    <div class="collapse navbar-collapse" id="topnav-menu-content">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link arrow-none" href="{{ route('reportCompany') }}" id="topnav-dashboard" role="button"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-clipboard-list-outline me-1"></i> Relátorio Empresas
                                </a>

                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link arrow-none" href="{{ route('reportElis') }}" id="topnav-dashboard" role="button"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-clipboard-file-outline me-1"></i> Relátorio Grupo Elis
                                </a>

                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                </div>
            </div>
        </footer>
    </div>

    <div class="rightbar-overlay"></div>
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <livewire:scripts />
</body>

</html>
