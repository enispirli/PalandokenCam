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
                <?php if($this->session->flashdata('sonuc')){ ?>
                <div class="alert alert-success fade in alert-dismissable" style="margin-top:18px;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                    <?=$this->session->flashdata('sonuc')?>
                </div>
                <?php }?>
                <div class="box dark">
                    <header><h5>TELEFON NUMARASI</h5></header>
                    <div class="accordion-body collapse in body ">
                        <form class="form-horizontal col-lg-6" action="<?=base_url()?>admin/TelDuzenle/kaydet" method="post">
                            <input id="telId" name="telId" value="<?= $tel->id ?>" type="hidden"/>
                            <input id="telIsim" name="telIsim" value="<?= $tel->isim ?>" type="hidden"/>
                            <div class="control-group ">
                                <label for="detay" class="control-label">Detay</label>
                                <div class="controls with-tooltip">
                                    <textarea type="text" id="telIcerik" class="tiny-editor"  name="telIcerik" ><?= $tel->icerik ?></textarea>
                                </div>
                            </div>
                            <div class="control-group ">
                                <input type="submit" class="right btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
