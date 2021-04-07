<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!doctype html>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Travelling</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Destino project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/destino/styles/bootstrap4/bootstrap.min.css">
<link href="<?php echo base_url() ?>assets/destino/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/destino/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/destino/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/destino/plugins/OwlCarousel2-2.2.1/animate.css">
<link href="<?php echo base_url() ?>assets/destino/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/destino/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/destino/styles/responsive.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $("#likeHide").click(function(){
      document.getElementById("no").innerHTML =0;
      $("#likeHide").hide();
      $("#likeShow").show();
    });

    $("#likeShow").click(function(){
      document.getElementById("no").innerHTML =1;
      $("#likeHide").show();
      $("#likeShow").hide();
    });

      $("#kirim1").click(function(){
    var a = document.getElementById("kepala").value;
    $("#isi").append(a+"<br>");

    });

  });

</script>
</head>
<body>

<div class="super_container">
  
  <!-- Header -->

  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="header_container d-flex flex-row align-items-center justify-content-start">

            <!-- Logo -->
            <div class="logo_container">
              <div class="logo">
                <div>Mantai Ngalam</div>
                <div>sahabat mantai</div>
                <div class="logo_image"><img src="<?php echo base_url() ?>assets/destino/images/logo.png" alt=""></div>
              </div>
            </div>

            <!-- Main Navigation -->
            <nav class="main_nav ml-auto" style="margin-right: -150px">
              <ul class="main_nav_list">
                <li class="main_nav_item"><a href="<?php echo base_url() ?>home">Home</a></li>
                <li class="main_nav_item"><a href="<?php echo base_url() ?>home/about">About us</a></li>

                <?php if(!$this->session->userdata('logged_in')) : ?>
                  <!-- <div class="btn-group" role="group" aria-label="Data baru"> -->
                    <li class="main_nav_item"><a href="<?php echo base_url() ?>user/login">Login</a></li>
                    <!-- <li class="main_nav_item"><a href="<?php echo base_url() ?>user/register">Register</a></li> -->
                  <!-- </div> -->
                <?php endif; ?>

                <?php if($this->session->userdata('logged_in')) : ?>
                  <li class="main_nav_item"><a href="<?php echo base_url() ?>user/logout">Logout</a></li>
                <?php endif; ?>

              </ul>
            </nav>

            <!-- Search -->
            <!-- <div class="search">
              <form action="#" class="search_form">
                <input type="search" name="search_input" class="search_input ctrl_class" required="required" placeholder="Keyword">
                <button type="submit" class="search_button ml-auto ctrl_class"><img src="<?php echo base_url() ?>assets/destino/images/search.png" alt=""></button>
              </form>
            </div> -->

            <!-- Hamburger -->
            <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>

          </div>
        </div>
      </div>
    </div>
  </header>