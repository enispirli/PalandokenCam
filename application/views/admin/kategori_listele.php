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
                    <header><h5>KATEGORİ LİSTELE</h5></header>
                    <div class="accordion-body collapse in body">
                        <div id="actionTable" class="body collapse in">
                            <table class="table table-bordered responsive">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kategori Adı</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($kategoriler as $kategori) { ?>
                                        <tr> 
                                            <td><?= $kategori->id ?></td>
                                            <td><?= $kategori->isim ?></td>
                                            <td>
                                                <a href="<?= base_url(); ?>admin/KategoriListele/duzenle/<?= $kategori->id ?>"><button class="btn edit"><i class="icon-edit"></i></button></a>
                                                <a href="<?= base_url(); ?>admin/KategoriListele/sil/<?= $kategori->id ?>" <button class="btn btn-danger remove" data-toggle="confirmation"><i class="icon-remove"></i></button>
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