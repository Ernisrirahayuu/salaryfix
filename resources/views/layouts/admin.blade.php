@role('admin')
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Salary Pegawai</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{asset('/assets/css/animate.min.css')}}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{asset('/assets/css/light-bootstrap-dashboard.css?v=1.4.0')}}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('/assets/css/demo.css')}}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('/assets/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
    <style type="text/css">
        body {
        /*background-image: url("/img/welcome.jpg");*/
        /*-webkit-background-size: 100% 100%;*/
                /*-moz-background-size: 100% 100%;*/
                /*-o-background-size: 100% 100%;*/
                /*background-size: 100% 100%;*/
        }   
    </style>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>


<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	 <div class="sidebar-wrapper">
            <div class="logo">
                <a href="/home" class="simple-text">
            <img class="navbar-brand-logo" src="{{asset('cc.png')}}" style="width: 100px;height: 40px;">
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="/Jabatan"> <i class="pe-7s-portfolio"></i><p>Jabatan</p></a>
                </li>
                <li>
                    <a href="/Golongan"><i class="pe-7s-hourglass"></i><p>Golongan</p></a>
                </li>
                <li>
                    <a href="/Kategori_Lembur"><i class="pe-7s-wristwatch"></i><p>Kategori Lembur</p></a>
                </li>
                <li>
                    <a href="/Pegawai"><i class="pe-7s-users"></i><p>Pegawai</p></a>
                </li>
   
                <li>
                    <a href="/Lembur_Pegawai"><i class="pe-7s-wristwatch"></i><p>Lembur Pegawai</p></a>
                </li>
                 <li class="dropdown">
                    <a href="/Tunjangan"><i class="pe-7s-gift"></i><p>Tunjangan</p></a>
                    <a href="/Status"><i class="pe-7s-medal"></i><p>Status</p></a>
                
                   <a href="/Jumlah"><i class="pe-7s-server"></i><p>Jumlah</p></a>
                </li>
                <!-- <li>
                    <a href="/Tunjangan_Pegawai"><i class="pe-7s-gift"></i><p>Tunjangan Pegawai</p></a>
                </li> -->
                <li>
                    <a href="/Penggajian"><i class="pe-7s-cash"></i><p>Penggajian</p></a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{url('/')}}">Penggajian</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
            @yield('content')
                <!-- <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Striped Table with Hover</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>Salary</th>
                                    	<th>Country</th>
                                    	<th>City</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        	<td>1</td>
                                        	<td>Dakota Rice</td>
                                        	<td>$36,738</td>
                                        	<td>Niger</td>
                                        	<td>Oud-Turnhout</td>
                                        </tr>
                                        <tr>
                                        	<td>2</td>
                                        	<td>Minerva Hooper</td>
                                        	<td>$23,789</td>
                                        	<td>Curaçao</td>
                                        	<td>Sinaai-Waas</td>
                                        </tr>
                                        <tr>
                                        	<td>3</td>
                                        	<td>Sage Rodriguez</td>
                                        	<td>$56,142</td>
                                        	<td>Netherlands</td>
                                        	<td>Baileux</td>
                                        </tr>
                                        <tr>
                                        	<td>4</td>
                                        	<td>Philip Chaney</td>
                                        	<td>$38,735</td>
                                        	<td>Korea, South</td>
                                        	<td>Overland Park</td>
                                        </tr>
                                        <tr>
                                        	<td>5</td>
                                        	<td>Doris Greene</td>
                                        	<td>$63,542</td>
                                        	<td>Malawi</td>
                                        	<td>Feldkirchen in Kärnten</td>
                                        </tr>
                                        <tr>
                                        	<td>6</td>
                                        	<td>Mason Porter</td>
                                        	<td>$78,615</td>
                                        	<td>Chile</td>
                                        	<td>Gloucester</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">Erni</a>, made with love for a better web
                </p>
            </div>
        </footer>


    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="{{asset('/assets/js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="{{asset('/assets/js/chartist.min.js')}}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{asset('/assets/js/bootstrap-notify.js')}}"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="{{asset('/assets/js/light-bootstrap-dashboard.js?v=1.4.0')}}"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="{{asset('/assets/js/demo.js')}}"></script>


</html>
@endrole