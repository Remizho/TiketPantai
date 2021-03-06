<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!doctype html>
<head>
<title>Edit Pesanan</title>
<meta charset="utf-8">
<!-- CSS Files -->
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url() ?>assets/bigshot/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css">
<!-- JS Files -->
<script src="<?php echo base_url() ?>assets/bigshot/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/bigshot/js/jquery.eislideshow.js"></script>
<script src="<?php echo base_url() ?>assets/bigshot/js/custom.js"></script>
<script src="<?php echo base_url() ?>assets/bigshot/js/slides/slides.min.jquery.js"></script>
<script src="<?php echo base_url() ?>assets/bigshot/js/cycle-slider/cycle.js"></script>
<script src="<?php echo base_url() ?>assets/bigshot/js/nivo-slider/jquery.nivo.slider.js"></script>
<script src="<?php echo base_url() ?>assets/bigshot/js/tabify/jquery.tabify.js"></script>
<script src="<?php echo base_url() ?>assets/bigshot/js/prettyPhoto/jquery.prettyPhoto.js"></script>
<script src="<?php echo base_url() ?>assets/bigshot/js/twitter/jquery.tweet.js"></script>
<script src="<?php echo base_url() ?>assets/bigshot/js/scrolltop/scrolltopcontrol.js"></script>
<script src="<?php echo base_url() ?>assets/bigshot/js/portfolio/filterable.js"></script>
<script src="<?php echo base_url() ?>assets/bigshot/js/modernizr/modernizr-2.0.3.js"></script>
<script src="<?php echo base_url() ?>assets/bigshot/js/easing/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url() ?>assets/bigshot/js/kwicks/jquery.kwicks-1.5.1.pack.js"></script>
<script src="<?php echo base_url() ?>assets/bigshot/js/swfobject/swfobject.js"></script>
<!-- FancyBox -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bigshot/js/fancybox/jquery.fancybox.css" media="all">
<script src="<?php echo base_url() ?>assets/bigshot/js/fancybox/jquery.fancybox-1.2.1.js"></script>
</head>
<body style="background: #FFF">
<div style="width:100%; background: #FFF">

<div id="container">
  <div class="one">
    <div class="heading_bg">
      <h2><strong><?php	echo $page_title ?></strong></h2>
    </div>
  </div>
  <div class="one-half">
    
					<?php    
						$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
					?>
					<?php echo validation_errors(); ?>

					<?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>

					<?php echo form_open( current_url(), array('class' => 'needs-validation', 'novalidate' => '') ); ?>
					<div class="form-group">
						<label for="title">Nama</label>
						<input type="text" class="form-control" name="nama_penum" value="<?php echo set_value('nama', $pesanan->nama_penum) ?>" required>
						<div class="invalid-feedback">Isi Nama</div>
					</div>
					<div class="form-group">
						<label for="title">Nomor</label>
						<input type="text" class="form-control" name="no_penum" value="<?php echo set_value('email', $pesanan->no_penum) ?>" required>
						<div class="invalid-feedback">Isi Email</div>
					</div>
					<div class="form-group">
						<label for="title">Asal</label>
						<input type="text" class="form-control" name="asal_penum" value="<?php echo set_value('pesananname', $pesanan->asal_penum) ?>" required>
						<div class="invalid-feedback">Isi pesananname</div>
					</div>
					<div class="form-group">
						<label for="title">Tujuan</label>
						<input type="text" class="form-control" name="tujuan_penum" value="<?php echo set_value('password', $pesanan->tujuan_penum) ?>" required>
						<div class="invalid-feedback">Isi Password</div>
					</div>
					<div class="form-group">
						<label for="title">Tanggal</label>
						<input type="date" class="form-control" name="tggl_penum" value="<?php echo set_value('password', $pesanan->tggl_penum) ?>" required>
						<div class="invalid-feedback">Isi Password</div>
					</div>

					
					<button id="submitBtn" type="submit" class="btn btn-primary">Update</button>
				</form>
    
  </div>
  <div style="clear:both; height: 40px"></div>
</div>
	

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css">

	<script src="<?php echo base_url() ?>assets/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="<?php echo base_url() ?>assets/js/holder.min.js"></script>

    <!-- Custom -->
    <script src="<?php echo base_url() ?>assets/js/custom.js"></script>