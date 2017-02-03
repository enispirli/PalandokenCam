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
            
                    
                    <!-- /.row -->
            </form>


        </div>


    </div>
    <!-- /.col-md-9 -->
</div>