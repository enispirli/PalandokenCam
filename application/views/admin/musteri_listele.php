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
                    <header><h5>MÜŞTERİ LİSTELE</h5></header>
                    <div class="accordion-body collapse in body">
                        <div id="actionTable" class="body collapse in">
                            <table class="table table-bordered responsive">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Adı</th>
                                        <th>Soyadı</th>
                                        <th>Email</th>
                                        <th>Telefon</th>
                                        <th>Şirket</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($musteriler as $musteri) { ?>
                                        <tr> 
                                            <td><?= $musteri->id ?></td>
                                            <td><?= $musteri->ad ?></td>
                                            <td><?= $musteri->soyad ?></td>
                                            <td><?= $musteri->email ?></td>
                                            <td><?= $musteri->tel ?></td>
                                            <td><?= $sirketler[$musteri->sirket_id] ?></td>

                                            <td>
                                                <a href="<?= base_url(); ?>admin/MusteriListele/duzenle/<?= $musteri->id ?>"><button class="btn edit"><i class="icon-edit"></i></button></a>
                                                <a href="<?= base_url(); ?>admin/MusteriListele/sil/<?= $musteri->id ?>" <button class="btn btn-danger remove" data-toggle="confirmation"><i class="icon-remove"></i></button>
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