<div class="col-md-9">




    <div class="row" id="productMain">
        <div class="col-sm-12">
            <div id="mainImage">
                <img src="<?= base_url() ?>uploads/<?=$referans->yol?>" alt="" class="img-responsive">
            </div>



        </div>

    </div>


    <div class="box" id="details">
        <div class="sertifikalar">
            <p>
            <h4> <?=$referans->isim?> </h4>
        
                <p>
                   
                    <?=$referans->icerik?>
                </a>
            </p>

     
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