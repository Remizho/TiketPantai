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
          <li class="menu_item menu_mm"><a href="<?php echo base_url() ?>home">Home</a></li>
          <li class="menu_item menu_mm"><a href="<?php echo base_url() ?>home/about">About us</a></li>
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
    <div class="home_content">
      <div class="home_content_inner">
        <div class="home_text_small">Pemesanan Berhasil</div>
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

        <div class="col-lg-3 col-md-6 top_col">

          <!-- Top Destination Item -->
          <div class="top_item">
            <a href="<?php echo base_url() ?>home/detail_pantai">
              <div class="top_item_image"><img src="<?php echo base_url() ?>assets/destino/images/top_1.jpg" alt="https://unsplash.com/@sgabriel"></div>
              <div class="top_item_content">
                <div class="top_item_price">Tekan untuk lihat detail</div>
                <div class="top_item_text">Pantai Ngudel</div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 top_col">

          <!-- Top Destination Item -->
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

          <!-- Top Destination Item -->
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

          <!-- Top Destination Item -->
          <div class="top_item">
            <a href="<?php echo base_url() ?>home/detail_pantai4">
              <div class="top_item_image"><img src="<?php echo base_url() ?>assets/destino/images/top_4.jpg" alt="https://unsplash.com/@hellolightbulb"></div>
              <div class="top_item_content">
                <div class="top_item_price">Tekan untuk lihat detail</div>
                <div class="top_item_text">Pantai Ngantep</div>
              </div>
            </a>  
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Last -->

  

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
          
          <!-- Special Offers Item -->
          <div class="owl-item">
            <div class="special_item">
              <div class="special_item_background"><img src="<?php echo base_url() ?>assets/destino/images/special_1.jpg" alt="https://unsplash.com/@garciasaldana_"></div>
              <div class="special_item_content text-center">
                <div class="special_category">Pantai</div>
                <div class="special_title"><a href="offers.html">Balekambang</a></div>
              </div>
            </div>
          </div>

          <!-- Special Offers Item -->
          <div class="owl-item">
            <div class="special_item d-flex flex-column align-items-center justify-content-center">
              <div class="special_item_background"><img src="<?php echo base_url() ?>assets/destino/images/special_2.jpg" alt="https://unsplash.com/@varshesh"></div>
              <div class="special_item_content text-center">
                <div class="special_category">Pantai</div>
                <div class="special_title"><a href="offers.html">Sendiki</a></div>
              </div>
            </div>
          </div>

          <!-- Special Offers Item -->
          <div class="owl-item">
            <div class="special_item d-flex flex-column align-items-center justify-content-center">
              <div class="special_item_background"><img src="<?php echo base_url() ?>assets/destino/images/special_3.jpg" alt="https://unsplash.com/@paulgilmore_"></div>
              <div class="special_item_content text-center">
                <div class="special_category">Pantai</div>
                <div class="special_title"><a href="offers.html">Bajulmati</a></div>
              </div>
            </div>
          </div>

          <!-- Special Offers Item -->
          <div class="owl-item">
            <div class="special_item d-flex flex-column align-items-center justify-content-center">
              <div class="special_item_background"><img src="<?php echo base_url() ?>assets/destino/images/special_4.jpg" alt="https://unsplash.com/@hellolightbulb"></div>
              <div class="special_item_content text-center">
                <div class="special_category">Pantai</div>
                <div class="special_title"><a href="offers.html">Watuleter</a></div>
              </div>
            </div>
          </div>

          <!-- Special Offers Item -->
          <div class="owl-item">
            <div class="special_item d-flex flex-column align-items-center justify-content-center">
              <div class="special_item_background"><img src="<?php echo base_url() ?>assets/destino/images/special_5.jpg" alt="https://unsplash.com/@dnevozhai"></div>
              <div class="special_item_content text-center">
                <div class="special_category">Pantai</div>
                <div class="special_title"><a href="offers.html">Sendang Biru</a></div>
              </div>
            </div>
          </div>

        </div>

        <div class="special_slider_nav d-flex flex-column align-items-center justify-content-center">
          <img src="<?php echo base_url() ?>assets/destino/images/special_slider.png" alt="">
        </div>
      </div>
    </div>
  </div>

  <!-- Newsletter -->

  <
