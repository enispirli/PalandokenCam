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
                <div class="box dark">
                    <header><h5>KATEGORİ EKLE</h5></header>
                    <div class="accordion-body collapse in body">
                        <form class="form-horizontal" action="<?= base_url()?>admin/KategoriListele/guncelle" method="post">
                            <input type="hidden" name="kategoriId" id="kategoriId" value="<?=$kategori->id?>" />
                            <div class="control-group">
                                <label for="kategoriAdi" class="control-label">Kategori Adı</label>
                                <div class="controls with-tooltip">
                                    <input type="text" id="kategoriAdi" name="kategoriAdi" class="span6 input-tooltip" data-placement="bottom" value="<?=$kategori->isim?>"></input>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="submit" class="btn btn-dft" value="Güncelle"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
