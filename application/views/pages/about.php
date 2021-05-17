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
        <div class="home_text_small" style="font-size: 50px;">Tentang Kami</div>
      </div>
    </div>
  </div>

  <div style="margin-left: 40px;margin-right: 40px;margin-top: 50px;margin-bottom: 50px;">
    <center>
      <p>
        Ini adalah website penyedia layanan e-ticketing untuk pantai di malang selatan.
      </p>
    </center>
  </div>

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
