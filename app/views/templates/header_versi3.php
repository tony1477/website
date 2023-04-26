<!DOCTYPE html>
<html class="no-js" lang="<?=($_SESSION['lang']=='id' ? 'id' : 'en')?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Wilian Perkasa <?=($data['title'] != '' ? '| '.$data['title'] : '')?></title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="<?=BASE_URL?>public/assets/img/favicon.png" type="image/x-icon"/>

    <!--== Google Fonts ==-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>

    <!--== All Magnific Popup CSS ==-->
    <link href="<?=BASE_URL?>public/assets/css/magnific-popup.min.css" rel="stylesheet"/>
    <!--== All Animate CSS ==-->
    <link href="<?=BASE_URL?>public/assets/css/animate.min.css" rel="stylesheet"/>
    <link href="<?=BASE_URL?>public/assets/css/animate2.min.css" rel="stylesheet"/>
    <!--== All FontAwesome CSS ==-->
    <link href="<?=BASE_URL?>public/assets/css/font-awesome.min.css" rel="stylesheet"/>
    <!--== All Material Icons CSS ==-->
    <link href="<?=BASE_URL?>public/assets/css/materialdesignicons.min.css" rel="stylesheet"/>
    <!--== All Helper CSS ==-->
    <link href="<?=BASE_URL?>public/assets/css/helper.min.css" rel="stylesheet"/>
    <!--== All Revolution CSS ==-->
    <link href="<?=BASE_URL?>public/assets/css/settings.css" rel="stylesheet"/>
    <!--== All Slicknav CSS ==-->
    <link href="<?=BASE_URL?>public/assets/css/slicknav.min.css" rel="stylesheet"/>
    <!--== All Timeline CSS ==-->
    <link href="<?=BASE_URL?>public/assets/css/timeline.css" rel="stylesheet"/>
    <!--== All Slick Slider CSS ==-->
    <link href="<?=BASE_URL?>public/assets/css/slick.min.css" rel="stylesheet"/>
    <!--== All BootStrap CSS ==-->
    <link href="<?=BASE_URL?>public/assets/css/bootstrap.min.css" rel="stylesheet"/>
    <!--== Main Style CSS ==-->
    <link href="<?=BASE_URL?>public/assets/css/style_versi3.css" rel="stylesheet"/>
    <!-- TimeLine CSS -->
    <link href="<?=BASE_URL?>public/assets/css/timeline.style.css" rel="stylesheet"/>

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php $url= $_SERVER['REQUEST_URI']; $arr = explode('/',$url); 
    if(end($arr)=='photo') { ?>
    <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen"> -->
    <link rel="stylesheet" href="<?=BASE_URL?>public/assets/css/jquery.fancybox.min.css" media="screen">
    <link href="<?=BASE_URL?>public/assets/css/gallery.css" rel="stylesheet" />
    <?php } 
    if(end($arr)=='bod') { ?>
    <link href="<?=BASE_URL?>public/assets/css/slider.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <?php } 
    if(end($arr)=='structureorg') { ?>
    <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen"> -->
    <script src="https://unpkg.com/fast-image-zoom@7.0.1/dist/fast-image-zoom.js"></script>
    <script>
    imageZoom()
    </script>
    <?php }
    if(end($arr)=='contact'){ ?>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <?php } ?>
</head>
<?php require_once('body_versi3.php');?>