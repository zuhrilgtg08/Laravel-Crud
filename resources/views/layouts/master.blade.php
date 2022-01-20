<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- sidebar 09 -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('sidebar-09/css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- SB Admin -->
    <link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- data Tables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
</head>
<body>
    <div class="wrapper d-flex align-items-stretch">
		<nav id="sidebar">
			<div class="custom-menu">
				<button type="button" id="sidebarCollapse" class="btn btn-primary"></button>
            </div>
            
            <div class="img bg-wrap text-center py-4" style="background-image: url({{ asset('sidebar-09/images/bg_1.jpg') }});">
                <div class="user-logo">
                    <div class="img" style="background-image: url({{ asset('sidebar-09/images/gtg.jfif') }});"></div>
                    <h3>Ahmad Zuhril</h3>
                </div>
            </div>

            <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a href="/home"><span class="fas fa-tachometer-alt mr-3"></span> Dasboard</a>
                </li>

                <li>
                    <a href="/guru"><span class="fas fa-address-card mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span> Teacher Data</a>
                </li>

                <li>
                    <a href="/siswa"><span class="fas fa-user-graduate mr-3"></span> Students Data</a>
                </li>

                <li>
                    <a href="/kelas"><span class="fas fa-school mr-3"></span> Classroom Data</a>
                </li>

                <li>
                    <a href="/ruang"><span class="fas fa-restroom mr-3"></span> Rooms Data</a>
                </li>

                <li>
                    <a href="/komputer"><span class="fas fa-archive mr-3"></span> Items Data</a>
                </li>

                <li>
                    <a href="/form"><span class="fas fa-folder-minus mr-3 notif"><small class="d-flex align-items-center justify-content-center">11</small></span> Users Data</a>
                </li>

                <li>
                    <a href="/jadwal"><span class="fas fa-sticky-note mr-3 notif"><small class="d-flex align-items-center justify-content-center">9</small></span> Lesson Data</a>
                </li>

                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <span class="fas fa-sign-out-alt mr-3"></span> Sign Out                       
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
    	</nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            @yield('content')
        </div>
	</div>


    


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('template/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('template/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('template/js/demo/chart-pie-demo.js') }}"></script>

    <!-- script sidebar 09 -->
    <script src="{{ asset('sidebar-09/js/jquery.min.js') }}"></script>
    <script src="{{ asset('sidebar-09/js/popper.js') }}"></script>
    <script src="{{ asset('sidebar-09/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('sidebar-09/js/main.js') }}"></script>

    <!-- data tables js -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    @yield('script')
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
</body>
</html>