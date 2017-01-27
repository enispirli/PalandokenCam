
                <div class="col-md-9">

                    <div class="row" id="productMain">
                        <div class="col-sm-6">
                            <div id="mainImage">
                                <img src="<?=base_url()?>uploads/<?= $resimler[0]->yol  ?>" alt="" class="img-responsive">
                            </div>

                       

                        </div>
                        

                            <div class="row" id="thumbs">
                                
                                  <?php foreach ($resimler as $resim) { ?>
                                <div class="col-xs-4">
                                    <a href="<?=base_url()?>uploads/<?= $resim->yol  ?>" class="thumb">
                                        <img src="<?=base_url()?>uploads/<?= $resim->yol  ?>" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
            <div class="col-md-12">
                
                    <div class="box" id="details">
                        <p>
                        <h4> <?= $urun->ismi ?></h4>
                            <?= $urun->aciklama  ?>
                           
                           
             
                    </blockquote>

                            <hr>
                            <div class="social">
                                <h4>Paylaş</h4>
                                <p>
                                    <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                                </p>
                            </div>
                    </div>

            </div>
            
                