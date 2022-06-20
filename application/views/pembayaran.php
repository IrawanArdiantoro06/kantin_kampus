<div class="container-fluid">
    <div class="row">
        <div class="col-d-2"></div>
        <div class="col-d-8">
            <div class="btn btn-sm btn-success">
                <?php 
                $grand_total = 0;
                if($keranjang = $this->cart->contents())
                {
                    foreach ($keranjang as $items)
                    {
                        $grand_total = $grand_total + $items['subtotal'];
                    }
                echo "Total Belanja Anda: Rp. ".number_format($grand_total,0,',','.');
                
                ?>
            </div><br><br>
                <h4>Input Alamat Pengiriman dan Pembayaran</h4>

                <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Alamat Kelas</label>
                        <input type="text" name="alamat" placeholder="Alamat Kelas Anda" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>No. Telepon</label>
                        <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Dompet Digital</label>
                        <select class="form-control">
                            <option>--PILIH--</option>
                            <option>BCA   - 73139829</option>
                            <option>BRI   - 94259284</option>
                            <option>BNI   - 98398942</option>
                            <option>DANA  - 08573727</option>
                            <option>OVO   - 08245489</option>
                            <option>GOPAY - 08398942</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-sm btn-primary mb-3">PESAN</button>
                </form>
        
                <?php 
                } else{
                    echo "<h4>Keranjang Anda Masih Kosong";
                }
                ?>
        </div>
        <div class="col-d-2"></div>
    </div>
</div>