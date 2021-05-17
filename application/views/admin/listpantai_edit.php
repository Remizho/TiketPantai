<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!doctype html>

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Data Pantai</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> <?php echo $page_title ?>
          </div>
        <div class="card-body">


					<?php    
						$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
					?>
					<?php echo validation_errors(); ?>

					<?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>

					<?php echo form_open( current_url(), array('class' => 'needs-validation', 'novalidate' => '') ); ?>
					<div class="form-group">
						<label for="title">Harga</label>
						<input type="number" class="form-control" name="harga_pantai" value="<?php echo set_value('harga_pantai', $listpantai->harga_pantai) ?>" required>
						<div class="invalid-feedback">Isi Nama</div>
					</div>

          <div class="form-group">
            <label for="thumbnail">Favorit</label>
            <input type="checkbox" class="form-control" style="width: fit-content;" name="pantai_favorit" value="1" <?php if($listpantai->pantai_favorit) { echo "checked"; } ?>>
          </div>

					
					<button id="submitBtn" type="submit" class="btn btn-primary">Update</button>
				</form>

        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>