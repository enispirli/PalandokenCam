
<div class="col-md-3">
    <!-- *** MENUS AND FILTERS ***
_________________________________________________________ -->
    <div class="panel panel-default sidebar-menu">

        <div class="panel-heading">
            <h3 class="panel-title">Kategoriler</h3>
        </div>

        <div class="panel-body">
            <ul class="nav nav-pills nav-stacked left-menu" id="stacked-menu">
                <?php foreach ($kategoriler as $kategori) { ?>
                    <li>
                        <a href="#" data-target="#<?= $kategori->id ?>" data-toggle="collapse" data-parent="#stacked-menu"><?= $kategori->isim ?><span class="caret arrow"></span></a>
                        <ul class="nav nav-stacked collapse left-submenu" id="<?= $kategori->id ?>">
                            <?php foreach (current($kategoriUrunleri) as $urun) { ?>
                                <li><a href="<?= base_url() ?>normal/urun/<?= $urun->id ?>"><?= $urun->ismi ?></a></li>
                            <?php } next($kategoriUrunleri); ?>
                    </ul>
                <?php }?>
                </li>
            </ul>

        </div>
    </div>

</div>


    <!-- *** MENUS AND FILTERS END *** -->


