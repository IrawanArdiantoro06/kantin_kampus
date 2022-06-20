<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA BARANG</h3>

    <?php foreach($makanan as $mkn) : ?>

        <form method="post" action="<?php echo base_url().'admin/data_makanan/update' ?>">

            <div class="for-group">
                <label>Nama Makanan</label>
                <input type="text" name="nama_mkn" class="form-control" value="<?php echo $mkn->nama_mkn?>">
            </div>

            <div class="for-group">
                <label>Keterangan</label>
                <input type="hidden" name="id_mkn" class="form-control" value="<?php echo $mkn->id_mkn?>">
                <input type="text" name="keterangan" class="form-control" value="<?php echo $mkn->keterangan?>">
            </div>

            <div class="for-group">
                <label>Kategori</label>
                <input type="text" name="kategori" class="form-control" value="<?php echo $mkn->kategori?>">
            </div>

            <div class="for-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $mkn->harga?>">
            </div>

            <div class="for-group">
                <label>stok</label>
                <input type="text" name="stok" class="form-control" value="<?php echo $mkn->stok?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>

        </form>

    <?php endforeach; ?>
</div>