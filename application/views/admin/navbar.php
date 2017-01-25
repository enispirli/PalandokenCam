<!DOCTYPE html>
<!--[if lt IE 7]>       <html class="no-js lt-ie9 lt-ie8 lt-ie7">   <![endif]-->
<!--[if IE 7]>          <html class="no-js lt-ie9 lt-ie8">          <![endif]-->
<!--[if IE 8]>          <html class="no-js lt-ie9">                 <![endif]-->
<!--[if gt IE 8]><!--> 

<?php
if (!isset($this->session->userdata['logged_in'])) {
header("location: ".base_url(). "admin/Login");
}
?>

<html class="no-js">                        <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Dashboard</title>
        <meta name="description" content="Metis: Bootstrap Responsive Admin Theme">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/admin/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/admin/css/bootstrap-responsive.min.css">
        <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/admin/Font-awesome/css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/admin/css/style.css">
        <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/admin/css/calendar.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/admin/css/theme.css">

        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
           <script src="<?= base_url() ?>assets/admin/js/tinymce/tinymce.min.js"></script>
     <script>tinymce.init({ selector:'.tiny-editor' });</script>

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <!--[if IE 7]>
        <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/admin/Font-awesome/css/font-awesome-ie7.min.css"/>
        <![endif]-->

        <script src="<?= base_url() ?>assets/admin/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!-- BEGIN WRAP -->
        <div id="wrap">


            <!-- BEGIN TOP BAR -->
            <div id="top">
                <!-- .navbar -->
                <div class="navbar navbar-inverse navbar-static-top">
                    <div class="navbar-inner">
                        <div class="container-fluid">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <a class="brand" href="index.html">Admin Paneli</a>
                            <!-- .topnav -->
                            <div class="btn-toolbar topnav">
                              
                               
                                <div class="btn-group">
                                    <a class="btn btn-inverse" data-placement="bottom" data-original-title="Çıkış" rel="tooltip"
                                       href="<?= base_url() ?>admin/Login/cikisyap"><i class="icon-off"></i></a></div>
                            </div>
                            <!-- /.topnav -->

                        </div>
                    </div>
                </div>
                <!-- /.navbar -->
            </div>
