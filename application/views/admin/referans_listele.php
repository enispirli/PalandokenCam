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
                    <header><h5>SERTİFİKA LİSTELE</h5></header>
                    <div class="accordion-body collapse in body">
                        <div id="actionTable" class="body collapse in">
                            <table class="table table-bordered responsive">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Referans Adı</th>
                                        <th>Referans İçerik</th>
                                        <th>Resim Yolu </th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($referanslar as $referans) { ?>
                                        <tr> 
                                            <td><?= $referans->id ?></td>
                                            <td><?= $referans->isim ?></td>
                                             <td><?= $referans->icerik ?></td>
                                           
                                             <td><?= $referans->yol ?></td>
                                            
                                            <td>
                                                <a href="<?= base_url(); ?>admin/ReferansListele/duzenle/<?= $referans->id ?>"><button class="btn edit"><i class="icon-edit"></i></button></a>
                                                <a href="<?= base_url(); ?>admin/ReferansListele/sil/<?= $referans->id ?>" <button class="btn btn-danger remove" data-toggle="confirmation"><i class="icon-remove"></i></button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
