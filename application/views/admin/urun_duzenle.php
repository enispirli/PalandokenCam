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
                    <header><h5>Ürün Düzenleme</h5></header>
                    <div class="accordion-body collapse in body">
                        <form class="form-horizontal" action="<?= base_url() ?>admin/UrunListele/guncelle" method="post">
                            <input type="hidden" name="urunId" id="urunId" value="<?= $urun->id ?>" />
                            <div class="control-group">
                                <label for="urunAdi" class="control-label">Ürün Adı</label>
                                <div class="controls with-tooltip">
                                    <input type="text" id="urunAdi" name="urunAdi" class="span6 input-tooltip" data-placement="bottom" value="<?= $urun->ismi ?>">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="urunAciklama" class="control-label">Ürün Açıklaması</label>
                                <div class="controls with-tooltip">
                                    <textarea class="tiny-editor" id="urunAciklama" name="urunAciklama" class="span6 input-tooltip" type="text" value="<?= $urun->aciklama ?>"></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Kategori</label>

                                <div class="controls">
                                    <select name="urunKategori" id="urunKategori" data-placeholder="Bir kategori seçin..." class="chzn-select span6" tabindex="2">
                                        <option value=""></option>
                                        <?php foreach ($kategoriler as $kategori) { ?>
                                            <option value="<?=$kategori->id ?>" <?php if ($kategori->id === $urun->kategori_id) { ?>selected<?php } ?>><?= $kategori->isim ?></option>
                                          <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="submit" class="btn btn-dft">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
