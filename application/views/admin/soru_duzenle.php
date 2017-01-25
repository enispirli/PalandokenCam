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
                    <header><h5>Duzenle</h5></header>
                    <div class="accordion-body collapse in body">
                        <form class="form-horizontal" action="<?= base_url() ?>admin/SorularListele/guncelle" method="post">
                             <input type="hidden" name="sorularId" id="sorularId" value="<?=$sorular->id?>" />
                            <div class="control-group">
                                <label for="soru" class="control-label">Soru</label>
                                <div class="controls with-tooltip">
                                    <textarea rows="10" cols="400" name="soru" ><?=$sorular->soru?></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="cevap" class="control-label">Cevap</label>
                                <div class="controls with-tooltip">
                                    <textarea class="tiny-editor" rows="10" cols="400" name="cevap"  ><?=$sorular->cevap?></textarea>                                </div>
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
