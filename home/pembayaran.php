<?php
    if(isset($_GET['total'])){
        $total = $_GET['total'];
    }
?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="alert alert-success" role="alert">Total Belanja Anda Adalah : Rp. <?= number_format($total, 0,',','.' ) ?></div>
        </div>

    </div>

    
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-body text-center text-info mb-2">
                    Silahkan Pilih Metode Pembayaran
                </div>
                
                    
                
            </div>
            <select name="" id="" class="col-md-12 ">
                
                <option value="Ovo" >Ovo</option>
                <option value="Gopay" >Gopay</option>
                <option value="Dana" >Dana</option>
                <option value="Link Aja" >Link Aja</option>
            </select>
        </div>
        
        </div>
    </div>    
    <br>
    <div class="col-md-4">
        <a href="?f=home&m=beli" role="button" class="btn btn-sm btn-danger">Kembali</a>
        <a href="" data-toggle="modal" data-target="#mymodal" role="button" class="btn btn-sm btn-info">Checkout</a>
    </div>
</div>

<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip" data-placement="bottom" title="Kembali"><span aria-hidden="true"><i class="fas fa-times "></i></span></button>
                <h3 class="modal-title text-center text-danger" id="exampleModalLabel">Harap Dibaca!</h3>
            
            </div>
            <div class="modal-body">
                <div class="col">
                    <div class="alert alert-danger text-center">
                        Silahkan Transfer Di Nomor 081xxxxxxxx

                    </div>
                    <p>Sesuai Dengan Metode Pembayaran Dan Total Belanja Anda Yaitu Rp. <?= number_format($total, 0,',','.' ) ?></p>
                    <p>Barang Akan Dikirim Setelah Pembayaran Selesai</p>
                </div>

            </div>
            <div class="modal-footer">
            
                <a href="?f=home&m=checkout&total=<?= $total ?>" role="button" class="btn btn-sm btn-info">Checkout</a>
            </div>

        </div>
    </div>
</div>
