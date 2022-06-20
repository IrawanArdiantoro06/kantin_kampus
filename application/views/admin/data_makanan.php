<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_makanan"><i class="fas fa-plus fa-sm"></i>Tambah Makanan</button>
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA MENU</th>
            <th>KETERANGAN</th>
            <th>KATEGORI</th>
            <th>HARGA</th>
            <th>STOK</th>
            <th colspan="2">EDIT</th>
        </tr>

         <?php
         $no=1;
         foreach($makanan as $mkn) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $mkn->nama_mkn ?></td>
                <td><?php echo $mkn->keterangan ?></td>
                <td><?php echo $mkn->kategori ?></td>
                <td><?php echo $mkn->harga ?></td>
                <td><?php echo $mkn->stok ?></td>
                <td><?php echo anchor('admin/data_makanan/edit/' .$mkn->id_mkn, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            </tr>
         <?php endforeach; ?>

    </table>
</div>


<!-- Modal -->
<div class="modal fade" id="tambah_makanan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT PRODUK</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_makanan/tambah_aksi'?>" method="post" enctype="multipart/form-data">
            <div class="form-grup">
                <label>Nama Makanan</label>
                <input type="text" name="nama_mkn" class="form-control">
            </div>

            <div class="form-grup">
                <label>keterangan</label>
                <input type="text" name="keterangan" class="form-control">
            </div>

            <div class="form-grup">
                <label>Kategori</label>
                <input type="text" name="kategori" class="form-control">
            </div>

            <div class="form-grup">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control">
            </div>

            <div class="form-grup">
                <label>stok</label>
                <input type="text" name="stok" class="form-control">
            </div>

            <div class="form-grup">
                <label>Gambar Produk</label><br>
                <input type="file" name="gambar" class="form-control">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>

    </div>
  </div>
</div>