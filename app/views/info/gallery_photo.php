<div class="container page-top">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="<?=BASE_URL?>public/assets/img/album/DJI_0043.jpg" class="fancybox" rel="ligthbox" title="GEDUNG WILIAN PERKASA">
                    <img src="<?=BASE_URL?>public/assets/img/album/DJI_0043.jpg" class="zoom img-fluid " alt="">   
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="<?=BASE_URL?>public/assets/img/album/DSC01462.jpg" class="fancybox" rel="ligthbox" title="KICK OFF MEETING 2022">
                    <img src="<?=BASE_URL?>public/assets/img/album/DSC01462.jpg" class="zoom img-fluid " alt="">   
                </a>
            </div>
            
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="<?=BASE_URL?>public/assets/img/album/DSC06270.jpg" class="fancybox" rel="ligthbox" title="CORE VALUE WILIAN PERKASA">
                    <img src="<?=BASE_URL?>public/assets/img/album/DSC06270.jpg" class="zoom img-fluid " alt="">
                </a>
            </div>
            
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="<?=BASE_URL?>public/assets/img/album/fall-g8f9be5df9_1920.png" class="fancybox" rel="ligthbox" title="BUAH SAWIT DARI KEBUN WILIAN PERKASA">
                    <img src="<?=BASE_URL?>public/assets/img/album/fall-g8f9be5df9_1920.png" class="zoom img-fluid " alt="">   
                </a>
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="<?=BASE_URL?>public/assets/img/album/IMG_0997.jpg" class="fancybox" rel="ligthbox" title="NOBLE CAFE AT WILIAN PERKASA HEAD OFFICE">
                    <img src="<?=BASE_URL?>public/assets/img/album/IMG_0997.jpg" class="zoom img-fluid " alt="">   
                </a>
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="<?=BASE_URL?>public/assets/img/album/IMG_4830.JPG" class="fancybox" rel="ligthbox" title="ACARA BUKA BERSAMA & SANTUNAN ANAK YATIM">
                    <img src="<?=BASE_URL?>public/assets/img/album/IMG_4830.JPG" class="zoom img-fluid " alt="">   
                </a>
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="<?=BASE_URL?>public/assets/img/album/IMG_7081.jpg" class="fancybox" rel="ligthbox" title="RUANG MEETING AT WILIAN PERKASA">
                    <img src="<?=BASE_URL?>public/assets/img/album/IMG_7081.jpg" class="zoom img-fluid " alt="">   
                </a>
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="<?=BASE_URL?>public/assets/img/album/SON00002.jpg" class="fancybox" rel="ligthbox" title="STORAGE TANK PABRIK KELAPA SAWIT">
                    <img src="<?=BASE_URL?>public/assets/img/album/SON00002.jpg" class="zoom img-fluid " alt="">   
                </a>
            </div>
       </div>
</div>

<div class="sm-top-wt"></div>
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
