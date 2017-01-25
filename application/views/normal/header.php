<div class="panel panel-default sidebar-menu">
    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">

            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="<?= base_url() ?>normal/Home">ANASAYFA</a>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">ÜRÜNLER <b class="caret"></b></a>
                        <ul class="dropdown-menu" >
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <?php while ($kategori = key($kategoriUrunler)) { ?>
                                            <div class="col-sm-5">
                                                <h5><?= $kategori ?></h5>
                                                <ul>
                                                    <?php foreach (current($kategoriUrunler) as $urun) { ?>
                                                        <li><a href="<?= base_url() ?>normal/urun/<?= $urun->id ?>"><?= $urun->ismi ?></a>
                                                        </li>
                                                    <?php } next($kategoriUrunler); ?>
                                                </ul>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>

                        </ul> 
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="50">KURUMSAL <b class="caret"></b></a>
                        <ul class="dropdown-menu" style="width: 250px;  margin-left: 235px"  >
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-12">

                                            <ul>
                                                <li><a href="<?= base_url() ?>normal/Hakkimizda">Hakkımızda</a>
                                                </li>
                                                <li><a href="category.html">Sertifikalarımız</a>
                                                </li>
                                                <li><a href="category.html">Misyon & Vizyon</a>
                                                </li>


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">REFERANSLAR</a>

                    </li>
                    <li >
                        <a href="<?= base_url() ?>normal/Iletisim" >İLETİŞİM </a>


                    </li>

                </ul>
            </div>
        </div>
        <!-- /.yamm-content -->
        </li>





    </div>

</div>
<!--/.nav-collapse -->


<!-- /.container -->

<!-- /#navbar -->
<div id="all">

    <div id="content">
        <div class="container">