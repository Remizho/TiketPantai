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

  <div class="home" style="height: 400px;">
    <div class="home_background" style="background-image:url(<?php echo base_url() ?>assets/destino/images/home.jpg)"></div>
    <div class="home_content">
      <div class="home_content_inner">
        <div class="home_text_small" style="font-family: calibri; font-weight: bold; margin-top: 50px;">
        Detail Pantai Goa Cina
        </div>
      </div>
    </div>
  </div>

  <div style="margin-left: 40px;margin-right: 40px;margin-top: 50px;margin-bottom: 50px;">
        <table style="">
          <tr>
            <td>
              <img src="<?php echo base_url() ?>assets/destino/images/goa.jpg" style="width:300px;float:top;">
            </td>
            <td>
              <p style="font-size: 12px; text-align: justify; margin-left: 10px; ">
              Halo sobat ngalam, salah satu pantai yang cukup sering dikunjungi oleh para wisatawan di daerah malang selatan yaitu Pantai Goa Cina. Pantai yang memiliki nama asli Pantai Rowo Indah Namun sekitar 20 tahun lalu ada kejadian seorang pertapa Cina yang meninggal di dalam goa. Akhirnya masyarakat mengenal pantai tersebut dengan nama Pantai Goa Cina. Tempat wisata pantai ini terletak sejauh 7 km dari Pantai Bajul Mati. Perjalanan jika dihitung dari Pantai Bajul Mati hanya sekitar 15 menit saja. Walau akses menuju tempat wisata ini terbilang mudah, pengunjung harus hati-hati dengan jalanan yang berkelok. Area pantai ini memiliki tiga pulau di dalamnya yaitu Pulau Bantengan, Goa Cina dan Nyonya. Jam buka kawasan wisata ini selama 24 jam karena pengunjung diizinkan berkemah di kawasan pantai. Beberapa pengunjung mengatakan jika pada saat liburan lebaran pantai akan tutup. Biasanya selama 3 hari, kemudian area pantai akan dibuka kembali.
              <br>
              Pantai ini terkenal karena masih alami baik itu pemandangannya, maupun air lautnya yang masih jernih. Dengan angin sepoi-sepoi nan sejuk, kamu akan menikmati pemandangan Pantai lengkap dengan suara deburan ombaknya. Pasir Pantai Goa Cina berwarna putih berkilau dan di sepanjang bibir Pantai berbaris pohon cembirit dan ketapang. Selain itu juga ada pemandangan deretan tebing di pinggir Pantai. Di tengah Pantai, terdapat tiga buah batuan karang yang besar dan ditumbuhi rumput yang membuatnya menyerupai pulau, salah satunya pulau Goa Cina
              </p>
            </td>
          </tr>

          <tr>
            <td colspan="2">
              <font id="no">0</font><!--  <button id="likeShow"> Like</button> <button id="likeHide"> unLike</button> -->
              <img src="<?php echo base_url() ?>assets/destino/images/like.png" id="likeShow" style="width: 15px">
              <img src="<?php echo base_url() ?>assets/destino/images/unlike.png" id="likeHide" style="width: 15px">
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <!-- <textarea  cols=50 rows=2 placeholder="komentar"></textarea> -->
              <!-- <form> -->
              <!-- Nama Anda :</br>
              <input type=text name="text" id="teks" size="35"><br /><br>  -->
              Komentar :</br>
              <textarea rows="2" name="b" id="kepala" cols="35" wrap="virtual"></textarea><br /><br>
              <input type="button" id="kirim1" value="Komentar" />
              <input name="Clear" type="reset" value="Batal" />
              <!-- </form><br /> -->
              <hr style="border: 1px dashed black;"></hr>
              <p id="isi">
              </p>
            </td>
          </tr>
        </table>
  </div>