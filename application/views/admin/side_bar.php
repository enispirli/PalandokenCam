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
            <a data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#slider-nav">
                Slider İşlemleri
            </a>
            <ul class="collapse " id="slider-nav">
                <li><a href="<?= base_url() ?>admin/SliderListele">Slider Listeleme</a></li>
                <li><a href="<?= base_url() ?>admin/SliderEkle">Slider Ekleme</a></li>

            </ul>
        </li>
        <li class="accordion-group ">
            <a data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#sorular-nav">
                Sık Sık Sorulan Sorular
            </a>
            <ul class="collapse " id="sorular-nav">
                <li><a href="<?= base_url() ?>admin/SorularListele">Listele</a></li>
                <li><a href="<?= base_url() ?>admin/SorularEkle">Ekleme</a></li>

            </ul>
        </li>

        <li class="accordion-group ">
            <a data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#sertifika-nav">
                Sertifika İşlemleri
            </a>
            <ul class="collapse " id="sertifika-nav">
                <li><a href="<?= base_url() ?>admin/SertifikaListele">Listele</a></li>
                <li><a href="<?= base_url() ?>admin/SertifikaEkle">Ekleme</a></li>

            </ul>
        </li>
         <li class="accordion-group ">
            <a data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#referans-nav">
              Referans İşlemleri
            </a>
            <ul class="collapse " id="referans-nav">
                <li><a href="<?= base_url() ?>admin/ReferansListele">Listele</a></li>
                <li><a href="<?= base_url() ?>admin/ReferansEkle">Ekleme</a></li>

            </ul>
        </li>
        <li class="accordion-group active">
            <a data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#ayarlar-nav">
                Ayarlar
            </a>
            <ul class="collapse" id="ayarlar-nav">
                <li ><a href="<?= base_url() ?>admin/IletisimDuzenle" id="iletisimDuzenleAc">İletişim İçeriği Düzenle</a></li>
                <li><a href="<?= base_url() ?>admin/HakkimizdaDuzenle">Hakkımızda Düzenle</a></li>
                <li><a href="<?= base_url() ?>admin/AdresDuzenle">Adres Düzenle</a></li>
                <li><a href="<?= base_url() ?>admin/EmailDuzenle">Email Düzenle</a></li>
                <li><a href="<?= base_url() ?>admin/TelDuzenle">Telefon Numarası Düzenle</a></li>
                <li><a href="<?= base_url() ?>admin/KalitemizDuzenle">Kalite Politika Düzenle</a></li>
    </ul>
</li>
<li>
    <a href="<?= base_url() ?>admin/Mesajlar">Mesajlar<span class="label label-inverse pull-right"></span></a></li>



<!-- END MAIN NAVIGATION -->

</div>
<!-- END LEFT -->
