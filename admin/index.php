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
<div class="content-wrap"> 
	<!-- main page content. the place to put widgets in. usually consists of .row > .col-lg-* > .widget.  -->
	<main id="content" class="content" role="main"> 
		<!-- Page content -->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">YOU ARE HERE</li>
			<li class="breadcrumb-item active">Analytics</li>
		</ol>
		<h1 class="page-title"> Analytics <small> <small>Company Performance</small> </small> </h1>
		<div class="analytics">
			<div class="analytics-side">
					<div class="row">
							<div class="col-xl-3 col-md-6">
									<div class="pb-xlg h-100">
											<section class="widget mb-0 h-100">
													<header>
															<h4>Visits Today</h4>
															<div class="widget-controls"> <a data-widgster="close" title="Close" href="#"><i class="la la-remove"></i></a> </div>
													</header>
													<div class="widget-body">
															<div class="d-flex justify-content-between align-items-center mb-lg">
																	<h2 data-toggle="tooltip" data-placement="right" title="+20% vs Yesterday">4,332</h2>
																	<i class="la la-lg la-arrow-right text-primary rotate-315"></i> </div>
															<div class="d-flex flex-wrap justify-content-between">
																	<div class="mt visit-element" data-toggle="tooltip" data-placement="top"
						title="+17.3% vs Yesterday">
																			<h6>+830</h6>
																			<p class="text-muted mb-0"><small>Logins</small></p>
																	</div>
																	<div class="mt visit-element" data-toggle="tooltip" data-placement="top"
						title="10% per Month">
																			<h6>0.5%</h6>
																			<p class="text-muted mb-0"><small>Sign Out</small></p>
																	</div>
																	<div class="mt visit-element" data-toggle="tooltip" data-placement="top"
						title="86.4% per Month">
																			<h6>4.5%</h6>
																			<p class="text-muted mb-0"><small>Rate</small></p>
																	</div>
															</div>
													</div>
											</section>
									</div>
							</div>
							<div class="col-xl-3 col-md-6">
									<div class="pb-xlg h-100">
											<section class="widget mb-0 h-100">
													<header>
															<h5>Revenue Breakdown</h5>
															<div class="widget-controls"> <a data-widgster="close" title="Close" href="#"><i class="la la-remove"></i></a> </div>
													</header>
													<div class="widget-body">
															<div class="row">
																	<div class="col-lg-7 col-md-6 col-xs-12" data-toggle="tooltip" data-placement="top"
						title="Orders since last refresh" id="flot-donut" style="height: 100px;"></div>
																	<div class="col-lg-4 col-md-5 display-flex flex-column justify-content-center"
						id="flot-donut-legend"></div>
															</div>
													</div>
											</section>
									</div>
							</div>
							<div class="col-xl-3 col-md-6">
									<div class="pb-xlg h-100">
											<section class="widget mb-0 h-100">
													<header>
															<h5>App Performance</h5>
															<div class="widget-controls"> <a data-widgster="close" title="Close" href="#"><i class="la la-remove"></i></a> </div>
													</header>
													<div class="widget-body">
															<p class="text-muted d-flex flex-wrap"> <small class="mr-lg d-flex align-items-center" data-toggle="tooltip"
						data-placement="top" title="Year 2019"> <span class="circle bg-danger text-danger mr-xs" style="font-size: 4px;"></span> This Period </small> <small class="mr-lg d-flex align-items-center" data-toggle="tooltip"
						data-placement="top" title="Year 2019"> <span class="circle bg-primary text-primary mr-xs" style="font-size: 4px;"></span> Last Period </small> </p>
															<h6>SDK</h6>
															<div class="progress progress-xs mb-xs">
																	<div class="progress-bar bg-danger" role="progressbar" style="width: 60%;"
						aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
															<div class="progress progress-xs">
																	<div class="progress-bar bg-primary" role="progressbar" style="width: 30%;"
						aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
															<h6 class="mt-sm">Integration</h6>
															<div class="progress progress-xs mb-xs">
																	<div class="progress-bar bg-danger" role="progressbar" style="width: 40%;"
						aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
															<div class="progress progress-xs">
																	<div class="progress-bar bg-primary" role="progressbar" style="width: 55%;"
						aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
													</div>
											</section>
									</div>
							</div>
							<div class="col-xl-3 col-md-6">
									<div class="pb-xlg h-100">
											<section class="widget mb-0 h-100">
													<header>
															<h5>Server Overview</h5>
															<div class="widget-controls"> <a data-widgster="close" title="Close" href="#"><i class="la la-remove"></i></a> </div>
													</header>
													<div class="widget-body">
															<div class="d-flex align-items-center mb-sm">
																	<p class="width-150" data-toggle="tooltip" data-placement="top"
						title="+23% vs last period"><small>60% / 37°С / 3.3 Ghz</small></p>
																	<div class="sparkline-wrapper" style="width: calc(100% - 150px);">
																			<div id="sparkline"></div>
																	</div>
															</div>
															<div class="d-flex align-items-center mb-sm">
																	<p class="width-150" data-toggle="tooltip" data-placement="top"
						title="+30% vs last period"><small>54% / 31°С / 3.3 Ghz</small></p>
																	<div class="sparkline-wrapper" style="width: calc(100% - 150px);">
																			<div id="sparkline-1"></div>
																	</div>
															</div>
															<div class="d-flex align-items-center mb-sm">
																	<p class="width-150" data-toggle="tooltip" data-placement="top"
						title="+21% vs last period"><small>57% / 21°С / 3.3 Ghz</small></p>
																	<div class="sparkline-wrapper" style="width: calc(100% - 150px);">
																			<div id="sparkline-2"></div>
																	</div>
															</div>
													</div>
											</section>
									</div>
							</div>
							<div class="col-12">
									<section class="widget mb-xlg">
											<header class="row">
													<h5 class="col-sm-5"> Daily <span class="fw-semi-bold">Line Chart</span> </h5>
													<div class="col-sm-7" id="main-chart-legend"></div>
													<div class="widget-controls"> <a data-widgster="expand" title="Expand" href="#"><i class="la la-angle-up"></i></a> <a data-widgster="collapse" title="Collapse" href="#"><i class="la la-angle-down"></i></a> <a data-widgster="close" title="Close" href="#"><i class="la la-remove"></i></a> </div>
											</header>
											<div class="widget-body">
													<div id="main-chart" style="width: 100%; height: 250px;"></div>
													<div class="chart-tooltip" id="main-chart-tooltip"></div>
											</div>
									</section>
							</div>
							<div class="col-sm-12 col-lg-6 col-xl-4">
									<div class="pb-xlg h-100">
											<section class="widget mb-0 h-100">
													<header class="d-flex justify-content-between flex-wrap">
															<h4 class="d-flex align-items-center pb-1 big-stat-title"> <span class="circle bg-primary mr-sm" style="font-size: 6px;"></span> Statistic <span class="fw-normal ml-xs">Light Blue</span> </h4>
															<select class="selectpicker" data-style="btn-default" data-width="auto" tabindex="-1"
					id="simple-select">
																	<option class="dropdown-item" value="1">Weekly</option>
																	<option class="dropdown-item" value="2">Daily</option>
																	<option class="dropdown-item" value="3">Monthly</option>
															</select>
													</header>
													<div class="widget-body p-0">
															<h4 class="fw-semi-bold ml-lg mb-lg">4,232</h4>
															<div class="d-flex border-top">
																	<div class="w-50 border-right p-3 px-4">
																			<div class="d-flex justify-content-between align-items-center">
																					<h6>+830</h6>
																					<i class="la la-arrow-right la-lg text-primary rotate-315"></i> </div>
																			<p class="text-muted mb-0 mr"><small>Registrations</small></p>
																	</div>
																	<div class="w-50 p-3 px-4">
																			<div class="d-flex justify-content-between align-items-center">
																					<h6>4.5%</h6>
																					<i class="la la-arrow-right la-lg text-danger rotate-45"></i> </div>
																			<p class="text-muted mb-0 mr"><small>Bounce Rate</small></p>
																	</div>
															</div>
													</div>
											</section>
									</div>
							</div>
							<div class="col-sm-12 col-lg-6 col-xl-4">
									<div class="pb-xlg h-100">
											<section class="widget mb-0 h-100">
													<header class="d-flex justify-content-between flex-wrap">
															<h4 class="d-flex align-items-center pb-1 big-stat-title"> <span class="circle bg-danger mr-sm" style="font-size: 6px;"></span> Statistic <span class="fw-normal ml-xs">Sing App</span> </h4>
															<select class="selectpicker" data-style="btn-default" data-width="auto" tabindex="-1"
					id="simple-select">
																	<option class="dropdown-item" value="1">Weekly</option>
																	<option class="dropdown-item" value="2">Daily</option>
																	<option class="dropdown-item" value="3">Monthly</option>
															</select>
													</header>
													<div class="widget-body p-0">
															<h4 class="fw-semi-bold ml-lg mb-lg">754</h4>
															<div class="d-flex border-top">
																	<div class="w-50 border-right p-3 px-4">
																			<div class="d-flex justify-content-between align-items-center">
																					<h6>+30</h6>
																					<i class="la la-arrow-right la-lg text-primary rotate-315"></i> </div>
																			<p class="text-muted mb-0 mr"><small>Registrations</small></p>
																	</div>
																	<div class="w-50 p-3 px-4">
																			<div class="d-flex justify-content-between align-items-center">
																					<h6>2.5%</h6>
																					<i class="la la-arrow-right la-lg text-primary rotate-315"></i> </div>
																			<p class="text-muted mb-0 mr"><small>Bounce Rate</small></p>
																	</div>
															</div>
													</div>
											</section>
									</div>
							</div>
							<div class="col-sm-12 col-lg-6 col-xl-4">
									<div class="pb-xlg h-100">
											<section class="widget mb-0 h-100">
													<header class="d-flex justify-content-between flex-wrap">
															<h4 class="d-flex align-items-center pb-1 big-stat-title"> <span class="circle bg-info mr-sm" style="font-size: 6px;"></span> Statistic <span class="fw-normal ml-xs">RNS</span> </h4>
															<select class="selectpicker" data-style="btn-default" data-width="auto" tabindex="-1"
					id="simple-select">
																	<option class="dropdown-item" value="1">Weekly</option>
																	<option class="dropdown-item" value="2">Daily</option>
																	<option class="dropdown-item" value="3">Monthly</option>
															</select>
													</header>
													<div class="widget-body p-0">
															<h4 class="fw-semi-bold ml-lg mb-lg">1,025</h4>
															<div class="d-flex border-top">
																	<div class="w-50 border-right p-3 px-4">
																			<div class="d-flex justify-content-between align-items-center">
																					<h6>+230</h6>
																					<i class="la la-arrow-right la-lg text-primary rotate-315"></i> </div>
																			<p class="text-muted mb-0 mr"><small>Registrations</small></p>
																	</div>
																	<div class="w-50 p-3 px-4">
																			<div class="d-flex justify-content-between align-items-center">
																					<h6>21.5%</h6>
																					<i class="la la-arrow-right la-lg text-danger rotate-45"></i> </div>
																			<p class="text-muted mb-0 mr"><small>Bounce Rate</small></p>
																	</div>
															</div>
													</div>
											</section>
									</div>
							</div>
							<div class="col-12 mb-lg">
									<section class="widget pb-0">
											<header>
													<h4> Support <strong>Requests</strong> </h4>
													<div class="widget-controls"> <a href="#"><i class="la la-cog"></i></a> <a href="#" data-widgster="close"><i class="la la-remove"></i></a> </div>
											</header>
											<div class="widget-body p-0 support table-wrapper">
													<table class="table table-striped mb-0">
															<thead>
																	<tr class="text-muted">
																			<th scope="col"><span class=" pl-3">NAME</span></th>
																			<th scope="col">EMAIL</th>
																			<th scope="col">PRODUCT</th>
																			<th scope="col">PRICE</th>
																			<th scope="col">DATE</th>
																			<th scope="col">CITY</th>
																			<th scope="col">STATUS</th>
																	</tr>
															</thead>
															<tbody class="text-dark">
																	<tr>
																			<th class="pl-4 fw-normal">Mark Otto</th>
																			<td>ottoto@wxample.com</td>
																			<td>ON the Road</td>
																			<td>$25 224.2</td>
																			<td>11 May 2017</td>
																			<td>Otsego</td>
																			<td><button class="btn btn-xs p-1 px-3 btn-info">Sent</button></td>
																	</tr>
																	<tr>
																			<th class="pl-4">Jacob Thornton</th>
																			<td>thornton@wxample.com</td>
																			<td>HP Core i7</td>
																			<td>$1 254.2</td>
																			<td>4 Jun 2017</td>
																			<td>Fivepointville</td>
																			<td><button class="btn btn-xs p-1 px-3 btn-info">Sent</button></td>
																	</tr>
																	<tr>
																			<th class="pl-4">Larry the Bird</th>
																			<td>bird@wxample.com</td>
																			<td>Air Pro</td>
																			<td>$1 570.0</td>
																			<td>27 Aug 2017</td>
																			<td>Leadville North</td>
																			<td><button class="btn btn-xs p-1 px-3 btn-success">Pending</button></td>
																	</tr>
																	<tr>
																			<th class="pl-4">Joseph May</th>
																			<td>josephmay@wxample.com</td>
																			<td>Version Control</td>
																			<td>$5 224.5</td>
																			<td>19 Feb 2018</td>
																			<td>Seaforth</td>
																			<td><button class="btn btn-xs p-1 px-3 btn-danger">Declined</button></td>
																	</tr>
																	<tr>
																			<th class="pl-4">Peter Horadnia</th>
																			<td>horadnia@wxample.com</td>
																			<td>Let's Dance</td>
																			<td>$43 594.7</td>
																			<td>1 Mar 2018</td>
																			<td>Hanoverton</td>
																			<td><button class="btn btn-xs p-1 px-3 btn-info">Sent</button></td>
																	</tr>
															</tbody>
													</table>
											</div>
									</section>
							</div>
					</div>
			</div>
			<div class="analytics-side">
					<div class="row">
							<div class="col-sm-12 col-md-6 col-xl-12 last-side-element">
									<section class="widget mb-xlg">
											<div class="widget-body p-0">
													<div id="events-calendar"></div>
											</div>
									</section>
							</div>
							<div class="col-sm-12 col-md-6 col-xl-12 last-side-element">
									<section class="widget pb-2 mb-xlg">
											<header>
													<h4>Today's Tasks <span
					class="badge badge-pill badge-primary fw-normal pull-right mt-xs">11</span></h4>
													<p class="text-primary mb-0"><small class="tasks-stat"></small></p>
											</header>
											<div class="widget-body task-container">
													<div class="task d-flex align-items-start">
															<div class="form-check abc-checkbox abc-checkbox-success d-flex">
																	<input class="form-check-input" id="checkbox1" type="checkbox">
																	<label class="form-check-label" for="checkbox1"></label>
															</div>
															<div class="task-content">
																	<p class="text-muted mb-xs"><small>Meeting</small></p>
																	<h6>Meeting with Andrew Piker</h6>
																	<p class="text-muted"><small>9:00</small></p>
															</div>
													</div>
													<div class="task d-flex align-items-start">
															<div class="form-check abc-checkbox abc-checkbox-success d-flex">
																	<input class="form-check-input" id="checkbox2" type="checkbox">
																	<label class="form-check-label" for="checkbox2"></label>
															</div>
															<div class="task-content">
																	<p class="text-muted mb-xs"><small>Call</small></p>
																	<h6>Call with HT Company</h6>
																	<p class="text-muted"><small>12:00</small></p>
															</div>
													</div>
													<div class="task d-flex align-items-start">
															<div class="form-check abc-checkbox abc-checkbox-success d-flex">
																	<input class="form-check-input" id="checkbox3" type="checkbox">
																	<label class="form-check-label" for="checkbox3"></label>
															</div>
															<div class="task-content">
																	<p class="text-muted mb-xs"><small>Meeting</small></p>
																	<h6>Meeting with Zoe Alison</h6>
																	<p class="text-muted"><small>14:00</small></p>
															</div>
													</div>
													<div class="task d-flex align-items-start">
															<div class="form-check abc-checkbox abc-checkbox-success d-flex">
																	<input class="form-check-input" id="checkbox4" type="checkbox">
																	<label class="form-check-label" for="checkbox4"></label>
															</div>
															<div class="task-content">
																	<p class="text-muted mb-xs"><small>Interview</small></p>
																	<h6>Interview with HR</h6>
																	<p class="text-muted"><small>15:00</small></p>
															</div>
													</div>
											</div>
											<a href="#" class="btn btn-transparent w-100 text-center text-muted" role="button">See All <i
				class="la la-arrow-down"></i></a> </section>
							</div>
							<div class="col-sm-12 col-md-6 col-xl-12 last-side-element">
									<section class="widget">
											<header>
													<h4>Notifications <span
					class="badge badge-pill badge-primary fw-normal pull-right mt-xs">6</span></h4>
											</header>
											<div class="widget-body w-100 notifications">
													<div class="d-flex align-items-start"> <i class="la la-thumbs-up mr text-info"></i>
															<p>Ken <span class="fw-semi-bold">accepts</span> your invitation</p>
													</div>
													<div class="d-flex w-100"> <i class="la la-file mr text-info"></i>
															<p>Report from LT Company</p>
													</div>
													<div class="d-flex w-100"> <i class="la la-envelope mr text-info"></i>
															<p>4 <span class="fw-semi-bold">Private</span> Mails</p>
													</div>
													<div class="d-flex w-100"> <i class="la la-comment mr text-info"></i>
															<p>3 <span class="fw-semi-bold">Comments</span> to your Post</p>
													</div>
													<div class="d-flex w-100"> <i class="la la-cog mr text-info"></i>
															<p>New <span class="fw-semi-bold">Version</span> of RNS app</p>
													</div>
													<div class="d-flex w-100"> <i class="la la-bell mr text-info"></i>
															<p>15 <span class="fw-semi-bold">Notifications</span> from Social Apps</p>
													</div>
											</div>
									</section>
							</div>
					</div>
			</div>
		</div>
		<footer class="content-footer hidden-print"> Sing App - Bootstrap 4.2.1 Admin Dashboard Template - Made by <a href="https://flatlogic.com"
			rel="nofollow" target="_blank">Flatlogic</a> </footer>
	</main>
</div>
<!-- The Loader. Is shown when pjax happens -->
<div class="loader-wrap hiding hide"> <i class="fa fa-circle-o-notch fa-spin-fast"></i> </div>

<!-- common libraries. required for every page--> 
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script> 
<script src="assets/js/widgster.js"></script> 
<!-- common app js --> 
<script src="assets/js/settings.js"></script> 
<script src="assets/js/app.js"></script> 

<!-- Page scripts --> 
<script src="assets/js/jquery.sparkline.js"></script> 
<script src="assets/js/bootstrap-select.min.js"></script> 

<!-- page specific js --> 
<script src="assets/js/index.js"></script>
</body>
</html>