<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url() ?>assets/bigshot/css/style.css">
<div id="container">
  <div class="one">
      <h2><strong><?php	echo $page_title ?></strong></h2>
  </div>
  <div class="one-half">
    
    				<?php
						$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
					?>
					<?php echo validation_errors(); ?>
					<?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
					<?php echo form_open_multipart( 'admin/pesanan_create', array('class' => 'needs-validation', 'novalidate' => '') ); ?>
					<div class="form-group">
						<label for="title">No Penumpang</label>
						<input type="number" class="form-control" name="no_penum" value="<?php echo set_value('stock') ?>" required>
						<div class="invalid-feedback">Isi No penumpang</div>
					</div>
					<div class="form-group">
						<label for="title">Nama Penumpang</label>
						<input type="text" class="form-control" name="nama_penum" value="<?php echo set_value('stock') ?>" required>
						<div class="invalid-feedback">Isi nama</div>
					</div>
					<div class="form-group">
						<label for="title">Keberangkatan dari</label>
						<input type="text" class="form-control" name="asal_penum" value="<?php echo set_value('stock') ?>" required>
						<div class="invalid-feedback">Isi keberangkatan</div>
					</div>
					<div class="form-group">
						<label for="title">Destinasi</label>
						<input type="text" class="form-control" name="tujuan_penum" value="<?php echo set_value('price') ?>" required>
						<div class="invalid-feedback">Isi destinasi</div>
					</div>
					<div class="form-group">
						<label for="title">Tanggal</label>
						<input type="date" class="form-control" name="tggl_penum" value="<?php echo set_value('stock') ?>" required>
						<div class="invalid-feedback">Isi tanggal</div>
					</div>

					
					<button id="submitBtn" type="submit" class="btn btn-primary">ADD</button>
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