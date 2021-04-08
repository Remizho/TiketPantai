<br><br><br><br><br><br><br><br><br><br><br><br>

<div class="find_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url() ?>assets/destino/images/find.jpg" data-speed="0.8"></div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="find_title text-center">Masuk</div>
        </div>
        <div class="col-12"><center>
          <div class="find_form_container">
          	<?php echo form_open('user/login'); ?>
              <div class="find_item">
                <div>Username:</div>
                <input type="text" class="destination find_input" name="username"  required="required" placeholder="Keyword here">
              </div>
              <div class="find_item">
                <div>Password:</div>
                <input type="password" class="destination find_input"  name="password" required="required" placeholder="Keyword here">
              </div>
              <button type="submit" class="button find_button">Masuk</button>
            </form>
            <br><font style="color: white">belum punya akun? <a href="<?php echo base_url() ?>user/register">Dafatar Disini.</a></font>
          </div>
        </div>
      </div>
    </div>
    <br><br><br><br><br><br>