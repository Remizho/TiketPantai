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
    <center>
      Transfer ke atm BNI 000-0000-000  untuk menyelesaikan pembayaran anda dan status akan berubah setelah diverifikasi admin
      <br><br>
      <table border="1">
        <tr>
          <th>
            Kode Booking
          </th>
          <th>
            Atas nama
          </th>
          <th>
            Nama Pantai
          </th>
          <th>
            Harga
          </th>
          <th>
            Tanggal kunjung
          </th>
          <th>
            Status Pesanan
          </th>
        </tr>
        <?php
          foreach ($all_pesanan as $key) :
            if($key->fk_id_user == $this->session->userdata('user_id')){
        ?>
        <tr>
          <td>
            <?php echo $key->kode ?>
          </td>
          <td>
            <?php echo $key->nama ?>
          </td>
          <td>
            <?php echo $key->nama_pantai ?>
          </td>
          <td>
            <?php echo $key->harga_pantai ?>
          </td>
          <td>
            <?php echo $key->tggl ?>
          </td>
          <td>
            <?php echo $key->bayar ?> bayar
          </td>
        </tr>
        <?php } endforeach; ?>

      </table>
    </center>
  </div>