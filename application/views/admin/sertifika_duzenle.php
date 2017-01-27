

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
                    <header><h5>SERTİFİKA DÜZENLE</h5></header>
                    <div class="accordion-body collapse in body ">
                        <form class="form-horizontal col-lg-6" action="<?=base_url()?>admin/SertifikaListele/guncelle" method="post">
                            <input id="sertifikaId" name="sertifikaId" value="<?=$sertifika->id?>" type="hidden"/>
                            
                            
                            <div class="control-group">
                                <label for="sertifikaIsim" class="control-label">Sertifika Adı</label>
                                 <div class="controls with-tooltip">
                                     <input id="sertifikaIsim" name="sertifikaIsim" value="<?=$sertifika->isim?>" />
                                 </div>
                            </div>
                            
                            <div class="control-group ">
                                <label for="sertifikaIcerik" class="control-label">Detay</label>
                                <div class="controls with-tooltip">
                                    <textarea type="text" id="sertifikaIcerik" class="tiny-editor"  name="sertifikaIcerik" ><?= $sertifika->icerik ?></textarea>
                                </div>
                            </div>
                             <div class="control-group">
                                <label for="sertifikaDosya" class="control-label">Sertifika Dosya </label>
                                 <div class="controls with-tooltip">
                                     <input id="sertifikaDosya" name="sertifikaDosya" value="<?=$sertifika->dosya_ismi?>" />
                                 </div>
                             </div>
                             <div class="control-group">
                                <label for="sertifikaYol" class="control-label">Sertifika Resim Yolu</label>
                                 <div class="controls with-tooltip">
                                     <input id="sertifikaYol" name="sertifikaYol" value=<?="$sertifika->yol"?> />
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
