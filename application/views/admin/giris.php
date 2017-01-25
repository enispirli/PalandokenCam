<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="<?= base_url() ?>assets/admin/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/admin/css/login.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/admin/magic/magic.css">
    </head>
    <body>
        <div class="container">
            <div class="text-center">
                <img src="<?= base_url() ?>assets/admin/img/logo.png" alt="Metis Logo">
            </div>
            <div class="tab-content">
                <div id="login" class="tab-pane active">
                    <form action="<?= base_url()?>admin/Login/girisyap" class="form-signin" method="post">
                        <p class="muted text-center">
                            Kullanıcı Adı ve Parola Giriş Yapınız
                        </p>
                        <input type="text" placeholder="Kullanıcı Adı" name="kullaniciadi" class="input-block-level">
                        <input type="password" placeholder="Parola" name="parola" class="input-block-level">
                        <button class="btn btn-large btn-primary btn-block" type="submit">giriş</button>
                    </form>
                </div>
              
               
            </div>
       

        </div> <!-- /container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?= base_url() ?>assets/admin/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script type="text/javascript" src="<?= base_url() ?>assets/admin/js/vendor/bootstrap.min.js"></script>

        <script>
            $('.inline li > a').click(function() {
                var activeForm = $(this).attr('href') + ' > form';
                //console.log(activeForm);
                $(activeForm).addClass('magictime swap');
                //set timer to 1 seconds, after that, unload the magic animation
                setTimeout(function() {
                    $(activeForm).removeClass('magictime swap');
                }, 1000);
            });

        </script>
    </body>
</html>
