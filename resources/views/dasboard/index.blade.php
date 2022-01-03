<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

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
</head>

<style>

</style>
<body>
    <div class="wrapper d-flex align-items-stretch">
            <nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-dark">
	                    <i class="fa fa-bars text-white"></i>
	                    <span class="sr-only">Toggle Menu</span>
	                </button>
                </div>

                <h1><a href="index.html" class="logo">Online Class</a></h1>
        
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

            <!-- Page Content  -->
            <div id="content" class="p-4 p-md-5 pt-5">
                <div class="mx-4 h3 text-dark-600">Dashboard</div>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem dolores natus, itaque consequatur quaerat nostrum! Id illo mollitia in similique voluptate consequuntur velit corporis totam, nobis molestias amet praesentium saepe maiores quidem quam alias nulla voluptates, facere eveniet facilis cum?</p>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-8 col-lg-7">
                            <!-- Area Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Donut Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Donut Chart</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Direct
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Social
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Referral
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-7">
                            <!-- Bar Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-bar">
                                        <canvas id="myBarChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Content Column -->
                        <div class="col-xl-6 col-lg-5">
                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Server Migration <span
                                            class="float-right">35%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 35%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Sales Tracking <span
                                            class="float-right">50%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 50%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Customer Database <span
                                            class="float-right">63%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 63%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Payout Details <span
                                            class="float-right">85%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 85%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Account Setup <span
                                            class="float-right">Complete!</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>                           
                </div>
                <!-- /.container-fluid -->
            </div>
        </div>






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
    <script src="{{ asset('template/js/demo/chart-pie-demo.js') }}"></script>
    <script src="{{ asset('template/js/demo/chart-bar-demo.js') }}"></script>
</body>
</html>