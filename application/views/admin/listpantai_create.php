<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!doctype html>

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tambah Informasi Pantai</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> <?php echo $page_title ?>
          </div>
        <div class="card-body">
          
        	<?php $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');?>
					<?php echo validation_errors(); ?>
					<?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
					<?php echo form_open_multipart( 'admin/listpantai_create', array('class' => 'needs-validation', 'novalidate' => '') ); ?>
					<div class="form-group">
						<label for="title">Nama Pantai</label>
						<input type="text" class="form-control" name="nama_pantai" value="<?php echo set_value('nama_pantai') ?>" required>
						<div class="invalid-feedback">Isi Nama Pantai</div>
					</div>
					<div class="form-group">
						<label for="title">Harga Tiket Pantai</label>
						<input type="number" class="form-control" name="harga_pantai" value="<?php echo set_value('harga_pantai') ?>" required>
						<div class="invalid-feedback">Isi Harga Tiket</div>
					</div>
					<div class="form-group">
						<label for="title">Deskripsi</label>
						<textarea class="form-control" name="deskripsi" value="<?php echo set_value('deskripsi') ?>"></textarea>
						<div class="invalid-feedback">Isi Deskripsi</div>
					</div>
					<div class="form-group">
						<label for="thumbnail">Gambar thumbnail ( size < 1mb)</label>
						<input type="file" class="form-control-file" name="thumbnail" value="" required>
					</div>
					<div class="form-group">
						<label for="thumbnail">Favorit</label>
						<input type="checkbox" class="form-control" style="width: fit-content;" name="pantai_favorit" value="1">
					</div>

					
					<button id="submitBtn" type="submit" class="btn btn-primary">Tambah</button>
				</form>
        </div>
      </div>
    </div>