<div class="container-fluid">

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  

  <div class="carousel-inner">
    
    
         </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
            data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
            data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    <div class="row text-center ml-5">

        <?php foreach ($makanan as $mkn) : ?>

            <div class="card ml-5 mb-2" style="width: 11rem;">
              <img src="<?php echo base_url().'/uploads/'.$mkn->gambar ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title mb-1"><?php echo $mkn->nama_mkn?></h5>
                <small><?php echo $mkn->keterangan?></small><br>
                <span class="badge badge-pill badge-success mb-3">Rp. <?php echo number_format($mkn->harga,0,',','.') ?></span>
                <?php echo anchor('dashboard/tambah_ke_keranjang/' .$mkn->id_mkn,'<div class="btn btn-sm btn-primary mb-2">Masuk Keranjang</div>') ?>
                <?php echo anchor('dashboard/detail/' .$mkn->id_mkn,'<div class="btn btn-sm btn-success">Detail</div>') ?>      
            </div>
        </div>

        <?php endforeach; ?>
    </div>
</div>           