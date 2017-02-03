<?php if ($this->session->flashdata('sonuc')) { ?>
    <div class="alert alert-success fade in alert-dismissable" style="margin-top:18px;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
        <?= $this->session->flashdata('sonuc') ?>
    </div>
<?php } ?>

<h2>Siparis</h2>

<form action="<?= base_url() ?>normal/Siparis/kaydet" method="post" enctype='multipart/form-data'>
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
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="sirket">Şirket</label>
                <input type="text" class="form-control" id="sirket" name="sirket">
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label for="siparis">Siparişinizi Yazınız</label>
                <textarea id="siparis" class="form-control" rows=5"" name="siparis_icerik"></textarea>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label">Siparis Resim</label>
            <div class="controls">
                <input type="file" class="btn btn-dft" name="usr_files[]" multiple/>
            </div>
        </div>

        <div class="col-sm-12 text-center">
            <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i>Sipariş Gönder</button>

        </div>
    </div>
</form>