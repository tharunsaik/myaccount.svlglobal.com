<!DOCTYPE html>
<html>
<head>
<title>SVL Global</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link href="assets/css/application.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
<!-- as of IE9 cannot parse css files with more that 4K classes separating in two files --> 
<!--[if IE 9]>
<link href="css/application-ie9-part2.css" rel="stylesheet">
<![endif]-->
<link rel="shortcut icon" href="img/favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
</head>

<body class="">
<!--
  Main sidebar seen on the left. may be static or collapsing depending on selected state.

    * Collapsing - navigation automatically collapse when mouse leaves it and expand when enters.
    * Static - stays always open.
-->
<nav id="sidebar" class="sidebar" role="navigation"> 
	<!-- need this .js class to initiate slimscroll -->
	<div class="js-sidebar-content">
		<header class="logo d-none d-md-block"><a href="#"><span><img src="assets/img/svl-globe.svg" alt=""></span> <img src="assets/img/svl-global.svg" alt=""></a> </header>
		<!-- seems like lots of recent admin template have this feature of user info in the sidebar. looks good, so adding it and enhancing with notifications -->
		<div class="sidebar-status d-md-none"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar float-right"> <img class="rounded-circle" src="../demo/img/people/a5.jpg" alt="..."> </span> 
				<!-- .circle is a pretty cool way to add a bit of beauty to raw data.
			 should be used with bg-* and text-* classes for colors --> 
				<span class="circle bg-warning fw-bold text-gray-dark"> 13 </span> &nbsp;
				Philip <strong>Smith</strong> </a> 
				<!-- #notifications-dropdown-menu goes here when screen collapsed to xs or sm --> 
		</div>
		<!-- main notification links are placed inside of .sidebar-nav -->
		<ul class="sidebar-nav">
			<li class="active">
				<a class="collapsed" href="#MasterDashboard" data-toggle="collapse" data-parent="#sidebar"><span class="icon"><i class="fas fa-tachometer-alt"></i></span> Master Dashboard <i class="toggle fa fa-angle-down"></i></a>
				<ul id="MasterDashboard" class="collapse">
					<li><a href="#">Revenue Objects</a></li>
					<li><a href="#">Services Panel</a></li>
					<li><a href="#">HRM Panel</a></li>
					<li><a href="#">Operations Panel</a></li>
					<li><a href="#">Sales Master</a></li>
					<li><a href="#">Financial Panel</a></li>
					<li><a href="#">Feedback Panel</a></li>
					<li><a href="#">Growth Panel</a></li>
					<li><a href="#">Infra Panel</a></li>
					<li><a href="#">Inventory Panel</a></li>
				</ul>
			</li>
			<li class="">
				<a class="collapsed" href="#LiveStatistics" data-toggle="collapse" data-parent="#sidebar"><span class="icon"><i class="fas fa-chart-area"></i></span> Live Statistics <i class="toggle fa fa-angle-down"></i></a>
				<ul id="LiveStatistics" class="collapse">
					<li><a href="#">Fleet Board</a></li>
					<li><a href="#">Pilots Board</a></li>
					<li><a href="#">Customer Board</a></li>
					<li><a href="#">Sales Board</a></li>
					<li><a href="#">Revenue Board</a></li>
					<li><a href="#">Inventory Board</a></li>
					<li><a href="#">Rescue Board</a></li>
					<li><a href="#">Support Board</a></li>
					<li><a href="#">Emergency Board</a></li>
				</ul>
			</li>
			<li class="">
				<a class="collapsed" href="#RevenueObjects" data-toggle="collapse" data-parent="#sidebar"><span class="icon"><i class="fas fa-rupee-sign"></i></span> Revenue Objects <i class="toggle fa fa-angle-down"></i></a>
				<ul id="RevenueObjects" class="collapse">
					<li><a href="#">Global Travel Solution (GTS)</a></li>
					<li><a href="#">Fleet Maintenance</a></li>
					<li><a href="#">Service on Wheels</a></li>
					<li><a href="#">Fleet Insurance</a></li>
					<li><a href="#">Branding with Fleet</a></li>
					<li> <a class="collapsed" href="#sidebar-sub-levels" data-toggle="collapse" data-parent="#sidebar-levels"> Level 2 <i class="toggle fa fa-angle-down"></i> </a>
						<ul id="sidebar-sub-levels" class="collapse">
							<li><a href="#">Level 3</a></li>
							<li><a href="#">Level 3</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="">
				<a class="collapsed" href="#RevenueServices" data-toggle="collapse" data-parent="#sidebar"><span class="icon"><i class="fas fa-taxi"></i></span> Revenue Services <i class="toggle fa fa-angle-down"></i></a>
				<ul id="RevenueServices" class="collapse">
					<li><a href="#">Level 1</a></li>
					<li> <a class="collapsed" href="#sidebar-sub-levels" data-toggle="collapse" data-parent="#sidebar-levels"> Level 2 <i class="toggle fa fa-angle-down"></i> </a>
						<ul id="sidebar-sub-levels" class="collapse">
							<li><a href="#">Level 3</a></li>
							<li><a href="#">Level 3</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="">
				<a class="collapsed" href="#MasterDataEntry" data-toggle="collapse" data-parent="#sidebar"><span class="icon"><i class="fas fa-server"></i></span> Master Data Entry <i class="toggle fa fa-angle-down"></i></a>
				<ul id="MasterDataEntry" class="collapse">
					<li><a href="#">Level 1</a></li>
					<li> <a class="collapsed" href="#sidebar-sub-levels" data-toggle="collapse" data-parent="#sidebar-levels"> Level 2 <i class="toggle fa fa-angle-down"></i> </a>
						<ul id="sidebar-sub-levels" class="collapse">
							<li><a href="#">Level 3</a></li>
							<li><a href="#">Level 3</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="">
				<a class="collapsed" href="#DayOperations" data-toggle="collapse" data-parent="#sidebar"><span class="icon"><i class="fas fa-calendar-day"></i></span> Day Operations <i class="toggle fa fa-angle-down"></i></a>
				<ul id="DayOperations" class="collapse">
					<li><a href="#">Level 1</a></li>
					<li> <a class="collapsed" href="#sidebar-sub-levels" data-toggle="collapse" data-parent="#sidebar-levels"> Level 2 <i class="toggle fa fa-angle-down"></i> </a>
						<ul id="sidebar-sub-levels" class="collapse">
							<li><a href="#">Level 3</a></li>
							<li><a href="#">Level 3</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="">
				<a class="collapsed" href="#BrandManagement" data-toggle="collapse" data-parent="#sidebar"><span class="icon"><i class="fas fa-copyright"></i></span> Brand Management <i class="toggle fa fa-angle-down"></i></a>
				<ul id="BrandManagement" class="collapse">
					<li><a href="#">Level 1</a></li>
					<li> <a class="collapsed" href="#sidebar-sub-levels" data-toggle="collapse" data-parent="#sidebar-levels"> Level 2 <i class="toggle fa fa-angle-down"></i> </a>
						<ul id="sidebar-sub-levels" class="collapse">
							<li><a href="#">Level 3</a></li>
							<li><a href="#">Level 3</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="">
				<a class="collapsed" href="#HRAdmin" data-toggle="collapse" data-parent="#sidebar"><span class="icon"><i class="fas fa-user-cog"></i></span> HR Admin <i class="toggle fa fa-angle-down"></i></a>
				<ul id="HRAdmin" class="collapse">
					<li><a href="#">Level 1</a></li>
					<li> <a class="collapsed" href="#sidebar-sub-levels" data-toggle="collapse" data-parent="#sidebar-levels"> Level 2 <i class="toggle fa fa-angle-down"></i> </a>
						<ul id="sidebar-sub-levels" class="collapse">
							<li><a href="#">Level 3</a></li>
							<li><a href="#">Level 3</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="">
				<a class="collapsed" href="#FinancialAdmin" data-toggle="collapse" data-parent="#sidebar"><span class="icon"><i class="fas fa-cash-register"></i></span> Financial Admin <i class="toggle fa fa-angle-down"></i></a>
				<ul id="FinancialAdmin" class="collapse">
					<li><a href="#">Level 1</a></li>
					<li> <a class="collapsed" href="#sidebar-sub-levels" data-toggle="collapse" data-parent="#sidebar-levels"> Level 2 <i class="toggle fa fa-angle-down"></i> </a>
						<ul id="sidebar-sub-levels" class="collapse">
							<li><a href="#">Level 3</a></li>
							<li><a href="#">Level 3</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="">
				<a class="collapsed" href="#Communication" data-toggle="collapse" data-parent="#sidebar"><span class="icon"><i class="fas fa-tty"></i></span> Communication <i class="toggle fa fa-angle-down"></i></a>
				<ul id="Communication" class="collapse">
					<li><a href="#">Level 1</a></li>
					<li> <a class="collapsed" href="#sidebar-sub-levels" data-toggle="collapse" data-parent="#sidebar-levels"> Level 2 <i class="toggle fa fa-angle-down"></i> </a>
						<ul id="sidebar-sub-levels" class="collapse">
							<li><a href="#">Level 3</a></li>
							<li><a href="#">Level 3</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="">
				<a class="collapsed" href="#FileManager" data-toggle="collapse" data-parent="#sidebar"><span class="icon"><i class="fas fa-folder"></i></span> File Manager <i class="toggle fa fa-angle-down"></i></a>
				<ul id="FileManager" class="collapse">
					<li><a href="#">Level 1</a></li>
					<li> <a class="collapsed" href="#sidebar-sub-levels" data-toggle="collapse" data-parent="#sidebar-levels"> Level 2 <i class="toggle fa fa-angle-down"></i> </a>
						<ul id="sidebar-sub-levels" class="collapse">
							<li><a href="#">Level 3</a></li>
							<li><a href="#">Level 3</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="">
				<a class="collapsed" href="#ContentManager" data-toggle="collapse" data-parent="#sidebar"><span class="icon"><i class="fas fa-file-alt"></i></span> Content Manager <i class="toggle fa fa-angle-down"></i></a>
				<ul id="ContentManager" class="collapse">
					<li><a href="#">Level 1</a></li>
					<li> <a class="collapsed" href="#sidebar-sub-levels" data-toggle="collapse" data-parent="#sidebar-levels"> Level 2 <i class="toggle fa fa-angle-down"></i> </a>
						<ul id="sidebar-sub-levels" class="collapse">
							<li><a href="#">Level 3</a></li>
							<li><a href="#">Level 3</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="">
				<a class="collapsed" href="#sidebar-levels" data-toggle="collapse" data-parent="#sidebar"><span class="icon"><i class="fas fa-boxes"></i></span> Inventory <i class="toggle fa fa-angle-down"></i></a>
				<ul id="sidebar-levels" class="collapse">
					<li><a href="#">Level 1</a></li>
					<li> <a class="collapsed" href="#sidebar-sub-levels" data-toggle="collapse" data-parent="#sidebar-levels"> Level 2 <i class="toggle fa fa-angle-down"></i> </a>
						<ul id="sidebar-sub-levels" class="collapse">
							<li><a href="#">Level 3</a></li>
							<li><a href="#">Level 3</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="">
				<a class="collapsed" href="#Infrastructure" data-toggle="collapse" data-parent="#sidebar"><span class="icon"><i class="fas fa-network-wired"></i></span> Infrastructure <i class="toggle fa fa-angle-down"></i></a>
				<ul id="Infrastructure" class="collapse">
					<li><a href="#">Level 1</a></li>
					<li> <a class="collapsed" href="#sidebar-sub-levels" data-toggle="collapse" data-parent="#sidebar-levels"> Level 2 <i class="toggle fa fa-angle-down"></i> </a>
						<ul id="sidebar-sub-levels" class="collapse">
							<li><a href="#">Level 3</a></li>
							<li><a href="#">Level 3</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="">
				<a class="collapsed" href="#GeneralSettings" data-toggle="collapse" data-parent="#sidebar"><span class="icon"><i class="fas fa-cogs"></i></span> General Settings</a>
				<ul id="GeneralSettings" class="collapse">
					<li><a href="#">Level 1</a></li>
					<li> <a class="collapsed" href="#sidebar-sub-levels" data-toggle="collapse" data-parent="#sidebar-levels"> Level 2 <i class="toggle fa fa-angle-down"></i> </a>
						<ul id="sidebar-sub-levels" class="collapse">
							<li><a href="#">Level 3</a></li>
							<li><a href="#">Level 3</a></li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
		<!-- every .sidebar-nav may have a title -->
		<h5 class="sidebar-nav-title">Template <a class="action-link" href="#"><i class="glyphicon glyphicon-refresh"></i></a></h5>
		<ul class="sidebar-nav">
			<li>
				<a class="collapsed" href="#sidebar-levels" data-toggle="collapse" data-parent="#sidebar"> <span class="icon"> <i class="fi flaticon-folder-10"></i> </span> Menu Levels <i class="toggle fa fa-angle-down"></i> </a>
				<ul id="sidebar-levels" class="collapse">
					<li><a href="#">Level 1</a></li>
					<li> <a class="collapsed" href="#sidebar-sub-levels" data-toggle="collapse" data-parent="#sidebar-levels"> Level 2 <i class="toggle fa fa-angle-down"></i> </a>
						<ul id="sidebar-sub-levels" class="collapse">
							<li><a href="#">Level 3</a></li>
							<li><a href="#">Level 3</a></li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
		<h5 class="sidebar-nav-title">Labels <a class="action-link" href="#"><i class="glyphicon glyphicon-plus"></i></a></h5>
		<!-- some styled links in sidebar. ready to use as links to email folders, projects, groups, etc -->
		<ul class="sidebar-labels">
				<li> <a href="#"> 
						<!-- yep, .circle again --> 
						<i class="fa fa-circle text-danger mr-xs"></i> <span class="label-name">My Recent</span> </a> </li>
				<li> <a href="#"> <i class="fa fa-circle text-primary mr-xs"></i> <span class="label-name">Starred</span> </a> </li>
				<li> <a href="#"> <i class="fa fa-circle mr-xs"></i> <span class="label-name">Background</span> </a> </li>
		</ul>
		<h5 class="sidebar-nav-title">Projects</h5>
		<!-- A place for sidebar notifications & alerts -->
		<div class="sidebar-alerts">
				<div class="alert"> <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a> <span class="fw-normal">Sales Report</span> <br>
						<div class="progress progress-xs mt-2">
								<div class="progress-bar bg-danger" role="progressbar" style="width: 16%" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<small>Calculating x-axis bias... 65%</small> </div>
				<div class="alert"> <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a> <span class="fw-normal">Personal Responsibility</span> <br>
						<div class="progress progress-xs mt-2">
								<div class="progress-bar bg-primary" role="progressbar" style="width: 23%" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<small>Provide required notes</small> </div>
		</div>
	</div>
</nav>
<!-- This is the white navigation bar seen on the top. A bit enhanced BS navbar. See .page-controls in _base.scss. -->
<nav class="page-controls navbar navbar-dashboard">
	<div class="container-fluid"> 
		<!-- .navbar-header contains links seen on xs & sm screens -->
		<div class="navbar-header mr-md-3">
			<ul class="nav navbar-nav">
				<li class="nav-item"> 
					<!-- whether to automatically collapse sidebar on mouseleave. If activated acts more like usual admin templates --> 
					<a class="d-none d-lg-block nav-link" id="nav-state-toggle" href="#">
						<i class="fas fa-bars fa-lg" data-step='1' data-intro='You can adjust sidebar, or leave it closed'></i>
					</a> 
					<!-- shown on xs & sm screen. collapses and expands navigation --> 

					<a class="d-lg-none nav-link" id="nav-collapse-toggle" href="#"> <span class="square square-lg d-md-none"><i class="la la-bars"></i></span> <i class="fas fa-bars d-none d-md-block"></i> </a>
				</li>
				<li class="nav-item d-none d-md-block ml-3"><a href="#" class="nav-link"><i class="fas fa-sync"></i></a></li>
				<li class="nav-item ml-n-xs d-none d-md-block ml-3"><a href="#" class="nav-link"><i class="fas fa-times fa-lg"></i></a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right d-md-none">
				<li class="nav-item"> 
					<!-- toggles chat --> 
					<a class="nav-link" href="#" data-toggle="chat-sidebar"> <span class="square square-lg"><i class="la la-globe fa-lg"></i></span> </a>
				</li>
			</ul>
			<!-- xs & sm screen logo --> 
			<a class="navbar-brand d-md-none" href="../dashboard/index.html"> <i class="fa fa-circle text-gray mr-n-sm"></i> <i class="fa fa-circle text-warning"></i> &nbsp;
			sing
			&nbsp; <i class="fa fa-circle text-warning mr-n-sm"></i> <i class="fa fa-circle text-gray"></i> </a>
		</div>

		<!-- this part is hidden for xs screens -->
		<div class="navbar-header mobile-hidden"> 
			<!-- search form! link it to your search server -->
			<form class="navbar-form" role="search">
				<div class="form-group">
					<div class="input-group input-group-no-border ml-4">
						<input class="form-control" id="main-search" type="text" placeholder="Search Dashboard">
						<div class="input-group-append">
							<span class="input-group-text"> <i class="fas fa-search"></i> </span>
						</div>
					</div>
				</div>
			</form>
			<ul class="nav navbar-nav float-right">
				<li class="dropdown nav-item">
					<a href="#" role="button" class="dropdown-toggle dropdown-toggle-notifications nav-link" id="notifications-dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-position="bottom-middle-aligned" data-disable-interaction="false" data-step='2' data-intro='Admin can check out his messages and tasks easily&nbsp;'> <span class="thumb-sm avatar float-left">
					<img class="rounded-circle" src="assets/img/a5.jpg" alt="..." >
						</span> &nbsp;
						Philip <strong>Smith</strong>&nbsp; <span class="circle bg-primary fw-bold text-white"> 15 </span> </a>
						<div class="dropdown-menu dropdown-menu-right animated fadeInUp py-0" aria-labelledby="notifications-dropdown-toggle" id="notifications-dropdown-menu">
								<section class="card notifications">
										<header class="card-header">
												<div class="text-center mb-sm"> <strong>You have 13 notifications</strong> </div>
												<div class="btn-group btn-group-sm btn-group-toggle" id="notifications-toggle" data-toggle="buttons">
														<label class="btn btn-default active"> 
																<!-- ajax-load plugin in action. setting data-ajax-load & data-ajax-target is the
								 only requirement for async reloading -->
																<input type="radio" checked
								   data-ajax-trigger="change"
								   data-ajax-load="../demo/ajax/notifications.html"
								   data-ajax-target="#notifications-list">
																Notifications </label>
														<label class="btn btn-default">
																<input type="radio"
								   data-ajax-trigger="change"
								   data-ajax-load="../demo/ajax/messages.html"
								   data-ajax-target="#notifications-list">
																Messages </label>
														<label class="btn btn-default">
																<input type="radio"
								   data-ajax-trigger="change"
								   data-ajax-load="../demo/ajax/progress.html"
								   data-ajax-target="#notifications-list">
																Progress </label>
												</div>
										</header>
										<!-- notification list with .thin-scroll which styles scrollbar for webkit -->
										<div id="notifications-list" class="list-group thin-scroll">
												<div class="list-group-item"> <span class="thumb-sm float-left mr clearfix"> <img class="rounded-circle" src="../demo/img/people/a3.jpg" alt="..."> </span>
														<p class="no-margin overflow-hidden"> 1 new user just signed up! Check out <a href="#">Monica Smith</a>'s account.
																<time class="help-block no-margin"> 2 mins ago </time>
														</p>
												</div>
												<a class="list-group-item" href="#"> <span class="thumb-sm float-left mr"> <i class="glyphicon glyphicon-upload fa-lg"></i> </span>
												<p class="text-ellipsis no-margin"> 2.1.0-pre-alpha just released. </p>
												<time class="help-block no-margin"> 5h ago </time>
												</a> <a class="list-group-item" href="#"> <span class="thumb-sm float-left mr"> <i class="fa fa-bolt fa-lg"></i> </span>
												<p class="text-ellipsis no-margin"> Server load limited. </p>
												<time class="help-block no-margin"> 7h ago </time>
												</a>
												<div class="list-group-item"> <span class="thumb-sm float-left mr clearfix"> <img class="rounded-circle" src="../demo/img/people/a5.jpg" alt="..."> </span>
														<p class="no-margin overflow-hidden"> User <a href="#">Jeff</a> registered
																&nbsp;&nbsp;
																<button class="btn btn-xs btn-success">Allow</button>
																<button class="btn btn-xs btn-danger">Deny</button>
																<time class="help-block no-margin"> 12:18 AM </time>
														</p>
												</div>
												<div class="list-group-item"> <span class="thumb-sm float-left mr"> <i class="fa fa-shield fa-lg"></i> </span>
														<p class="no-margin overflow-hidden"> Instructions for changing your Envato Account password. Please
																check your account <a href="#">security page</a>.
																<time class="help-block no-margin"> 12:18 AM </time>
														</p>
												</div>
												<a class="list-group-item" href="#"> <span class="thumb-sm float-left mr"> <span class="square bg-primary square-lg"> <i class="fa fa-facebook text-white"></i> </span> </span>
												<p class="text-ellipsis no-margin"> New <strong>76</strong> facebook likes received.</p>
												<time class="help-block no-margin"> 15 Apr 2014 </time>
												</a> <a class="list-group-item" href="#"> <span class="thumb-sm float-left mr"> <span class="circle circle-lg bg-gray-dark"> <i class="fa fa-circle-o text-white"></i> </span> </span>
												<p class="text-ellipsis no-margin"> Dark matter detected.</p>
												<time class="help-block no-margin"> 15 Apr 2014 </time>
												</a> </div>
										<footer class="card-footer text-sm"> 
												<!-- ajax-load button. loads demo/ajax/notifications.php to #notifications-list
						 when clicked -->
												<button class="btn-label btn-link float-right"
							id="load-notifications-btn"
							data-ajax-load="../demo/ajax/notifications.php"
							data-ajax-target="#notifications-list"
							data-loading-text="<i class='la la-refresh fa-spin mr-xs'></i> Loading..."> <i class="la la-refresh"></i> </button>
												<span class="card-footer-text">Synced at: 21 Apr 2014 18:36</span> </footer>
								</section>
						</div>
				</li>
				<li class="dropdown nav-item" >
					<a href="#" class="dropdown-toggle no-caret nav-link" data-toggle="dropdown">
						<i class="fas fa-cog fa-lg" data-step='3' data-intro='Clickable cog can provide you with link to important pages'></i> </a>
						<ul class="dropdown-menu dropdown-menu-right">
							<li><a class="dropdown-item" href="../other/profile.html"><i class="glyphicon glyphicon-user"></i> &nbsp; My Account</a></li>
							<li class="dropdown-divider"></li>
							<li><a class="dropdown-item" href="../extra/calendar.html">Calendar</a></li>
							<li><a class="dropdown-item" href="../other/inbox.html">Inbox &nbsp;&nbsp;<span class="badge badge-pill bg-danger animated bounceIn">9</span></a></li>
							<li class="dropdown-divider"></li>
							<li><a class="dropdown-item" href="../extra/login.html"><i class="la la-sign-out"></i> &nbsp; Log Out</a></li>
						</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link" data-toggle="chat-sidebar">
						<i class="fas fa-globe-asia fa-lg"></i>
					</a>
					<div id="chat-notification" class="chat-notification hide">
						<div class="chat-notification-inner">
							<h6 class="title"> <span class="thumb-xs"> <img src="../demo/img/people/a6.jpg" class="rounded-circle mr-xs float-left"> </span> Jess Smith </h6>
							<p class="text">Hey! What's up?</p>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</nav>
<div class="chat-sidebar" id="chat">
	<div class="chat-sidebar-content">
		<header class="chat-sidebar-header">
			<h5 class="chat-sidebar-title">Contacts</h5>
			<div class="form-group no-margin">
				<div class="input-group input-group-transparent">
					<input class="form-control fs-mini" id="chat-sidebar-search" type="text" placeholder="Search...">
					<span class="input-group-append"> <span class="input-group-text"> <i class="fa fa-search"></i> </span> </span>
				</div>
			</div>
		</header>
		<div class="chat-sidebar-contacts chat-sidebar-panel open">
				<h5 class="sidebar-nav-title">Today</h5>
				<div class="list-group chat-sidebar-user-group"> <a class="list-group-item" href="#chat-sidebar-user-1"> <span class="thumb-sm float-left mr-3"> <img class="rounded-circle" src="../demo/img/people/a2.jpg" alt="..."> </span>
				<div>
						<h6 class="message-sender">Chris Gray</h6>
						<p class="message-preview">Hey! What's up? So many times since we</p>
				</div>
				<i class="fa fa-circle text-success ml-auto"></i> </a> <a class="list-group-item" href="#chat-sidebar-user-2"> <span class="thumb-sm float-left mr-3"> <img class="rounded-circle" src="../img/avatar.png" alt="..."> </span>
				<div>
						<h6 class="message-sender">Jamey Brownlow</h6>
						<p class="message-preview">Good news coming tonight. Seems they agreed to proceed</p>
				</div>
				<i class="fa fa-circle text-gray-light ml-auto"></i> </a> <a class="list-group-item" href="#chat-sidebar-user-3"> <span class="thumb-sm float-left mr-3"> <img class="rounded-circle" src="../demo/img/people/a1.jpg" alt="..."> </span>
				<div>
						<h6 class="message-sender">Livia Walsh</h6>
						<p class="message-preview">Check out my latest email plz!</p>
				</div>
				<i class="fa fa-circle text-danger ml-auto"></i> </a> <a class="list-group-item" href="#chat-sidebar-user-4"> <span class="thumb-sm float-left mr-3"> <img class="rounded-circle" src="../img/avatar.png" alt="..."> </span>
				<div>
						<h6 class="message-sender">Jaron Fitzroy</h6>
						<p class="message-preview">What about summer break?</p>
				</div>
				<i class="fa fa-circle text-gray-light ml-auto"></i> </a> <a class="list-group-item" href="#chat-sidebar-user-5"> <span class="thumb-sm float-left mr-3"> <img class="rounded-circle" src="../demo/img/people/a4.jpg" alt="..."> </span>
				<div>
						<h6 class="message-sender">Mike Lewis</h6>
						<p class="message-preview">Just ain't sure about the weekend now. 90% I'll make it.</p>
				</div>
				<i class="fa fa-circle text-success ml-auto"></i> </a> </div>
		<h5 class="sidebar-nav-title">Last Week</h5>
		<div class="list-group chat-sidebar-user-group"> <a class="list-group-item" href="#chat-sidebar-user-6"> <span class="thumb-sm float-left mr-3"> <img class="rounded-circle" src="../demo/img/people/a6.jpg" alt="..."> </span>
				<div>
						<h6 class="message-sender">Freda Edison</h6>
						<p class="message-preview">Hey what's up? Me and Monica going for a lunch somewhere. Wanna join?</p>
				</div>
				<i class="fa fa-circle text-gray-light ml-auto"></i> </a> <a class="list-group-item" href="#chat-sidebar-user-7"> <span class="thumb-sm float-left mr-3"> <img class="rounded-circle" src="../demo/img/people/a5.jpg" alt="..."> </span>
				<div>
						<h6 class="message-sender">Livia Walsh</h6>
						<p class="message-preview">Check out my latest email plz!</p>
				</div>
				<i class="fa fa-circle text-success ml-auto"></i> </a> <a class="list-group-item" href="#chat-sidebar-user-8"> <span class="thumb-sm float-left mr-3"> <img class="rounded-circle" src="../demo/img/people/a3.jpg" alt="..."> </span>
				<div>
						<h6 class="message-sender">Jaron Fitzroy</h6>
						<p class="message-preview">What about summer break?</p>
				</div>
				<i class="fa fa-circle text-warning ml-auto"></i> </a> <a class="list-group-item" href="#chat-sidebar-user-9"> <span class="thumb-sm float-left mr-3"> <img class="rounded-circle" src="../img/avatar.png" alt="..."> </span>
				<div>
						<h6 class="message-sender">Mike Lewis</h6>
						<p class="message-preview">Just ain't sure about the weekend now. 90% I'll make it.</p>
				</div>
				<i class="fa fa-circle text-gray-light ml-auto"></i> </a> </div>
		</div>
		<div class="chat-sidebar-chat chat-sidebar-panel" id="chat-sidebar-user-1">
				<h6 class="title"> <a class="js-back" href="#"> <i class="fa fa-angle-left mr-xs"></i> Chris Gray </a> </h6>
				<ul class="message-list">
						<li class="message"> <span class="thumb-sm"> <img class="rounded-circle" src="../demo/img/people/a2.jpg" alt="..."> </span>
								<div class="message-body"> Hey! What's up? </div>
						</li>
						<li class="message"> <span class="thumb-sm"> <img class="rounded-circle" src="../demo/img/people/a2.jpg" alt="..."> </span>
								<div class="message-body"> Are you there? </div>
						</li>
						<li class="message"> <span class="thumb-sm"> <img class="rounded-circle" src="../demo/img/people/a2.jpg" alt="..."> </span>
								<div class="message-body"> Let me know when you come back. </div>
						</li>
						<li class="message from-me"> <span class="thumb-sm"> <img class="rounded-circle" src="../img/avatar.png" alt="..."> </span>
								<div class="message-body"> I am here! </div>
						</li>
				</ul>
		</div>
		<div class="chat-sidebar-chat chat-sidebar-panel" id="chat-sidebar-user-2">
				<h6 class="title"> <a class="js-back" href="#"> <i class="fa fa-angle-left mr-xs"></i> Jamey Brownlow </a> </h6>
				<ul class="message-list">
				</ul>
		</div>
		<div class="chat-sidebar-chat chat-sidebar-panel" id="chat-sidebar-user-3">
				<h6 class="title"> <a class="js-back" href="#"> <i class="fa fa-angle-left mr-xs"></i> Livia Walsh </a> </h6>
				<ul class="message-list">
				</ul>
		</div>
		<div class="chat-sidebar-chat chat-sidebar-panel" id="chat-sidebar-user-4">
				<h6 class="title"> <a class="js-back" href="#"> <i class="fa fa-angle-left mr-xs"></i> Jaron Fitzroy </a> </h6>
				<ul class="message-list">
				</ul>
		</div>
		<div class="chat-sidebar-chat chat-sidebar-panel" id="chat-sidebar-user-5">
				<h6 class="title"> <a class="js-back" href="#"> <i class="fa fa-angle-left mr-xs"></i> Mike Lewis </a> </h6>
				<ul class="message-list">
				</ul>
		</div>
		<div class="chat-sidebar-chat chat-sidebar-panel" id="chat-sidebar-user-6">
				<h6 class="title"> <a class="js-back" href="#"> <i class="fa fa-angle-left mr-xs"></i> Freda Edison </a> </h6>
				<ul class="message-list">
				</ul>
		</div>
		<div class="chat-sidebar-chat chat-sidebar-panel" id="chat-sidebar-user-7">
				<h6 class="title"> <a class="js-back" href="#"> <i class="fa fa-angle-left mr-xs"></i> Livia Walsh </a> </h6>
				<ul class="message-list">
				</ul>
		</div>
		<div class="chat-sidebar-chat chat-sidebar-panel" id="chat-sidebar-user-8">
				<h6 class="title"> <a class="js-back" href="#"> <i class="fa fa-angle-left mr-xs"></i> Jaron Fitzroy </a> </h6>
				<ul class="message-list">
				</ul>
		</div>
		<div class="chat-sidebar-chat chat-sidebar-panel" id="chat-sidebar-user-9">
				<h6 class="title"> <a class="js-back" href="#"> <i class="fa fa-angle-left mr-xs"></i> Mike Lewis </a> </h6>
				<ul class="message-list">
				</ul>
		</div>
		<footer class="chat-sidebar-footer form-group">
				<input class="form-control fs-sm" id="chat-sidebar-input" type="text"  placeholder="Type your message">
		</footer>
	</div>
</div>
<div class="theme-helper d-none">
		<section class="widget theme-helper-content">
				<header class="theme-helper-header d-flex p-0">
						<div class="theme-helper-toggler hidden-print" data-step='4' data-position="left" data-intro="It's a theme customizer sidebar, go inside it!">
								<div class="theme-helper-spinner bg-primary text-white"> <i class="la la-cog"></i> <i class="la la-cog fs-smaller"></i> </div>
						</div>
						<h5>Configuration</h5>
				</header>
				<div class="widget-body mt-3">
						<h6>Navbar Type</h6>
						<div class="form-group row justify-content-around">
								<div class="abc-radio">
										<input type="radio" checked name="navbar-type" id="navbar_static" value="static">
										<label for="navbar_static">Static</label>
								</div>
								<div class="abc-radio">
										<input type="radio" name="navbar-type" id="navbar_floating" value="floating">
										<label for="navbar_floating">Floating</label>
								</div>
						</div>
						<h6>Navbar Color</h6>
						<ul class="colors-list">
								<li class="color-box-nav-bar" style="background-color: rgb(0, 43, 73);" data-style="first"></li>
								<li class="color-box-nav-bar active" style="background-color: rgb(255, 255, 255);" data-style="second"></li>
								<li class="color-box-nav-bar" style="background-color: rgb(0, 68, 114);" data-style="third"></li>
								<li class="color-box-nav-bar" style="background-color: rgb(233, 235, 239);" data-style="fourth"></li>
								<li class="color-box-nav-bar" style="background-color: rgb(209, 231, 245);" data-style="fifth"></li>
								<li class="color-box-nav-bar" style="background-color: rgb(204, 221, 233);" data-style="sixth"></li>
								<li class="color-box-nav-bar" style="background-color: rgb(214, 223, 230);" data-style="seventh"></li>
								<li class="color-box-nav-bar" style="background-color: rgb(19, 25, 29);" data-style="eighth"></li>
								<li class="color-box-nav-bar" style="background-color: rgb(32, 174, 140);" data-style="ninth"></li>
						</ul>
						<h6>Sidebar Type</h6>
						<div class="form-group row justify-content-around">
								<div class="abc-radio">
										<input type="radio" checked name="sidebar-type" id="sidebar_transparent" value="transparent">
										<label for="sidebar_transparent">Transparent</label>
								</div>
								<div class="abc-radio">
										<input type="radio" name="sidebar-type" id="sidebar_solid" value="solid" checked>
										<label for="sidebar_solid">Solid</label>
								</div>
						</div>
						<h6>Sidebar Color</h6>
						<ul class="colors-list">
								<li class="color-box-side-bar active" style="background-color: rgb(0, 43, 73);" data-style="first"></li>
								<li class="color-box-side-bar" style="background-color: rgb(255, 255, 255);" data-style="second"></li>
								<li class="color-box-side-bar" style="background-color: rgb(0, 68, 114);" data-style="third"></li>
								<li class="color-box-side-bar" style="background-color: rgb(233, 235, 239);" data-style="fourth"></li>
								<li class="color-box-side-bar" style="background-color: rgb(209, 231, 245);" data-style="fifth"></li>
								<li class="color-box-side-bar" style="background-color: rgb(204, 221, 233);" data-style="sixth"></li>
								<li class="color-box-side-bar" style="background-color: rgb(214, 223, 230);" data-style="seventh"></li>
								<li class="color-box-side-bar" style="background-color: rgb(19, 25, 29);" data-style="eighth"></li>
								<li class="color-box-side-bar" style="background-color: rgb(32, 174, 140);" data-style="ninth"></li>
						</ul>
						<div class="d-flex justify-content-between mt-lg"> <a role="button"
                       target="_blank"
                       href="https://flatlogic.com/contact"
                       class="btn btn-outline-default btn-rounded-f fs-mini text-muted"> <i class="glyphicon glyphicon-headphones mr-xs"></i> Support </a> <a role="button"
                       target="_blank"
                       href="https://github.com/flatlogic/sing-app"
                       class="btn btn-outline-default btn-rounded-f fs-mini text-muted"> <i class="fa fa-github mr-xs"></i> Github </a> </div>
						<div class="mt-lg d-flex flex-column align-items-center theme-sharing"> <span class="fs-sm"> Thank you for sharing! </span>
								<div class="d-flex justify-content-center text-light mt-2"> <a target="_blank"
                           href="https://twitter.com/intent/tweet?text=Admin%20dashboard%20template%20built%20with%20NodeJS,%20React%20and%20Bootstrap%204!&url=https://demo.flatlogic.com/sing-app/html-bs4/&via=flatlogic"> <i class="fa fa-twitter pr-1"></i> </a> <a href="https://www.facebook.com/sharer/sharer.php?u=https://demo.flatlogic.com/sing-app/html-bs4/"
                           target="_blank"> <i class="fa fa-facebook pl-1"></i> </a> </div>
						</div>
				</div>
		</section>
</div>