<div class="page-header-area bg-img-news" data-bg="<?=BASE_URL?>public/assets/img/album/lounge.jpg" style="background-position:top -450px center">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-start">
                    <div class="page-header-content" >
                        <h2><?=$this->getContent('gallery')?></h2>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about-area-wrapper sm-top">
<div class="container page-top">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-xs-6 thumb py-3">
                <!-- <a href="<?=BASE_URL?>public/assets/img/album/slider-1.jpg" class="fancybox" rel="ligthbox" title="GEDUNG WILIAN PERKASA"> -->
                    <img src="<?=BASE_URL?>public/assets/img/album/slider-1.jpg" class="rounded shadow zoom-img-fluid " alt="">   
                <!-- </a> -->
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb py-3">
                <!-- <a href="<?=BASE_URL?>public/assets/img/album/slider-2.jpg" class="fancybox" rel="ligthbox" title="KICK OFF MEETING 2022"> -->
                    <img src="<?=BASE_URL?>public/assets/img/album/slider-2.jpg" class="rounded shadow zoom-img-fluid " alt="">   
                <!-- </a> -->
            </div>
            
            <div class="col-lg-3 col-md-4 col-xs-6 thumb py-3">
                <!-- <a href="<?=BASE_URL?>public/assets/img/album/slider-3.jpg" class="fancybox" rel="ligthbox" title="CORE VALUE WILIAN PERKASA"> -->
                    <img src="<?=BASE_URL?>public/assets/img/album/slider-3.jpg" class="rounded shadow zoom-img-fluid " alt="">
                <!-- </a> -->
            </div>
            
            <div class="col-lg-3 col-md-4 col-xs-6 thumb py-3">
                <!-- <a href="<?=BASE_URL?>public/assets/img/album/slider-4.jpg" class="fancybox" rel="ligthbox" title="BUAH SAWIT DARI KEBUN WILIAN PERKASA"> -->
                    <img src="<?=BASE_URL?>public/assets/img/album/slider-7.jpg" class="rounded shadow zoom-img-fluid " alt="">   
                <!-- </a> -->
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb py-3">
                <!-- <a href="<?=BASE_URL?>public/assets/img/album/slider-5.jpg" class="fancybox" rel="ligthbox" title="NOBLE CAFE AT WILIAN PERKASA HEAD OFFICE"> -->
                    <img src="<?=BASE_URL?>public/assets/img/album/slider-5.jpg" class="rounded shadow zoom-img-fluid " alt="">   
                <!-- </a> -->
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb py-3">
                <!-- <a href="<?=BASE_URL?>public/assets/img/album/slider-6.jpg" class="fancybox" rel="ligthbox" title="ACARA BUKA BERSAMA & SANTUNAN ANAK YATIM"> -->
                    <img src="<?=BASE_URL?>public/assets/img/album/slider-6.jpg" class="rounded shadow zoom-img-fluid " alt="">   
                <!-- </a> -->
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb py-3">
                <!-- <a href="<?=BASE_URL?>public/assets/img/album/slider-7.jpg" class="fancybox" rel="ligthbox" title="RUANG MEETING AT WILIAN PERKASA"> -->
                    <img src="<?=BASE_URL?>public/assets/img/album/slider-7.jpg" class="rounded shadow zoom-img-fluid " alt="">   
                <!-- </a> -->
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb py-3">
                <!-- <a href="<?=BASE_URL?>public/assets/img/album/slider-8.jpg" class="fancybox" rel="ligthbox" title="STORAGE TANK PABRIK KELAPA SAWIT"> -->
                    <img src="<?=BASE_URL?>public/assets/img/album/slider-8.jpg" class="rounded shadow zoom-img-fluid " alt="">   
                <!-- </a> -->
            </div>
       </div>
</div>

<div class="sm-top-wt"></div>
</div>
<?php
$scriptfooter = <<<EOF
<script type="text/javascript">
$(document).ready(function(){
    $(".fancybox").fancybox({
          openEffect: "none",
          closeEffect: "none",
          helpers : {
                title : {
                    type : 'over'
                },
          },
      });
      
      $(".zoom").hover(function(){
          
          $(this).addClass('transition');
      }, function(){
          
          $(this).removeClass('transition');
      });
  });
</script>
EOF;
