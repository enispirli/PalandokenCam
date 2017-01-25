    

                <div class="col-md-12">
                    <div id="main-slider">
                        <?php foreach ($sliderlar as $slider) { ?>                                              
                            <div class="item">
                                <img src="<?=base_url()?>uploads/<?= $slider->resimi ?>" alt="" class="img-responsive">
                            </div>
                        <?php } ?>
                    </div>
                    <!-- /#main-slider -->
                </div>
            </div>

    <div id="advantages">

                <div class="container">
                    <div class="same-height-row">
                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-heart"></i>
                                </div>

                                <h3><a href="#">We love our customers</a></h3>
                                <p>We are known to provide best possible service ever</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-tags"></i>
                                </div>

                                <h3><a href="#">Best prices</a></h3>
                                <p>You can check that the height of the boxes adjust when longer text like this one is used in one of them.</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-thumbs-up"></i>
                                </div>

                                <h3><a href="#">100% satisfaction guaranteed</a></h3>
                                <p>Free returns on everything for 3 months.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container -->

            </div>

 <div id="hot">

                <div class="box">
                    <div class="container">
                        <div class="col-md-12">
                            <h2>Ürünler</h2>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="product-slider">
                        
                         <?php foreach ($urunler as $urun) { ?>                                              
                          
                        
                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="<?=base_url()?>normal/urun/<?= $urun->id ?>">
                                                <img src="<?=base_url()?>uploads/<?= $urun->yol  ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="<?=base_url()?>normal/urun/<?= $urun->id ?>">
                                                <img src="<?=base_url()?>uploads/<?= $urun->yol  ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?=base_url()?>normal/urun/<?= $urun->id ?>" class="invisible">
                                    <img src="<?=base_url()?>uploads/<?= $urun->yol  ?>" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="<?=base_url()?>normal/urun/<?= $urun->id ?>"><?= $urun->ismi ?></a></h3>
                                  
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <?php } ?>
                    </div>
                    <!-- /.product-slider -->
                </div>
                <!-- /.container -->

            </div>
               

          