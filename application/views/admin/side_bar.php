<div id="left">

    <!-- BEGIN MAIN NAVIGATION -->


    <ul id="menu" class="unstyled accordion collapse in">

        <li class="accordion-group active">
            <a data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#dashboard-nav">
                Müşteri İşlemleri
            </a>
            <ul class="collapse in" id="dashboard-nav">
                <li><a href="<?= base_url() ?>admin/MusteriEkle">Müsteri Ekleme</a></li>
                <li><a href="<?= base_url() ?>admin/MusteriListele">Müsteri Listeleme</a></li>
                <li><a href="<?= base_url() ?>admin/SirketEkle">Şirket Ekleme</a></li>
                <li><a href="<?= base_url() ?>admin/SirketListele">Şirket Listeleme</a></li>
            </ul>
        </li>
        <li class="accordion-group ">
            <a data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#urun-nav">
                Ürün İşlemleri
            </a>
            <ul class="collapse " id="urun-nav">
                <li><a href="<?= base_url() ?>admin/UrunListele">Ürün Listeleme</a></li>
                <li><a href="<?= base_url() ?>admin/UrunEkle">Ürün Ekleme</a></li>

            </ul>
        </li>

        <li class="accordion-group ">
            <a data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#kategori-nav">
                Kategori İşlemleri
            </a>
            <ul class="collapse " id="kategori-nav">
                <li><a href="<?= base_url() ?>admin/KategoriListele">Kategori Listeleme</a></li>
                <li><a href="<?= base_url() ?>admin/KategoriEkle">Kategori Ekleme</a></li>

            </ul>
        </li>
        <li class="accordion-group ">
            <a data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#siparis-nav">
                Sipariş İşlemleri
            </a>
            <ul class="collapse " id="siparis-nav">
                <li><a href="form-general.html">Yeni Siparişler</a></li>
                <li><a href="form-validation.html">Sipariş Arşivi</a></li>
            </ul>

        <li><a href="form-validation.html">Mesajlar<span class="label label-inverse pull-right">4</span></a></li>



        <!-- END MAIN NAVIGATION -->

</div>
<!-- END LEFT -->
