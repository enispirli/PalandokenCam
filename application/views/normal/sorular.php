<?php foreach ($sorular as $soru) { ?>
    <div class="panel-group" id="accordion">

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title">

                    <a data-toggle="collapse" data-parent="#accordion" href="#<?= $soru->id ?>">
                        <?= $soru->soru ?>

                    </a>

                </h4>
            </div>
            <div id="<?= $soru->id ?>" class="panel-collapse collapse">
                <div class="panel-body">
                    <p><?= $soru->cevap ?></p>

                </div>
            </div>
        <?php } ?>