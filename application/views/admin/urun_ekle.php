<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<div id="content" class>
    <div class="container-fluid outer">
        <div class="row-fluid">
            <div class="span-12 inner">
                <?php if ($this->session->flashdata('sonuc')) { ?>
                    <div class="alert alert-success fade in alert-dismissable" style="margin-top:18px;">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                        <?= $this->session->flashdata('sonuc') ?>
                    </div>
                <?php } ?>
                <div class="box dark">
                    <header><h5>ÜRÜN EKLEME</h5></header>
                    <div class="accordion-body collapse in body">
                        <form class="form-horizontal" enctype="multipart/form-data" action="<?= base_url() ?>admin/UrunEkle/ekle" method="post">
                            <div class="control-group">
                                <label for="urunAdi" class="control-label">Ürün Adı</label>
                                <div class="controls with-tooltip">
                                    <input type="text" id="urunAdi" name="urunAdi" class="span6 input-tooltip" data-placement="bottom">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="urunAciklama" class="control-label">Ürün Açıklaması</label>
                                <div class="controls with-tooltip">
                                   
                                    <textarea class="tiny-editor" id="urunAciklama" name="urunAciklama"  ></textarea> <!--tampon-->
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Kategori</label>

                                <div class="controls">
                                    <select name="urunKategori" id="urunKategori" data-placeholder="Bir kategori seçin..." class="chzn-select span6" tabindex="2">
                                        <option value=""></option>
                                        <?php foreach ($kategoriler as $kategori) { ?>
                                            <option value="<?= $kategori->id ?>"><?= $kategori->isim ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Resimler</label>
                                <div class="controls">
                                    <input type="file" class="btn btn-dft" name="usr_files[]" multiple/>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="submit" class="btn btn-dft" id="urunEkleButton" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
