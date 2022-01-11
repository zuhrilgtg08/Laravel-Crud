<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- <link rel="stylesheet" href="{{ asset('css/guru.css') }}" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- sidebar style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('newCss/style.css') }}">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

</head>

<body>
    <div class="wrapper d-flex align-items-stretch justify-content-center">
            <nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-dark">
	                    <i class="fa fa-bars text-white"></i>
	                    <span class="sr-only">Toggle Menu</span>
	                </button>
                </div>

                <h1><a href="index.html" class="logo">Online Education</a></h1>
        
                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="/home"><span class="fa fa-home mr-3"></span> Homepage</a>
                    </li>

                    <li>
                        <a href="/dasboard"><span class="fa fa-clipboard mr-3"></span> Dashboard</a>
                    </li>
            
                    <li>
                        <a href="/guru"><span class="fa fa-sticky-note mr-3"></span>Guru</a>
                    </li>

                    <li>
                        <a href="/siswa"><span class="fa fa-sticky-note mr-3"></span>Siswa</a>
                    </li>

                    <li>
                        <a href="/ruang"><span class="fa fa-sticky-note mr-3"></span>Ruang</a>
                    </li>

                    <li>
                        <a href="/kelas"><span class="fa fa-sticky-note mr-3"></span>Kelas</a>
                    </li>

                    <li>
                        <a href="/jadwal"><span class="fa fa-sticky-note mr-3"></span>Jadwal</a>
                    </li>

                    <li>
                        <a href="/form"><span class="fa fa-sticky-note mr-3"></span>Multiple Form</a>
                    </li>

                    <li>
                        <a href="/barang"><span class="fa fa-archive mr-3"></span>Barang</a>
                    </li>

                    <li>
                        <a href="#"><span class="fa fa-cog mr-3"></span> Settings</a>
                    </li>

                    <li>
                        
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            {{ __('Logout') }} <span class="fas fa-sign-in-alt"></span>                         
                        </a>  
                
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
    	    </nav>

            <div id="content" class="p-4 p-md-5 pt-5">
                @yield('content')
            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- font awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha512-fzff82+8pzHnwA1mQ0dzz9/E0B+ZRizq08yZfya66INZBz86qKTCt9MLU0NCNIgaMJCgeyhujhasnFUsYMsi0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- script sidebar -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- JavaScript -->
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

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
</body>
</html>