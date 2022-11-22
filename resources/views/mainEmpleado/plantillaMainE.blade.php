<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Hotel Dashboard Template</title>
	<link rel="shortcut icon" type="{{ asset('mainEmpleado/image/x-icon')}}"
		href="{{ asset('mainEmpleado/img/favicon.png')}}'">
	<link rel="stylesheet" href="{{ asset('mainEmpleado/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('mainEmpleado/plugins/fontawesome/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('mainEmpleado/plugins/fontawesome/css/all.min.css')}}">
	<link rel="stylesheet" href="{{ asset('mainEmpleado/css/feathericon.min.css')}}">
	<link rel="stylesheet" href="{{ asset('mainEmpleado/plugins/datatables/datatables.min.css')}}">
	<link rel="stylesheet" href="{{ asset('mainEmpleado/plugins/morris/morris.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('mainEmpleado/css/bootstrap-datetimepicker.min.css')}}">
	<link rel="stylesheet" href="{{ asset('mainEmpleado/css/style.css')}}">

	<!-- css Personalizado -->
	<link rel="stylesheet" href="{{ asset('mainEmpleado/css/estilos.css')}}">
	<!-- fond wensome -->
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">
	<!-- Example: A theme's CSS that uses an older version of Font Awesome that can't be removed -->
	<!-- Add the base CSS plus Solid + Brands styles **after previous versions** -->
	<!-- update existing v5 CSS to use v6 icons and assets **after previous versions** -->

</head>
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
sin

<body>
	<div class="main-wrapper">
		<div class="header">
			<div class="header-left">
				<a href="" class="logo"> <img class="rounded-pill" src="{{ asset('main/images/logH.png')}}" a width="50"
						height="70" alt="logo">
				</a>
				<a href="index.html" class="logo logo-small"> <img src="{{ asset('mainEmpleado/img/hotel_logo.png')}}"
						alt="Logo" width="30" height="30"> </a>
			</div>
			<a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
			<a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
			<ul class="nav user-menu">
				<li class="nav-item dropdown noti-dropdown">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <i class="fe fe-bell"></i>
						<span class="badge badge-pill">3</span> </a>
					<div class="dropdown-menu notifications">
						<div class="topnav-dropdown-header"> <span class="notification-title">Notifications</span> <a
								href="javascript:void(0)" class="clear-noti"> Clear All </a> </div>
						<div class="noti-content">
							<ul class="notification-list">
								<li class="notification-message">
									<a href="#">
										<div class="media"> <span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="User Image"
													src="{{ asset('mainEmpleado/img/profiles/avatar-02.jpg')}}">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Carlson Tech</span> has
													approved <span class="noti-title">your estimate</span></p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="#">
										<div class="media"> <span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="User Image"
													src="{{ asset('mainEmpleado/img/profiles/avatar-11.jpg')}}">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">International Software
														Inc</span> has sent you a invoice in the amount of <span
														class="noti-title">$218</span></p>
												<p class="noti-time"><span class="notification-time">6 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="#">
										<div class="media"> <span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="User Image"
													src="{{ asset('mainEmpleado/img/profiles/avatar-17.jpg')}}">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">John Hendry</span> sent
													a cancellation request <span class="noti-title">Apple iPhone
														XR</span></p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="#">
										<div class="media"> <span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="User Image"
													src="{{ asset('mainEmpleado/img/profiles/avatar-13.jpg')}}">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Mercury Software
														Inc</span> added a new product <span class="noti-title">Apple
														MacBook Pro</span></p>
												<p class="noti-time"><span class="notification-time">12 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="topnav-dropdown-footer"> <a href="#">View all Notifications</a> </div>
					</div>
				</li>
				<!---------------------------------------------------Barra Usuario----------------------------------->
				<li class="nav-item dropdown has-arrow">
					<a id="navbarDropdown" class="dropdown-toggle nav-link" href="#" role="button"
						data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><span
							class="user-img"><img class="rounded-circle"
								src="{{ asset('uploads/avatars')}}/{{ Auth::user()->avatar}}" width="31"
								alt="Soeng Souy"></span>
						{{ Auth::user()->email }}
					</a>
					<div class="dropdown-menu">
						<!-- imagen log cargo nombre -->
						<div class="user-header">
							<div class="avatar avatar-sm"><img
									src="{{ asset('uploads/avatars')}}/{{ Auth::user()->avatar}}" alt="User Image"
									class="avatar-img rounded-circle">
							</div>
							<div class="user-text">
								<h6>{{ Auth::user()->name }}</h6>
								<p class="text-muted mb-0">{{ Auth::user()->roles()->first()->name }}</p>
							</div>
						</div>
						<!-- desconectarse -->
						<div class=""><a class="dropdown-item" href="{{ url('/usuario')}}">My Profile</a>
						</div>
						<a class="dropdown-item" href="settings.html">Account Settings</a>
						<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
													document.getElementById('logout-form').submit();">
							{{ __('Logout') }}
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
							@csrf
						</form>
					</div>
				</li>
			</ul>
		</div>
		<!--------------------------------------------------Menú Opciones------------------------------------------------------->
		<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li> <a href="#"><i class="fas fa-tachometer-alt"></i> <span>Dashboard </span></a> </li>
						<li class="list-divider"></li>
						<!--------------------Gestión Usuario------------------>
						<li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Usuario </span> <span
									class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{ url('persona') }}"> Gestionar Usuario </a></li>
							</ul>
						</li>
						<!--------------------Gestión Cliente------------------>
						<li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Cliente </span> <span
									class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{ url('/cliente')}}">Gestionar Cliente </a></li>
								<li><a href="{{ url('/cliente')}}">Agregar Cliente </a></li>

							</ul>
						</li>
						<!--------------------Gestión Empleado------------------>
						<li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Empleado </span> <span
									class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{ url('/empleado')}}">Gestionar Empleado </a></li>
							</ul>
						</li>
						<!--------------------Gestión Reserba------------------>
						<li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Reserva </span> <span
									class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{ url('/reserva')}}">Gestionar Reserva </a></li>
							</ul>
						</li>
						<!--------------------Gestión Habitación------------------>
						<li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Habitación </span> <span
									class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{ url('/habitacion')}}">Gestionar Habitación </a></li>
								<li><a href="edit-room.html"> Edit Rooms </a></li>
								<li><a href="add-room.html"> Add Rooms </a></li>
							</ul>
						</li>
						<!--------------------Gestión Plan------------------>
						<li class="submenu"> <a href="#"><i class="fas fa-book"></i> <span> Plan </span> <span
									class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{ url('/plan')}}">Gestionar Plan</a></li>

							</ul>
						</li>
						<!--------------------Gestión Tarifa------------------>
						<li> <a href="#"><i class="far fa-money-bill-alt"></i>
								<span>Tarifa</span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{ url('/tarifa')}}">Gestionar Tarifa </a></li>
								<li><a href="salary-veiw.html">Payslip </a></li>
							</ul>
						</li>
						<li> <a href="{{ url('/ ') }}"><i class="fas fa-share-alt"></i> <span>
									Pagina Web </span>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-envelope"></i> <span> Email </span>
								<span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="compose.html">Compose Mail </a></li>
								<li><a href="inbox.html"> Inbox </a></li>
								<li><a href="mail-veiw.html"> Mail Veiw </a></li>
							</ul>
						</li>
					</ul>
					</li>
					<!--------------------Gestión clientes------------------>
					<li class="submenu"> <a href="#"><i class="far fa-money-bill-alt"></i> <span> Accounts </span>
							<span class="menu-arrow"></span></a>
						<ul class="submenu_class" style="display: none;">
							<li><a href="invoices.html">Invoices </a></li>
							<li><a href="payments.html">Payments </a></li>
							<li><a href="expenses.html">Expenses </a></li>
							<li><a href="taxes.html">Taxes </a></li>
							<li><a href="provident-fund.html">Provident Fund </a></li>
						</ul>
					</li>

					<li> <a href="calendar.html"><i class="fas fa-calendar-alt"></i> <span>Calendar</span></a> </li>
					<li class="submenu"> <a href="#"><i class="fe fe-table"></i> <span> Blog </span> <span
								class="menu-arrow"></span></a>
						<ul class="submenu_class" style="display: none;">
							<li><a href="blog.html">Blog </a></li>
							<li><a href="blog-details.html">Blog Veiw </a></li>
							<li><a href="add-blog.html">Add Blog </a></li>
							<li><a href="edit-blog.html">Edit Blog </a></li>
						</ul>
					</li>
					<li> <a href="assets.html"><i class="fas fa-cube"></i> <span>Assests</span></a> </li>
					<li class="active"> <a href="activities.html"><i class="far fa-bell"></i>
							<span>Activities</span></a> </li>
					<li class="submenu"> <a href="#"><i class="fe fe-table"></i> <span> Reports </span> <span
								class="menu-arrow"></span></a>
						<ul class="submenu_class" style="display: none;">
							<li><a href="expense-reports.html">Expense Report </a></li>
							<li><a href="invoice-reports.html">Invoice Report </a></li>
						</ul>
					</li>
					<li> <a href="settings.html"><i class="fas fa-cog"></i> <span>Settings</span></a> </li>
					<li class="list-divider"></li>
					<li class="menu-title mt-3"> <span>UI ELEMENTS</span> </li>
					<li class="submenu"> <a href="#"><i class="fas fa-laptop"></i> <span> Components </span> <span
								class="menu-arrow"></span></a>
						<ul class="submenu_class" style="display: none;">
							<li><a href="uikit.html">UI Kit </a></li>
							<li><a href="typography.html">Typography </a></li>
							<li><a href="tabs.html">Tabs </a></li>
						</ul>
					</li>
					<li class="submenu"> <a href="#"><i class="fas fa-edit"></i> <span> Forms </span> <span
								class="menu-arrow"></span></a>
						<ul class="submenu_class" style="display: none;">
							<li><a href="form-basic-inputs.html">Basic Input </a></li>
							<li><a href="form-input-groups.html">Input Groups </a></li>
							<li><a href="form-horizontal.html">Horizontal Form </a></li>
							<li><a href="form-vertical.html">Vertical Form </a></li>
						</ul>
					</li>
					<li class="submenu"> <a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span
								class="menu-arrow"></span></a>
						<ul class="submenu_class" style="display: none;">
							<li><a href="tables-basic.html">Basic Table </a></li>
							<li><a href="tables-datatables.html">Data Table </a></li>
						</ul>
					</li>
					<li class="list-divider"></li>
					<li class="menu-title mt-3"> <span>EXTRAS</span> </li>
					<li class="submenu"> <a href="#"><i class="fas fa-columns"></i> <span> Pages </span> <span
								class="menu-arrow"></span></a>
						<ul class="submenu_class" style="display: none;">
							<li><a href="login.html">Login </a></li>
							<li><a href="register.html">Register </a></li>
							<li><a href="forgot-password.html">Forgot Password </a></li>
							<li><a href="change-password.html">Change Password </a></li>
							<li><a href="lock-screen.html">Lockscreen </a></li>
							<li><a href="profile.html">Profile </a></li>
							<li><a href="gallery.html">Gallery </a></li>
							<li><a href="error-404.html">404 Error </a></li>
							<li><a href="error-500.html">500 Error </a></li>
							<li><a href="blank-page.html">Blank Page </a></li>
						</ul>
					</li>
					<li class="submenu"> <a href="#"><i class="fas fa-share-alt"></i> <span> Multi Level </span>
							<span class="menu-arrow"></span></a>
						<ul class="submenu_class" style="display: none;">
							<li><a href="">Level 1 </a></li>
							<li><a href="">Level 2 </a></li>
						</ul>
					</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- contenidos de crud empleado-->

		@yield('contenidoEmpleado')
		<!-- crud usuario -->
		@yield('contenidoUsuario')
		<!-- crud Habitacion -->
		@yield('contenidoHabitacion')
		<!-- crud Reserva -->
		@yield('contenidoReserva')
		<!-- crud Cliente -->
		@yield('contenidoCliente')
		<!-- crud Cliente -->
		@yield('contenidoPersona')
		<!-- crud Plan -->
		@yield('contenidoPlan')

		@yield('contenidoTarifa')


	</div>
	<script src="{{ asset('mainEmpleado/js/jquery-3.5.1.min.js')}}"></script>
	<script src="{{ asset('mainEmpleado/js/popper.min.js')}}"></script>
	<script src="{{ asset('mainEmpleado/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('mainEmpleado/js/moment.min.js')}}"></script>
	<script src="{{ asset('mainEmpleado/js/select2.min.js')}}"></script>
	<script src="{{ asset('mainEmpleado/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{ asset('mainEmpleado/js/bootstrap-datetimepicker.min.js')}}"></script>
	<script src="{{ asset('mainEmpleado/plugins/datatables/jquery.dataTables.min.js')}}"></script>
	<script src="{{ asset('mainEmpleado/plugins/datatables/datatables.min.js')}}"></script>
	<script src="{{ asset('mainEmpleado/js/script.js')}}"></script>
	<script src="https://kit.fontawesome.com/47cf1f14c8.js" crossorigin="anonymous"></script>

	<script>
		$(function() {
		$('#datetimepicker3').datetimepicker({
			format: 'LT'
		});
	});
	</script>
</body>

</html>