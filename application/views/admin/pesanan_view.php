<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!doctype html>

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Data Pesanan</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> <?php echo $page_title ?>
          </div>
          <!-- <?php echo anchor('admin/pesanan_create', 'Add', array('class' => 'btn btn-primary')); ?> -->
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Kode</th>
                  <th>id</th>
                  <th>Atas nama</th>
                  <th>Jumlah</th>
                  <th>Nama Pantai</th>
                  <th>Tanggal</th>
                  <th>status (klik button)</th>
                  <th>aksi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Kode</th>
                  <th>id</th>
                  <th>Atas nama</th>
                  <th>Jumlah</th>
                  <th>Nama Pantai</th>
                  <th>Tanggal</th>
                  <th>status (klik button)</th>
                  <th>aksi</th>
                </tr>
              </tfoot>
              <tbody>
              <?php if( !empty($all_pesanan) ) : ?>

              <?php
                foreach ($all_pesanan as $key) :
              ?>
                <tr>
                  <td><?php echo $key->kode ?></td>
                  <td><?php echo $key->id_pesanan ?></td>
                  <td><?php echo $key->nama ?></td>
                  <td><?php echo $key->jumlah ?></td>
                  <td><?php echo $key->nama_pantai ?></td>
                  <td><?php echo $key->tggl ?></td>
                  <td>
                    <div class="btn-group">
                  <?php if($key->bayar=="sudah"){ ?>
                    <a href="<?php echo base_url(). 'admin/batalkan_pembayaran/' . $key->id_pesanan ?>" class="btn btn-success" ><span class="fa fa-check"></span> Telah dibayar</a>
                  <?php }else{?>
                    <a href="<?php echo base_url(). 'admin/selesaikan_pembayaran/' . $key->id_pesanan ?>" class="btn btn-danger" ><span class="fa fa-close"></span> Belum dibayar</a>
                  <?php } ?>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group">
                    <a href="<?php echo base_url(). 'admin/pesanan_delete/' . $key->id_pesanan ?>" class="btn btn-danger" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><span class="fa fa-trash"></span> Hapus</a>
                    </div>
                </div>
                  </td>
                </tr>
              <?php endforeach; ?>

              <?php else : ?>
              <p>Belum ada data.</p>
              <?php endif; ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>