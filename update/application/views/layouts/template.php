<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('_meta.php');?>
<title>AdminLTE 3 | Dashboard</title>
<?php require_once('_css.php');?>
</head>
<body class="hold-transition  sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?= base_url()?>assets/dist/img/huawei.ico" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <?php require_once('_header.php');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php require_once('_sidebar.php');?>
  <!-- /.sidebar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
        <section class="content">
					<?php echo $contents ;?>
				</section>
    <!-- /.content-wrapper -->
</div>
    <!-- footer -->
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php require_once('_js.php') ;?>