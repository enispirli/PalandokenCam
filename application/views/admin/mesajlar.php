<div id="content" class>
    <div class="container-fluid outer">
        <div class="row-fluid">
            <div class="span-12 inner">
                <div class="box dark">
                    <header><h5>MESAJLAR</h5></header>
                    <div class="accordion-body collapse in body">
                        <div id="actionTable" class="body collapse in">
                            <table class="table table-bordered responsive">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Adı</th>
                                        <th>Soyadı</th>
                                        <th>Email</th>
                                        <th>Konu</th>
                                        <th>Mesaj</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($mesajlar as $mesaj) { ?>
                                        <tr> 
                                            <td><?= $mesaj->id ?></td>
                                            <td><?= $mesaj->ad ?></td>
                                            <td><?= $mesaj->soyad ?></td>
                                            <td><?= $mesaj->email ?></td>
                                            <td><?= $mesaj->konu ?></td>

                                            <td>
                                                <a href="<?= base_url(); ?>admin/Mesajlar/oku/<?= $mesaj->id ?>">
                                                    <?php if ($mesaj->okundu == 1) { ?>
                                                        <button class="btn btn-success" type="button">
                                                            <i class="btn btn-success">Okundu</i></button>

                                                    <?php } else { ?>
                                                        <button class="btn btn-danger" type="button">
                                                            <i class="btn btn-danger">Oku</i></button>
                                                    <?php } ?>

                                                </a>
                                                <a href="<?= base_url(); ?>admin/Mesajlar/sil/<?= $mesaj->id ?>" <button class="btn btn-danger remove" data-toggle="confirmation"><i class="icon-remove"></i></button>

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