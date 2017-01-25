<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
      <?=$title?>
    </title>

    <meta name="keywords" content="">

      <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="<?=base_url()?>assets/normal/css/font-awesome.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/normal/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/normal/css/animate.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/normal/css/owl.carousel.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/normal/css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="<?=base_url()?>assets/normal/css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="<?=base_url()?>assets/normal/css/custom.css" rel="stylesheet">

    <script src="<?=base_url()?>assets/normal/js/respond.min.js"></script>

    <link rel="shortcut icon" href="favicon.png">



</head>

<body>

    <!-- *** TOPBAR ***
 _________________________________________________________ -->
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer" >
              
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                     <?php
                      if (!isset($this->session->userdata['logged_in'])) {
        
              ?>
                    <li><a href="#" data-toggle="modal" data-target="#login-modal">Giriş</a>
                    </li>
                     <li><a href="<?= base_url()?>normal/kayitol">Kayıt Ol</a>
                    </li>
                      <?php } else{?>  
                    <li style='color:white;'>Hoşgeldin <b><?=$this->session->userdata['logged_in']['ad'] . " ".$this->session->userdata['logged_in']['soyad'] ?></b>
                    </li>
                     <li><a href="<?= base_url()?>normal/giris/cikisyap">Çıkış</a>
                    </li>
                      <?php } ?>
                    <li><a href="<?= base_url()?>normal/Hakkimizda">Hakkımızda</a>      
                    </li>
                    <li><a href="<?= base_url()?>normal/Iletisim">İletişim</a>
                    </li>
                   
                    <li><a href="<?= base_url()?>normal/Sorular">Sık Sorulan Sorular</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Müşteri Giriş</h4>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url()?>normal/giris/girisyap" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="musteriGirisMail" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="musteriGirisParola" placeholder="Parola">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Giriş Yap</button>
                            </p>

                        </form>
                        <p class="text-center">
                            <a href="<?= base_url()?>normal/kayitol">Kayıt Ol</a>
                         </p>

                    </div>
                </div>
            </div>
        </div>

    </div>

