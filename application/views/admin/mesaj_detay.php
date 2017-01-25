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
                    <header><h5>MESAJ DETAYLARI</h5></header>
                    <div class="accordion-body collapse in body">
                        <form class="form-horizontal" action="<?= base_url() ?>admin/Mesajlar/okunduGuncelle" method="post">
                            <input type="hidden" name="id" value="<?=$mesaj->id?>" />
                            <div class="control-group">
                                <label for="ad" class="control-label">Adı</label>
                                <div class="controls with-tooltip">
                                    <input type="text" id="ad"  name="ad" class="span6 input-tooltip" data-placement="bottom" value="<?= $mesaj->ad ?>" disabled />
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="soyad" class="control-label">Soyad</label>
                                <div class="controls with-tooltip">
                                    <input type="text" id="soyad" name="soyad" class="span6 input-tooltip" data-placement="bottom" value="<?= $mesaj->soyad ?>" disabled />
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="email" class="control-label">Email</label>
                                <div class="controls with-tooltip">
                                    <input type="text" id="email" name="email" class="span6 input-tooltip" data-placement="bottom" value="<?= $mesaj->email ?>" disabled />
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="konu" class="control-label">Konu</label>
                                <div class="controls with-tooltip">
                                    <input type="text" id="konu" name="konu" class="span6 input-tooltip" data-placement="bottom" value="<?= $mesaj->konu ?>" disabled />
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="icerik" class="control-label">İçerik</label>
                                <div class="controls with-tooltip">
                                    <textarea rows="4" id="icerik" name="icerik" class="span6 input-tooltip" type="text"  disabled><?= $mesaj->icerik ?></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="submit" class="btn btn-dft" value="Okundu Olarak İşaretle"></input>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
