<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!doctype html>

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Edit Data User</li>
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
						<label for="title">Nama</label>
						<input type="text" class="form-control" name="nama" value="<?php echo set_value('nama', $user->nama) ?>" required>
						<div class="invalid-feedback">Isi Nama</div>
					</div>
					<div class="form-group">
						<label for="title">Email</label>
						<input type="text" class="form-control" name="email" value="<?php echo set_value('email', $user->email) ?>" required>
						<div class="invalid-feedback">Isi Email</div>
					</div>
					<div class="form-group">
						<label for="title">Username</label>
						<input type="text" class="form-control" name="username" value="<?php echo set_value('username', $user->username) ?>" required>
						<div class="invalid-feedback">Isi Username</div>
					</div>
					<div class="form-group">
						<label for="title">Password</label>
						<input type="text" class="form-control" name="password" value="<?php echo set_value('password', $user->password) ?>" required>
						<div class="invalid-feedback">Isi Password</div>
					</div>
					<div class="form-group">
					    <label for="">Pilih Status</label>
					    <div class="form-check">
					        <input class="form-check-input" type="radio" name="level" id="goldmember" value="1" checked>
					        <label class="form-check-label" for="goldmember">Admin</label>
					    </div>
					    <div class="form-check">
					        <input class="form-check-input" type="radio" name="level" id="goldmember" value="2">
					        <label class="form-check-label" for="goldmember">User</label>
					    </div>
					    <div class="form-check">
					        <input class="form-check-input" type="radio" name="level" id="goldmember" value="3">
					        <label class="form-check-label" for="goldmember">Petugas</label>
					    </div>
					</div>

					
					<button id="submitBtn" type="submit" class="btn btn-primary">Update</button>
				</form>

        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>