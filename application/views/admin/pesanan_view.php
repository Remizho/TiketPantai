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
          <?php echo anchor('admin/pesanan_create', 'Add', array('class' => 'btn btn-primary')); ?>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Nama</th>
                  <th>No Penumpang</th>
                  <th>Asal</th>
                  <th>Tujuan</th>
                  <th>Tanggal</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>id</th>
                  <th>Nama</th>
                  <th>No Penumpang</th>
                  <th>Asal</th>
                  <th>Tujuan</th>
                  <th>Tanggal</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
              <?php if( !empty($all_pesanan) ) : ?>

              <?php
                foreach ($all_pesanan as $key) :
              ?>
                <tr>
                  <td><?php echo $key->id_pesanan ?></td>
                  <td><?php echo $key->nama_penum ?></td>
                  <td><?php echo $key->no_penum ?></td>
                  <td><?php echo $key->asal_penum ?></td>
                  <td><?php echo $key->tujuan_penum ?></td>
                  <td><?php echo $key->tggl_penum ?></td>
                  <td>
                    <div class="btn-group">
                    <!-- Untuk link detail -->
                    <a href="<?php echo base_url(). 'admin/pesanan_edit/' . $key->id_pesanan ?>" class="btn btn-primary" ><span class="fa fa-edit"></span> Edit</a>
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