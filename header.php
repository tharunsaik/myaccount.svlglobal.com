<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
		<link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/back-to-top.css">
		<link rel="stylesheet" href="assets/css/global.css">
		<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
				
		<!-- UIkit CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.4/dist/css/uikit.min.css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/mdc-styles.css">
		<link rel="stylesheet" href="assets/css/styles.css">

		<title>My Account</title>
		<link rel="icon" href="assets/img/fav.png" type="image/gif">
		<style>
			body {
				display: flex;
				height: 100vh;
				margin: 0;
			}

			.mdc-drawer-app-content {
				flex: auto;
				overflow: auto;
				position: relative;
			}

			.main-content {
				overflow: auto;
				height: 100%;
			}

			.app-bar {
				position: absolute;
			}
		</style>
	</head>
	<body class="mdc-typography">
		<aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
  		<div class="mdc-drawer__header">
	  		<img src="assets/img/logo-svl-global.svg" alt="" width="170px" class="uk-padding-small uk-padding-remove-bottom">
  		</div>
	  	<hr class="mdc-list-divider">
		<div class="mdc-drawer__content">
			<nav class="mdc-list">
				<a class="mdc-list-item mdc-list-item--activated" href="index.php" aria-current="page">
					<span class="mdc-list-item__ripple"></span>
					<i class="material-icons mdc-list-item__graphic" aria-hidden="true">dashboard</i>
					<span class="mdc-list-item__text">Dashboard</span>
				</a>
				<a class="mdc-list-item" href="profile.php">
					<span class="mdc-list-item__ripple"></span>
					<i class="material-icons mdc-list-item__graphic" aria-hidden="true">account_circle</i>
					<span class="mdc-list-item__text">Profile</span>
				</a>
				<a class="mdc-list-item" href="bookings.php">
					<span class="mdc-list-item__ripple"></span>
					<i class="material-icons mdc-list-item__graphic" aria-hidden="true">card_travel</i>
					<span class="mdc-list-item__text">Bookings</span>
				</a>
				<a class="mdc-list-item" href="wallet.php">
					<span class="mdc-list-item__ripple"></span>
					<i class="material-icons mdc-list-item__graphic" aria-hidden="true">account_balance_wallet</i>
					<span class="mdc-list-item__text">T-Wallet</span>
				</a>
				<a class="mdc-list-item" href="security.php">
					<span class="mdc-list-item__ripple"></span>
					<i class="material-icons-outlined mdc-list-item__graphic" aria-hidden="true">security</i>
					<span class="mdc-list-item__text">Security</span>
				</a>
				<a class="mdc-list-item" href="alerts.php">
					<span class="mdc-list-item__ripple"></span>
					<i class="material-icons-outlined mdc-list-item__graphic" aria-hidden="true">notifications</i>
					<span class="mdc-list-item__text">Alerts</span>
				</a>
				<a class="mdc-list-item" href="fares-and-payments.php">
					<span class="mdc-list-item__ripple"></span>
					<i class="material-icons-outlined mdc-list-item__graphic" aria-hidden="true">payments</i>
					<span class="mdc-list-item__text">Fares &amp; Payments</span>
				</a>
				<a class="mdc-list-item" href="refer-and-earn.php">
					<span class="mdc-list-item__ripple"></span>
					<i class="material-icons-outlined mdc-list-item__graphic" aria-hidden="true">payment</i>
					<span class="mdc-list-item__text">Refer &amp; Earn</span>
				</a>
				<a class="mdc-list-item" href="reviews.php">
					<span class="mdc-list-item__ripple"></span>
					<i class="material-icons-outlined mdc-list-item__graphic" aria-hidden="true">rate_review</i>
					<span class="mdc-list-item__text">Reveiws</span>
				</a>
				<a class="mdc-list-item" href="gift-vouchers.php">
					<span class="mdc-list-item__ripple"></span>
					<i class="material-icons-outlined mdc-list-item__graphic" aria-hidden="true">card_giftcard</i>
					<span class="mdc-list-item__text">Gift Vouchers</span>
				</a>

				<hr class="mdc-list-divider">
				<h6 class="mdc-list-group__subheader">Labels</h6>
				<a class="mdc-list-item" href="#">
					<span class="mdc-list-item__ripple"></span>
					<i class="material-icons mdc-list-item__graphic" aria-hidden="true">bookmark</i>
					<span class="mdc-list-item__text">Family</span>
				</a>
				<a class="mdc-list-item" href="#">
					<span class="mdc-list-item__ripple"></span>
					<i class="material-icons mdc-list-item__graphic" aria-hidden="true">bookmark</i>
					<span class="mdc-list-item__text">Friends</span>
				</a>
				<a class="mdc-list-item" href="#">
					<span class="mdc-list-item__ripple"></span>
					<i class="material-icons mdc-list-item__graphic" aria-hidden="true">bookmark</i>
					<span class="mdc-list-item__text">Work</span>
				</a>
			</nav>
		</div>
	</aside>
	<div class="mdc-drawer-app-content">
		<header class="mdc-top-app-bar app-bar mdc-top-app-bar--fixed" id="app-bar">
			<div class="mdc-top-app-bar__row">
				<section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
					<button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button">menu</button>
					<span class="mdc-top-app-bar__title">My Account</span>
				</section>
				<section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end" role="toolbar">
					<button class="material-icons mdc-top-app-bar__action-item mdc-icon-button" aria-label="Search">search</button>
					<div class="ml-2 mr-2 allServices" type="button">
						<button class="material-icons mdc-top-app-bar__action-item mdc-icon-button" aria-label="Apps">apps</button>
					</div>
					<div class="uk-width-large allServicesDropdown" uk-dropdown="mode: click; offset: 10">
						<ul class="uk-nav uk-dropdown-nav text-center uk-grid-column-collapse uk-grid-row-small uk-child-width-1-5" uk-grid>
							<li>
								<a href="#">
									<span class="services-icon" style="background-position: 0 -290px;"></span>
									<span class="services-text">Account</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="services-icon" style="background-position: 0 -115px;"></span>
									<span class="services-text">Search</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="services-icon" style="background-position: 0 -874px;"></span>
									<span class="services-text">Maps</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="services-icon" style="background-position: 0 -1222px;"></span>
									<span class="services-text">YouTube</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="services-icon" style="background-position: 0 -640px;"></span>
									<span class="services-text">Play</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="services-icon" style="background-position: 0 -1862px;"></span>
									<span class="services-text">News</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="services-icon" style="background-position: 0 -1802px;"></span>
									<span class="services-text">Gmail</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="services-icon" style="background-position: 0 -2212px;"></span>
									<span class="services-text">Contacts</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="services-icon" style="background-position: 0 0;"></span>
									<span class="services-text">Drive</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="services-icon" style="background-position: 0 -1513px;"></span>
									<span class="services-text">Calendar</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="services-icon" style="background-position: 0 -1338px;"></span>
									<span class="services-text">Translate</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="services-icon" style="background-position: 0 -1746px;"></span>
									<span class="services-text">Photos</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="services-icon" style="background-position: 0 -58px;"></span>
									<span class="services-text">Shopping</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="services-icon" style="background-position: 0 -1047px;"></span>
									<span class="services-text">Duo</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="services-icon" style="background-position: 0 -290px;"></span>
									<span class="services-text">Account</span>
								</a>
							</li>
						</ul>
					</div>

					<div class="toolbar mdc-menu-surface--anchor" data-mdc-auto-init="MDCTextField">
						<button id="topAppBarMenu" class="mdc-icon-button mdc-top-app-bar__action-item menu-toggle-button" aria-label="Unstar this item" aria-pressed="true">
							<img src="https://material-components-web.appspot.com/images/animal1.svg" class="mdc-icon-button__icon uk-text-top"/>
						</button>
						<div class="mdc-menu mdc-menu-surface">
						  <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical" tabindex="-1">
							<li class="mdc-list-item" role="menuitem">
							  <span class="mdc-list-item__ripple"></span>
							  <span class="mdc-list-item__text">Manage My Account</span>
							</li>
							<li class="mdc-list-item" role="menuitem">
							  <span class="mdc-list-item__ripple"></span>
							  <span class="mdc-list-item__text">Sign Out</span>
							</li>
						  </ul>
						</div>
					</div>
					
				</section>
			</div>
		</header>