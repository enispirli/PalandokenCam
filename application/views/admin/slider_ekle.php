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
                    <header><h5>SLİDER EKLEME</h5></header>
                    <div class="accordion-body collapse in body">
                        <form class="form-horizontal col-lg-6" enctype="multipart/form-data" action="<?= base_url() ?>admin/SliderEkle/ekle" method="post">
                            <div class="control-group">
                                <label for="sliderUrl" class="control-label">Slider Linki</label>
                                <div class="controls with-tooltip">
                                    <input type="text" id="sliderUrl" name="sliderUrl" class="span6 input-tooltip" data-placement="bottom">
                                </div>
                            </div>
                               <div class="control-group">
                                <label class="control-label">Resim</label>
                                <div class="controls">
                                    <input type="file" name="usr_files[]"  />
                                </div>
                            </div>
                             <div class="control-group">
                                <label for="sliderUrl" class="control-label">Slider Sırası</label>
                                <div class="controls with-tooltip">
                                    <input type="number" id="sliderSira" name="sliderSira" class="span6 input-tooltip" data-placement="bottom">
                                </div>
                            </div>
                         
                            <div class="control-group">
                                <input type="submit" class="btn btn-success right" id="sliderEkleButton" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
