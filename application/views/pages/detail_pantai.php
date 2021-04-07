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
        Detail Pantai Ngudel
        </div>
      </div>
    </div>
  </div>

  <div style="margin-left: 40px;margin-right: 40px;margin-top: 50px;margin-bottom: 50px;">
        <table style="">
          <tr>
            <td>
              <img src="<?php echo base_url() ?>assets/destino/images/last.jpg" style="width:300px;float:top;">
            </td>
            <td>
              <p style="font-size: 12px; text-align: justify; margin-left: 10px; ">
              Halo sobat Ngalam... Bicara soal pantai pasti bakal gaada habisnya nih. Apalagi kalauerkenal  pantainya itu pantai Malang Selatan. Dari banyaknya pantai di Kabupaten Malang itu, salah satu pantai yang paling hits di Malang yaitu Pantai Ngudel. Pantai yang mempunyai banyak keunikan itu dapat dinikmati para pantai lovers nihh.
              <br>
              Pantai Ngudel ini terkenal dengan batunya yang unik. Asal kalian tau nih gengss, batu yang unik itu ada di tengah laut loh. Ngga hanya itu aja, batu unik itu bentuknya seperti separuh segitiga juga. Sehingga disana banyak banget nih yang foto dengan objek itu. Nah, jangan mau kalah nih gengss kalian juga harus mengunjungi pantai ini nih.
              Santai diiringi selir angin yang sejuk dan menenangkan, suara ombak yang serasa memecah batu karang sangat cocok untuk para pantai lovers yang ingin menenangkan diri dari kejenuhan nih. Untuk akses menuju pantai sendiri juga sudah sangat mendukung setelah dibukanya jalur lintas selatan pada tahun 2016 lalu. Pantai Ngudel sendiri terletak di Desa Sindurejo, Kecamatan Gedangan, Kabupaten Malang, Jawa Timur. 
              <br>
              Untuk dapat menuju Pantai Ngudel, anda dapat menempuh dari Kota Malang dengan jarak sekitar 60 km dan jika dihitung, waktu tempuhnya sekitar 3 hingga 4 jam. Untuk jarak tempuh seperti itu, tentu nanti akan terbayarkan dengan keindahan pesona Pantai Ngudel nih. Siapa sih yang tidak ingin mendapatkan pemandangan yang sangat indah dan juga menenangkan? Pantai Ngudel ini juga cocok untuk berkemah nih gengss. Tidak jarang loh menjumpai orang yang berkemah di pantai ini.  
              <br>
              Tunggu apa lagi nih gengss, ingin pantai yang cocok buat anda? Pantai Ngudel solusinya.

 
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