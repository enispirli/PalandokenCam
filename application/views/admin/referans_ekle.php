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
                    <header><h5>REFERANS  EKLE</h5></header>
                    <div class="accordion-body collapse in body ">
                        <form class="form-horizontal col-lg-6" action="<?=base_url()?>admin/ReferansEkle/ekle" method="post">
                            <input id="sertifikaId" name="sertifikaId" value="" type="hidden"/>
                            
                            
                            <div class="control-group">
                                <label for="referansAdi" class="control-label">Referans Adı</label>
                                 <div class="controls with-tooltip">
                            <input id="referansIsim" name="referansIsim" value="" />
                                 </div>
                            </div>
                             <div class="control-group ">
                                <label for="referansIcerik" class="control-label">Detay</label>
                                <div class="controls with-tooltip">
                                    <textarea type="text" id="referansIcerik" class="tiny-editor"  name="referansIcerik" ></textarea>
                                </div>
                            </div>
                           
                             <div class="control-group">
                                <label for="yol" class="control-label">Referans Resim Yolu</label>
                                 <div class="controls with-tooltip">
                              <input id="sertifikaYol" name="referansYol" value="" />
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
