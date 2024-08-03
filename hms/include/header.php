<?php error_reporting(0); ?>
<header class="navbar navbar-default navbar-static-top">

	<div class="navbar-collapse collapse">
		<ul class="nav navbar-right">
			<!-- start: MESSAGES DROPDOWN -->
			<li style="padding-top:2% ">
				<h2>MediHelp Management System</h2>
			</li>


			<li class="dropdown current-user">
				<a href class="dropdown-toggle" data-toggle="dropdown">
					<img src="assets/images/images.jpg"> <span class="username">



						<?php $query = mysqli_query($con, "select fullName from users where id='" . $_SESSION['id'] . "'");
						while ($row = mysqli_fetch_array($query)) {
							echo $row['fullName'];
						}
						?> <i class="ti-angle-down"></i></i></span>
				</a>
				<ul class="dropdown-menu dropdown-dark">
					<li>
						<a href="edit-profile.php">
							My Profile
						</a>
					</li>

					<li>
						<a href="change-password.php">
							Change Password
						</a>
					</li>
					<li>
						<a href="logout.php">
							Log Out
						</a>
					</li>
				</ul>
			</li>
			<!-- end: USER OPTIONS DROPDOWN -->
		</ul>
		<!-- start: MENU TOGGLER FOR MOBILE DEVICES -->
		<div class="close-handle visible-xs-block menu-toggler" data-toggle="collapse" href=".navbar-collapse">
			<div class="arrow-left"></div>
			<div class="arrow-right"></div>
		</div>
		<!-- end: MENU TOGGLER FOR MOBILE DEVICES -->
	</div>


	<!-- end: NAVBAR COLLAPSE -->
</header>