<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Data user</li>
      </ol>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> <?php echo $page_title ?>
          </div>
          <?php echo anchor('admin/listpantai_create', 'Add', array('class' => 'btn btn-primary')); ?>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Nama_Pantai</th>
                  <th>Harga_Pantai</th>
                  <th>Gambar</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>id</th>
                  <th>Nama_Pantai</th>
                  <th>Harga_Pantai</th>
                  <th>Gambar</th>
                </tr>
              </tfoot>
              <tbody>
              <?php if( !empty($all_listpantai) ) : ?>

              <?php
                foreach ($all_listpantai as $key) :
              ?>
                <tr>
                  <td><?php echo $key->id_list ?></td>
                  <td><?php echo $key->nama_pantai ?></td>
                  <td><?php echo $key->harga_pantai ?> </td>
                  <td><?php echo $key->gambar ?></td>
                  <td>
                    <div class="btn-group">
                    <!-- Untuk link detail -->
                    <a href="<?php echo base_url(). 'admin/listpantai_edit/' . $key->id_list ?>" class="btn btn-primary"><span class="fa fa-edit"></span> Edit</a>
                    <a href="<?php echo base_url(). 'admin/listpantai_delete/' . $key->id_list ?>" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger"><span class="fa fa-trash"></span> Hapus</a>
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