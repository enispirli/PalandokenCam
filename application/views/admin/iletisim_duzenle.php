<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<
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
                    <header><h5>İLETİSİM BİLGİLERİ DÜZENLE</h5></header>
                    <div class="accordion-body collapse in body">
                        <form class="form-horizontal" action="<?= base_url() ?>admin/IletisimDuzenle/kaydet" method="post">
                            <input type="hidden" name="id" id="id" value="<?= $iletisim->id ?>"/>
                            <div class="control-group">
                                <label for="iletisim" class="control-label">İçerik</label>
                                <div class="controls with-tooltip">
                                    <textarea type="text" id="iletisim" class="tiny-editor" name="iletisim" ><?= $iletisim->icerik ?></textarea>
                                </div>
                                <div class="controls with-tooltip">
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="submit" class="btn btn-dft" id="iletisimKaydetButton">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
