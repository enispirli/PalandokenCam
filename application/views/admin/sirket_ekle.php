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
                    <header><h5>ŞİRKET EKLE</h5></header>
                    <div class="accordion-body collapse in body">
                        <form class="form-horizontal" action="<?=base_url()?>admin/SirketEkle/ekle" method="post">
                            <div class="control-group">
                                <label for="sirketAdi" class="control-label">Şirket Adı</label>
                                <div class="controls with-tooltip">
                                    <input type="text" id="sirketAdi" name="sirketAdi" class="span6 input-tooltip" data-placement="bottom">
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
