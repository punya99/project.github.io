<?php
ob_start();
session_start();
include("inc/config.php");
include("inc/functions.php");
include("inc/CSRF_Protect.php");
$csrf = new CSRF_Protect();
$error_message = '';
$success_message = '';
$error_message1 = '';
$success_message1 = '';

// Check if the user is logged in or not
if(!isset($_SESSION['user'])) {
	header('location: login.php');
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Panel</title>

	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/datepicker3.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/select2.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.css">
	<link rel="stylesheet" href="css/jquery.fancybox.css">
	<link rel="stylesheet" href="css/AdminLTE.min.css">
	<link rel="stylesheet" href="css/_all-skins.min.css">
	<link rel="stylesheet" href="css/on-off-switch.css"/>
	<link rel="stylesheet" href="css/summernote.css">
	<link rel="stylesheet" href="style.css">

</head>

<body class="hold-transition fixed skin-blue sidebar-mini">

	<div class="wrapper">

		<header class="main-header">

			<a href="index.php" class="logo">
				<span class="logo-lg">Panel</span>
			</a>

			<nav class="navbar navbar-static-top">
				
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<span style="float:left;line-height:50px;color:#fff;padding-left:15px;font-size:18px;">Admin Panel</span>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="../assets/uploads/<?php echo $_SESSION['user']['photo']; ?>" class="user-image" alt="User Image">
								<span class="hidden-xs"><?php echo $_SESSION['user']['full_name']; ?></span>
							</a>
							<ul class="dropdown-menu">
								<li class="user-footer">
									
									<div>
										<a href="logout.php" class="btn btn-default btn-flat">Log out</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>

			</nav>
		</header>

  		<?php $cur_page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1); ?>

  		<aside class="main-sidebar" style="width: 347px;">
    		<section class="sidebar">
      
      			<ul class="sidebar-menu">

			        <li class="treeview <?php if($cur_page == 'index.php') {echo 'active';} ?>">
			          <a href="index.php">
			            <i class="fa fa-hand-o-right"></i> <span>Dashboard</span>
			          </a>
			        </li>

					
			       


					<li class="treeview <?php if( ($cur_page == 'cv.php') ) {echo 'active';} ?>">
			          <a href="cv.php">
			            <i class="fa fa-hand-o-right"></i> <span>C.V Submit Enquery </span>
			          </a>
			        </li>										<li class="treeview <?php if( ($cur_page == 'design_partner.php') ) {echo 'active';} ?>">			          <a href="design_partner.php">			            <i class="fa fa-hand-o-right"></i> <span>Being a design partner and consultant Enquery </span>			          </a>			        </li>					<li class="treeview <?php if( ($cur_page == 'certified_builder.php') ) {echo 'active';} ?>">			          <a href="certified_builder.php">			            <i class="fa fa-hand-o-right"></i> <span>Being a certified builder Enquery </span>			          </a>			        </li>
	<li class="treeview <?php if( ($cur_page == 'supplier_registration.php') ) {echo 'active';} ?>">			          <a href="supplier_registration.php">			            <i class="fa fa-hand-o-right"></i> <span>Suppler Registration Enquery </span>			          </a>			        </li>
	<li class="treeview <?php if( ($cur_page == 'product.php') ) {echo 'active';} ?>">
			          <a href="product.php">
			            <i class="fa fa-hand-o-right"></i> <span>Contact Us Enquery </span>
			          </a>
			        </li>

			   

			        <li class="treeview <?php if( ($cur_page == 'logout.php')||($cur_page == 'logout.php') ) {echo 'active';} ?>">
			          <a href="logout.php">
			            <i class="fa fa-hand-o-right"></i> <span>Log out</span>
			          </a>
			        </li>										


			        

			        


      			</ul>
    		</section>
  		</aside>

  		<div class="content-wrapper">