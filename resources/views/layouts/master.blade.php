<!DOCTYPE html>
<html lang="en">

<head>
    <title>Master Data Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('maintemplate/assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{ asset('maintemplate/assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('maintemplate/assets/css/bootstrap/css/bootstrap.min.css') }}">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{ asset('maintemplate/assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('maintemplate/assets/icon/themify-icons/themify-icons.css') }}">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="{{ asset('maintemplate/assets/css/font-awesome-n.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('maintemplate/assets/css/font-awesome.min.css') }}">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('maintemplate/assets/css/jquery.mCustomScrollbar.css') }}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('maintemplate/assets/css/style.css') }}">
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->

    @yield('content')


    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ asset('maintemplate/assets/js/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('maintemplate/assets/js/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('maintemplate/assets/js/popper.js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('maintemplate/assets/js/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- waves js -->
    <script src="{{ asset('maintemplate/assets/pages/waves/js/waves.min.js') }}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('maintemplate/assets/js/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- slimscroll js -->
    <script src="{{ asset('maintemplate/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>

    <!-- menu js -->
    <script src="{{ asset('maintemplate/assets/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('maintemplate/assets/js/vertical/vertical-layout.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha512-fzff82+8pzHnwA1mQ0dzz9/E0B+ZRizq08yZfya66INZBz86qKTCt9MLU0NCNIgaMJCgeyhujhasnFUsYMsi0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    
    <script type="text/javascript" src="{{ asset('maintemplate/assets/js/script.js') }}"></script>
    

    
</body>

</html>
