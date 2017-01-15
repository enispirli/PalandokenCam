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
                    <div class="alert
                         <?php if($this->session->flashdata('error') == true){ ?>
                         alert-error
                         <?php }?>
                         <?php if($this->session->flashdata('error') == false){ ?>
                         alert-success
                         <?php }?>
                         fade in alert-dismissable" style="margin-top:18px;">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                        <?= $this->session->flashdata('sonuc') ?>
                    </div>
                <?php } ?>
                <div class="box dark">
                    <header><h5>MÜŞTERİ DÜZENLE</h5></header>
                  
                    <div class="accordion-body collapse in body">
                        <form class="form-horizontal" action="<?= base_url() ?>admin/MusteriListele/guncelle" method="post">
                            <input type="hidden" name="musteriId" id="musteriId" value="<?=$musteri->id?>" />
                            <div class="control-group">
                            <div class="control-group">
                                <label for="musteriAdi" class="control-label">Adı</label>
                                <div class="controls with-tooltip">
                                    <input type="text" id="musteriAdi" name="musteriAdi" class="span6 input-tooltip" data-placement="bottom" value="<?=$musteri->ad?>">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="musteriSoyadi" class="control-label">Soyadı</label>
                                <div class="controls with-tooltip">
                                    <input type="text" id="musteriSoyadi" name="musteriSoyadi" class="span6 input-tooltip" data-placement="bottom" value="<?=$musteri->soyad?>">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="musteriEmail" class="control-label">Email</label>
                                <div class="controls with-tooltip">
                                    <input type="text" id="musteriEmail" name="musteriEmail" class="span6 input-tooltip" data-placement="bottom" value="<?=$musteri->email?>">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="musteriSifre" class="control-label">Şifre</label>
                                <div class="controls with-tooltip">
                                    <input type="password" id="musteriSifre" name="musteriSifre" class="span6 input-tooltip" data-placement="bottom" value="<?=$musteri->sifre?>">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="musteriSifre2" class="control-label">Tekrar Şifre Girin</label>
                                <div class="controls with-tooltip">
                                    <input type="password" id="musteriSifre2" name="musteriSifre2" class="span6 input-tooltip" data-placement="bottom" value="<?=$musteri->sifre?>">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="musteriTel" class="control-label">Telefon</label>
                                <div class="controls with-tooltip">
                                    <input type="text" id="musteriTel" name="musteriTel" class="span6 input-tooltip" data-placement="bottom" value="<?=$musteri->tel?>">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Şirket</label>

                                <div class="controls">
                                    <select name="musteriSirket" id="musteriSirket" data-placeholder="Bir şirket seçin..." class="chzn-select span6" tabindex="2">
                                        <option value=""></option>
                                        <?php foreach ($sirketler as $sirket) { ?>
                                            <option value="<?= $sirket->id ?>" <?php if ($sirket->id === $musteri->sirket_id) { ?>selected<?php } ?>><?= $sirket->ismi ?></option>
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
