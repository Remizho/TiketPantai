<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<br><br><br><br><br><br><br><br><br><br><br><br>

<div class="find_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url() ?>assets/destino/images/find.jpg" data-speed="0.8"></div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="find_title text-center">Sign Up</div>
        </div>
        <div class="col-12"><center>
          <div class="find_form_container">
          	<?php
						$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
					?>
					<?php echo validation_errors(); ?>
					<?php echo form_open('user/register', array('class' => 'needs-validation', 'novalidate' => '')); ?>
              <div class="find_item">
                <div>Nama Lengkap:</div>
                <input type="text" class="destination find_input" name="nama"  required="required" placeholder="Keyword here">
              </div><br>
              <div class="" style="width: 356px;">
                <div style="color: white">Alamat:</div>
                <input type="text" class="destination find_input" name="kodepos"  required="required" placeholder="Keyword here">
              </div><br>
              <div class="" style="width: 356px;">
                <div style="color: white">Email:</div>
                <input type="text" class="destination find_input" name="email"  required="required" placeholder="Keyword here">
              </div><br>
              <div class="" style="width: 356px;">
                <div style="color: white">Username:</div>
                <input type="text" class="destination find_input" name="username"  required="required" placeholder="Keyword here">
              </div><br>
              <div class="" style="width: 356px;">
                <div style="color: white">Password:</div>
                <input type="text" class="destination find_input"  name="password" required="required" placeholder="Keyword here">
              </div><br>
              <div class="" style="width: 356px;">
                <div style="color: white">Konfirmasi Password:</div>
                <input type="text" class="destination find_input"  name="password2" required="required" placeholder="Keyword here">
              </div><br>
              <div class="find_item">
                <div><br>Anda menyetujui persyaratan :</div>
                <input class="form-check-input" type="radio" name="membership" id="silvermember" value="2" style="margin-left: -150px;">
                <label class="form-check-label" for="silvermember" style="margin-left: -150px;"><font color="white">Setuju</label>
              </div>
              <button type="submit" class="button find_button" style="width: 140px; height: 50px; font-size: 10px">Sign up</button>
            </form>
            <br><br><font style="color: white">sudah punya akun? <a href="<?php echo base_url() ?>user/login">Masuk Disini.</a></font>
          </div>
        </div>
      </div>
    </div>
    <br><br><br><br><br><br>