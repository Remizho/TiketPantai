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
            <h2>Top destinations in Europe</h2>
            <div>take a look at these offers</div>
          </div>
        </div>
      </div>
      <div class="row top_content">

        <div class="col-lg-3 col-md-6 top_col">

          <!-- Top Destination Item -->
          <div class="top_item">
            <a href="#">
              <div class="top_item_image"><img src="<?php echo base_url() ?>assets/destino/images/top_1.jpg" alt="https://unsplash.com/@sgabriel"></div>
              <div class="top_item_content">
                <div class="top_item_price">From $890</div>
                <div class="top_item_text">Paris, France</div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 top_col">

          <!-- Top Destination Item -->
          <div class="top_item">
            <a href="#">
              <div class="top_item_image"><img src="<?php echo base_url() ?>assets/destino/images/top_2.jpg" alt="https://unsplash.com/@jenspeter"></div>
              <div class="top_item_content">
                <div class="top_item_price">From $890</div>
                <div class="top_item_text">Italian Riviera</div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 top_col">

          <!-- Top Destination Item -->
          <div class="top_item">
            <a href="#">
              <div class="top_item_image"><img src="<?php echo base_url() ?>assets/destino/images/top_3.jpg" alt="https://unsplash.com/@anikindimitry"></div>
              <div class="top_item_content">
                <div class="top_item_price">From $890</div>
                <div class="top_item_text">Cinque Terre</div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 top_col">

          <!-- Top Destination Item -->
          <div class="top_item">
            <a href="#">
              <div class="top_item_image"><img src="<?php echo base_url() ?>assets/destino/images/top_4.jpg" alt="https://unsplash.com/@hellolightbulb"></div>
              <div class="top_item_content">
                <div class="top_item_price">From $890</div>
                <div class="top_item_text">Santorini, Greece</div>
              </div>
            </a>  
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Last -->

  <div class="last">
    <!-- Image by https://unsplash.com/@thanni -->
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
  </div>

  <!-- Special -->

  <div class="special">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="section_title text-center">
            <h2>Special offers</h2>
            <div>take a look at these offers</div>
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
                <div class="special_category">Visiting</div>
                <div class="special_title"><a href="offers.html">Indonesia</a></div>
              </div>
            </div>
          </div>

          <!-- Special Offers Item -->
          <div class="owl-item">
            <div class="special_item d-flex flex-column align-items-center justify-content-center">
              <div class="special_item_background"><img src="<?php echo base_url() ?>assets/destino/images/special_2.jpg" alt="https://unsplash.com/@varshesh"></div>
              <div class="special_item_content text-center">
                <div class="special_category">Culture</div>
                <div class="special_title"><a href="offers.html">India</a></div>
              </div>
            </div>
          </div>

          <!-- Special Offers Item -->
          <div class="owl-item">
            <div class="special_item d-flex flex-column align-items-center justify-content-center">
              <div class="special_item_background"><img src="<?php echo base_url() ?>assets/destino/images/special_3.jpg" alt="https://unsplash.com/@paulgilmore_"></div>
              <div class="special_item_content text-center">
                <div class="special_category">Sunbathing</div>
                <div class="special_title"><a href="offers.html">Thailand</a></div>
              </div>
            </div>
          </div>

          <!-- Special Offers Item -->
          <div class="owl-item">
            <div class="special_item d-flex flex-column align-items-center justify-content-center">
              <div class="special_item_background"><img src="<?php echo base_url() ?>assets/destino/images/special_4.jpg" alt="https://unsplash.com/@hellolightbulb"></div>
              <div class="special_item_content text-center">
                <div class="special_category">Visiting</div>
                <div class="special_title"><a href="offers.html">Bali</a></div>
              </div>
            </div>
          </div>

          <!-- Special Offers Item -->
          <div class="owl-item">
            <div class="special_item d-flex flex-column align-items-center justify-content-center">
              <div class="special_item_background"><img src="<?php echo base_url() ?>assets/destino/images/special_5.jpg" alt="https://unsplash.com/@dnevozhai"></div>
              <div class="special_item_content text-center">
                <div class="special_category">Visiting</div>
                <div class="special_title"><a href="offers.html">France</a></div>
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

  <div class="newsletter">
    <!-- Image by https://unsplash.com/@garciasaldana_ -->
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
  </div>
