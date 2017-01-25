  <div class="col-md-12">
      
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
                    <div class="box">
                        <h1>Kayıt Ol</h1>


                        <hr>

                        <form action="<?= base_url() ?>normal/kayitol/ekle" method="post">
                            <div class="form-group">
                                <label for="name">Adı</label>
                                <input type="text" class="form-control" id="musteriAdi" name="musteriAdi">
                            </div>
                            <div class="form-group">
                                <label for="name">SoyAdı</label>
                                <input type="text" class="form-control" id="musteriSoyadi" name="musteriSoyadi">
                            </div>
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="text" class="form-control" id="musteriEmail" name="musteriEmail">
                            </div>
                             <div class="form-group">
                                <label for="name">Şifre</label>
                                <input type="password" class="form-control" id="musteriSifre" name="musteriSifre">
                            </div>
                              <div class="form-group">
                                <label for="name">Tekrar Şifre Girin</label>
                                <input type="password" class="form-control" id="musteriSifre2" name="musteriSifre2">
                            </div>
                             <div class="form-group">
                                <label for="name">Telefon</label>
                                <input type="text" class="form-control" id="musteriTel" name="musteriTel">
                            </div>
                           
                            
                             <div class="form-group">
                                <label for="name">Şirket</label>
                                <select name="musteriSirket" id="musteriSirket" data-placeholder="Bir şirket seçin..."  >
                                        <option value=""></option>
                                        <?php foreach ($sirketler as $sirket) { ?>
                                            <option value="<?= $sirket->id ?>"><?= $sirket->ismi ?></option>
                                        <?php } ?>
                                    </select>
                            </div>
                            
                            
                            
                          
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Kayıt Ol</button>
                            </div>
                        </form>
                    </div>
                </div>