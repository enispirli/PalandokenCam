<div class="container">
    <div class="col-md-12">

        <div class="box" id="contact">
            <h1>İLETİŞİM</h1>

            <?= $iletisim->icerik ?>

            <hr>

            <div class="row">
                <div class="col-sm-4">
                    <h3><i class="fa fa-map-marker"></i> Adres</h3>
                    <p>
                        <?=$adres->icerik?>
                    </p>
                </div>
                                    
                <div class="col-sm-4">
                    <h3><i class="fa fa-envelope"></i> Email</h3>
                    <p class="text-muted">
                    <ul>
                        <li><strong><a ><?=$mail->icerik?></a></strong>
                        </li>
                    </ul>
                </div>
                 <div class="col-sm-4">
                    <h3><i class="fa fa-phone"></i>Telefon Numarası</h3>
                    <p class="text-muted">Bize Ulaşın</p>
                    <p><strong><?=$tel->icerik?></strong>
                    </p>
                </div>   
                <!-- /.col-sm-4 -->
            </div>
            <!-- /.row -->

            <hr>

            <?php if ($this->session->flashdata('sonuc')) { ?>
                <div class="alert alert-success fade in alert-dismissable" style="margin-top:18px;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                    <?= $this->session->flashdata('sonuc') ?>
                </div>
            <?php } ?>
            <hr>
            <h2>İletişim Formu</h2>

            <form action="<?= base_url() ?>normal/Iletisim/kaydet" method="post">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="ad">Ad</label>
                            <input type="text" class="form-control" id="ad" name="ad">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="soyad">Soyad</label>
                            <input type="text" class="form-control" id="soyad" name="soyad">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="konu">Konu</label>
                                <input type="text" class="form-control" id="konu" name="konu">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="icerik">İçerik</label>
                                <textarea id="icerik" class="form-control" rows=5"" name="icerik"></textarea>
                            </div>
                        </div>

                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Mesaj Gönder</button>

                        </div>
                    </div>
                    <!-- /.row -->
            </form>


        </div>


    </div>
    <!-- /.col-md-9 -->
</div>