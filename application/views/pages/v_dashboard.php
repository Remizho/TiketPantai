<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


  <!-- Menu -->

  <div class="menu_container menu_mm">

    <!-- Menu Close Button -->
    <div class="menu_close_container">
      <div class="menu_close"></div>
    </div>

    <!-- Menu Items -->
    <div class="menu_inner menu_mm">
      <div class="menu menu_mm">
        <div class="menu_search_form_container">
          <form action="#" id="menu_search_form">
            <input type="search" class="menu_search_input menu_mm">
            <button id="menu_search_submit" class="menu_search_submit" type="submit"><img src="<?php echo base_url() ?>assets/destino/images/search_2.png" alt=""></button>
          </form>
        </div>
        <ul class="menu_list menu_mm">
          <li class="menu_item menu_mm"><a href="<?php echo base_url() ?>home">Halaman Utama</a></li>
          <li class="menu_item menu_mm"><a href="<?php echo base_url() ?>home/about">Tentang Kami</a></li>
        </ul>

        <!-- Menu Social -->
        
        <div class="menu_social_container menu_mm">
          <ul class="menu_social menu_mm">
            <li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
            <li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            <li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          </ul>
        </div>

        <div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
      </div>

    </div>

  </div>
  
  <!-- Home -->

  <div class="home">
    <div class="home_background" style="background-image:url(<?php echo base_url() ?>assets/destino/images/home.jpg)"></div>
    <div class="home_background" style="background-color: rgba(0,0,0,0.5);"></div>
    <div class="home_content">
      <div class="home_content_inner">

         <?php if(!$this->session->userdata('logged_in')) : ?>
                 <div class="home_text_small">Pantai</div>
                <?php endif; ?>

                <?php if($this->session->userdata('logged_in')) : ?>
                  <div class="home_text_small">Selamat datang <?php echo $user->nama ?></div>
                <?php endif; ?>
      </div>
    </div>
  </div>

  <!-- Find Form -->
<br><br>
  <div class="find">
    <!-- Image by https://unsplash.com/@garciasaldana_ -->
    <div class="find_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url() ?>assets/destino/images/find.jpg" data-speed="0.8"></div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="find_title text-center">BOOKING</div>
        </div>
        <div class="col-12">
          <div class="find_form_container">
            <center>

            <?php
            $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
          ?>
          <?php echo validation_errors(); ?>
          <?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
          <?php echo form_open_multipart( 'admin/pesanan_create2', array('class' => 'needs-validation', 'novalidate' => '') ); ?>
              <div class="find_item">
                <div>Nama:</div>
                <input type="text" class="destination find_input" name="nama" style="background-color: white;color: black;"  required="required">
              </div>
              <div class="find_item">
                <div>Tanggal:</div>
                <input type="date" class="destination find_input" name="tggl" style="background-color: white;color: black;" required="required">
              </div>
              <div class="" style="width: 356px;">
                <div style="color: white">Tujuan:</div>
                <!-- <select class="destination find_input" required="required">
                  <option value="">Pilih Disini</option>
                  <option value="cina">Pantai Goa China</option>
                  <option value="ngantep">Pantai Ngantep</option>
                  <option value="ngliyep">Pantai Ngliyep</option>
                  <option value="sendiki">Pantai Sendiki</option>
                </select> -->
                <?php echo form_dropdown('id_pantai', $pantai, 'class="destination find_input"' ); ?>
                <!-- <input type="text" class="destination find_input"  name="tujuan_penum" required="required" placeholder="Keyword here"> -->
              </div>
              <div class="" style="width: 356px;">
                <div style="color: white">Jumlah Pengunjung</div>
                <input type="number" min="0" style="background-color: white;color: black;" class="destination find_input" name="jumlah" required="required">
              </div>
              <button type="submit" class="button find_button">Pesan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Top Destinations -->

  <div class="top">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="section_title text-center">
            <h2>DESTINASI FAVORIT PANTAI NGALAM</h2>
            <div>temukan pantai idaman anda</div>
          </div>
        </div>
      </div>
      <div class="row top_content">


        <?php foreach ($all_favorit as $item) { ?>
          <div class="col-lg-3 col-md-6 top_col">

          <!-- Top Destination Item -->
          <div class="top_item">
            <a href="<?php echo base_url() ?>home/detail_pantai/<?php echo $item->id_pantai ?>">
              <div class="top_item_image"><img src="<?php echo base_url() ?>/uploads/<?php echo $item->thumbnail ?>" alt="<?php echo $item->nama_pantai ?>"></div>
              <div class="top_item_content">
                <div class="top_item_price">Tekan untuk lihat detail</div>
                <div class="top_item_text"><?php echo $item->nama_pantai ?></div>
              </div>
            </a>
          </div>
        </div>
        <?php } ?>
        

        <!-- <div class="col-lg-3 col-md-6 top_col">

          Top Destination Item
          <div class="top_item">
            <a href="<?php echo base_url() ?>home/detail_pantai2">
              <div class="top_item_image"><img src="<?php echo base_url() ?>assets/destino/images/top_2.jpg" alt="https://unsplash.com/@jenspeter"></div>
              <div class="top_item_content">
                <div class="top_item_price">Tekan untuk lihat detail</div>
                <div class="top_item_text">Pantai Tiga Warna</div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 top_col">

          Top Destination Item
          <div class="top_item">
            <a href="<?php echo base_url() ?>home/detail_pantai3">
              <div class="top_item_image"><img src="<?php echo base_url() ?>assets/destino/images/top_3.jpg" alt="https://unsplash.com/@anikindimitry"></div>
              <div class="top_item_content">
                <div class="top_item_price">Tekan untuk lihat detail</div>
                <div class="top_item_text">Pantai Goa China</div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 top_col">

          Top Destination Item 
          <div class="top_item">
            <a href="<?php echo base_url() ?>home/detail_pantai4">
              <div class="top_item_image"><img src="<?php echo base_url() ?>assets/destino/images/top_4.jpg" alt="https://unsplash.com/@hellolightbulb"></div>
              <div class="top_item_content">
                <div class="top_item_price">Tekan untuk lihat detail</div>
                <div class="top_item_text">Pantai Ngantep</div>
              </div>
            </a>  
          </div>
        </div> -->

      </div>
    </div>
  </div>

  <!-- Last -->

  <!-- <div class="last">
    <div class="last_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url() ?>assets/destino/images/last.jpg" data-speed="0.8"></div>

    <div class="container">
      <div class="row">
        <div class="last_logo"><img src="<?php echo base_url() ?>assets/destino/images/last_logo.png" alt=""></div>
        <div class="col-lg-6 last_col">
          <div class="last_item">
            <div class="last_item_content">
              <div class="last_subtitle">maldive</div>
              <div class="last_percent">50%</div>
              <div class="last_title">Last Minute Offer</div>
              <div class="last_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar sed mauris eget tincidunt. Sed lectus nulla, tempor vel.</div>
              <div class="button last_button"><a href="offers.html">See Offer</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 last_col">
          <div class="last_item">
            <div class="last_item_content">
              <div class="last_subtitle">bali</div>
              <div class="last_percent">38%</div>
              <div class="last_title">Last Minute Offer</div>
              <div class="last_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar sed mauris eget tincidunt. Sed lectus nulla, tempor vel.</div>
              <div class="button last_button"><a href="offers.html">See Offer</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!-- Special -->

  <div class="special">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="section_title text-center">
            <h2>PROMO ANDA</h2>
            <div>jangan sampai terlewat</div>
          </div>
        </div>
      </div>
    </div>
    <div class="special_content">
      <div class="special_slider_container">
        <div class="owl-carousel owl-theme special_slider">


          <?php foreach ($all_pantai as $item) { ?>
            <div class="owl-item">
              <div class="special_item">
                <div class="special_item_background"><img src="<?php echo base_url() ?>uploads/<?php echo $item->thumbnail ?>" alt="<?php echo $item->nama_pantai ?>"></div>
                <div class="special_item_content text-center">
                  <div class="special_category">Pantai</div>
                  <div class="special_title"><a href="offers.html"><?php echo $item->nama_pantai ?></a></div>
                </div>
              </div>
            </div>
            
          <?php } ?>
          
          

          <!-- 
          <div class="owl-item">
            <div class="special_item d-flex flex-column align-items-center justify-content-center">
              <div class="special_item_background"><img src="<?php echo base_url() ?>assets/destino/images/special_2.jpg" alt="https://unsplash.com/@varshesh"></div>
              <div class="special_item_content text-center">
                <div class="special_category">Pantai</div>
                <div class="special_title"><a href="offers.html">Sendiki</a></div>
              </div>
            </div>
          </div>

          
          <div class="owl-item">
            <div class="special_item d-flex flex-column align-items-center justify-content-center">
              <div class="special_item_background"><img src="<?php echo base_url() ?>assets/destino/images/special_3.jpg" alt="https://unsplash.com/@paulgilmore_"></div>
              <div class="special_item_content text-center">
                <div class="special_category">Pantai</div>
                <div class="special_title"><a href="offers.html">Bajulmati</a></div>
              </div>
            </div>
          </div>

          
          <div class="owl-item">
            <div class="special_item d-flex flex-column align-items-center justify-content-center">
              <div class="special_item_background"><img src="<?php echo base_url() ?>assets/destino/images/special_4.jpg" alt="https://unsplash.com/@hellolightbulb"></div>
              <div class="special_item_content text-center">
                <div class="special_category">Pantai</div>
                <div class="special_title"><a href="offers.html">Watuleter</a></div>
              </div>
            </div>
          </div>

          
          <div class="owl-item">
            <div class="special_item d-flex flex-column align-items-center justify-content-center">
              <div class="special_item_background"><img src="<?php echo base_url() ?>assets/destino/images/special_5.jpg" alt="https://unsplash.com/@dnevozhai"></div>
              <div class="special_item_content text-center">
                <div class="special_category">Pantai</div>
                <div class="special_title"><a href="offers.html">Sendang Biru</a></div>
              </div>
            </div>
          </div> -->

        </div>

        <div class="special_slider_nav d-flex flex-column align-items-center justify-content-center">
          <img src="<?php echo base_url() ?>assets/destino/images/special_slider.png" alt="">
        </div>
      </div>
    </div>
  </div>

  <!-- Newsletter -->

  <!-- <div class="newsletter">
    Image by https://unsplash.com/@garciasaldana_
    <div class="newsletter_background" style="background-image:url(<?php echo base_url() ?>assets/destino/images/newsletter.jpg)"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="newsletter_content">
            <div class="newsletter_title text-center">Subscribe to our Newsletter</div>
            <div class="newsletter_form_container">
              <form action="#" id="newsletter_form" class="newsletter_form">
                <div class="d-flex flex-md-row flex-column align-content-center justify-content-between">
                  <input type="email" id="newsletter_input" class="newsletter_input" placeholder="Your E-mail Address">
                  <button type="submit" id="newsletter_button" class="newsletter_button">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!-- Footer -->

 