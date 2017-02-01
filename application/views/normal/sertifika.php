
<div class="col-md-9">




    <div class="row" id="productMain">
        <div class="col-sm-12">
            <div id="mainImage">
                <img src="<?= base_url() ?>uploads/logop.jpg" alt="" class="img-responsive">
            </div>



        </div>

    </div>


    <div class="box" id="details">
        <div class="sertifikalar">
            <p>
            <h4>SERTİFİKALARIMIZ</h4>
            <?php foreach ($sertifikalar as $sertifika) { ?>
                <p>
                    <a href="<?= base_url() ?>uploads/<?=$sertifika->dosya_ismi?>">
                        <img src="<?= base_url() ?>uploads/<?=$sertifika->yol?>"> &nbsp; &nbsp; &nbsp;
                         <?=$sertifika->isim?>
                        
                </a>
            </p>
            <hr style="border-color: gray">

            <?php } ?>
        </div>

        <div class="social">
            <h4>Paylaş</h4>


            <p>
                <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
            </p>
        </div>
    </div>



</div>