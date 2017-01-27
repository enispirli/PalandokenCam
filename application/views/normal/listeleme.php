 <div class="col-md-9">
                    <div class="box">
                        <h1><?= $baslik  ?></h1>
                        <p>Ürünler aşağıda listelemektedir..</p>
                    </div>


                    <div class="row products">
  <?php foreach ($urunler as $urun) { ?>      
                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="<?=base_url()?>normal/urun/<?= $urun->id ?>">
                                                <img src="<?=base_url()?>uploads/<?= $urun->yol  ?>" alt="" class="img-responsive urun-liste">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="<?=base_url()?>normal/urun/<?= $urun->id ?>">
                                                <img src="<?=base_url()?>uploads/<?= $urun->yol  ?>" alt="" class="img-responsive urun-liste">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?=base_url()?>normal/urun/<?= $urun->id ?>" class="invisible">
                                    <img src="<?=base_url()?>uploads/<?= $urun->yol  ?>" alt="" class="img-responsive urun-liste">
                                </a>
                                <div class="text">
                                    <h3><a href="<?=base_url()?>normal/urun/<?= $urun->id ?>"><?= $urun->ismi ?></a></h3>
                                   
                                    <p class="buttons">
                                        <a href="<?=base_url()?>normal/urun/<?= $urun->id ?>" class="btn btn-default">Göster</a>
                                        
                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                
                        <?php } ?>


                    
                        <!-- /.col-md-4 -->
                    </div>
                    <!-- /.products -->

              

                </div>