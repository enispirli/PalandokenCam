
<div class="col-md-3">
                    <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Kategoriler</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked category-menu">
                                <?php foreach ($kategoriler as $kategori) { ?>
                                <li>
                                    <a href="<?=base_url()?>normal/urunlisteleme/kategori/<?= $kategori->id  ?>"><?= $kategori->isim ?> </a>
                                </li>
                                <?php } ?>
                            </ul>

                        </div>
                    </div>

                


                    <!-- *** MENUS AND FILTERS END *** -->


                </div>