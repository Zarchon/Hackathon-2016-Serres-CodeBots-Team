﻿<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- main JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script type="text/javascript" src="../resources/global_js/global.js"></script>
		<script src="custom.js"></script>
		<!-- main CSS -->
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="../resources/global_css/global.css">
		<link rel="stylesheet" href="style.css">
		<!-- DATEPICKER CALENDAR -->
		<link rel="stylesheet" href="../telerik.kendoui.professional.2016.1.412.trial/styles/kendo.common.min.css" />
		<link rel="stylesheet" href="../telerik.kendoui.professional.2016.1.412.trial/styles/kendo.default.min.css" />
		<!-- <script src="../telerik.kendoui.professional.2016.1.412.trial/js/jquery.min.js"></script> -->
		<script src="../telerik.kendoui.professional.2016.1.412.trial/js/kendo.all.min.js"></script>
		<script src="../telerik.kendoui.professional.2016.1.412.trial/js/kendo.timezones.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-default headerFooter">

			<div class="container-fluid">
				<div class="navbar-header">
					<!-- btn that Toggles navbar in small resolutions -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a class="navbar-brand" href="../home">Home</a>

				</div>
				<!-- Main Navigation Bar -->
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<!-- calendar -->
						<li class="dropdown">
							<a class="navbar-brand" href="../calendar">Calendar</a>
						</li>
						<!-- todos -->
						<li class="dropdown">
							<a class="navbar-brand" href="../todos">Todo's</a>
						</li>
						<!-- achievements -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Achievements <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li>
									<a href="/AddAchievement">Add Achievements</a>
								</li>
								<li>
									<a href="/RemoveAchievement">Remove Achievements</a>
								</li>
							</ul>
						</li>
						<!-- favorites -->
						<li>
							<a class="navbar-brand" href="../favorites">Favorites</a>
						</li>
						<!-- about -->
						<li>
							<a class="navbar-brand" href="../about">About</a>

						</li>
					</ul>
					<!-- user login/logout -->
					<ul class="nav navbar-nav navbar-right">
						<li>

							<a href="../login"><span class="glyphicon glyphicon-log-in" ></span> Login</a>
						</li>
						<li class="hidden">
							<a href="../logout"><span class="glyphicon glyphicon-log-out" ></span> Logout</a>

						</li>
					</ul>
				</div>
			</div>
		</nav>
