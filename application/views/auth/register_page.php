
<!--

=========================================================
* Now UI Kit - v1.3.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-kit
* Copyright 2019 Creative Tim (http://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url()?>public/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= base_url()?>public/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    AdminHuawei
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="<?= base_url()?>public/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?= base_url()?>public/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?= base_url()?>public/demo/demo.css" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
      <div class="dropdown button-dropdown">
        <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
          <span class="button-bar"></span>
          <span class="button-bar"></span>
          <span class="button-bar"></span>
        </a>
      </div>
      <div class="navbar-translate">
        <a class="navbar-brand" href="#" rel="tooltip" title="Designed by Invision. Coded by Creative Tim" data-placement="bottom" target="_blank">
          Admin Huawei
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="<?= base_url()?>public/img/blurred-image-1.jpg">
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="page-header clear-filter" filter-color="blue">
    <div class="page-header-image" style="background-image:url(<?= base_url()?>public/img/bg4.jpg)"></div>
    <div class="content">
      <div class="container">
        <div class="col-md-4 ml-auto mr-auto">
          <div class="card card-login card-plain">

            <form action="<?php echo base_url('Register/register'); ?>" method="post">
              <div class="card-header text-center">
                <div class="logo-container">
                  <img src="<?= base_url()?>public/img/now-logo.png" alt="">
                </div>
              </div>
              <div class="card-body">
              <div class="form-group has-feedback no-border input-lg">
                  <input type="text" class="form-control" placeholder="Nama" name="nama">
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback no-border input-lg">
                  <input type="text" class="form-control" placeholder="Username" name="username">
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback no-border input-lg">
                  <input type="password"  class="form-control" placeholder="Password" name="password">
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
              </div>
              <div class="card-footer text-center">
                <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Register</button>
                
                <div class="pull-right">
                  <h6>
                    <a href="Auth" class="link">Login Akun</a>
                  </h6>
                </div>
                <div class="msg">
                  <?php
        echo show_err_msg($this->session->flashdata('error_msg'));
      ?>
      </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  <!--   Core JS Files   -->
  <script src="<?= base_url()?>public/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?= base_url()?>public/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?= base_url()?>public/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="<?= base_url()?>public/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?= base_url()?>public/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="<?= base_url()?>public/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url()?>public/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
</body>

</html>