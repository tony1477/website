<!--== Start Page Header Area ==-->
<div class="page-header-area bg-img-news" data-bg="<?=BASE_URL?>public/assets/img/bod.jpg" style="background-position: bottom;">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-start">
                    <div class="page-header-content">
                        <h2 style="text-transform:uppercase; margin-top:5rem"><?=$this->getContent('bod-topbar-title')?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->

<!--== Start Team Area Wrapper ==-->
<?php 
    $datas = $data['data'];
    foreach($datas as $row) : 
    $name = str_replace(' ','',$row['profilename']);
?>
<div class="modal fade modal-director" id="<?=$name?>Modal" role="dialog" aria-hidden="true" aria-labelledby="exampleModalToggleLabel">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
        <div class="modal-body p-0 d-flex">
            <div class="detail">
                <!-- <h3 ><?php //$row['profileposition']?></h3>
                <h5 class="mb-lg-4 mb-3 name "><?php //$row['profilename']?></h5> -->
                <?=$row['profiledesc']?>
            </div>
            <div class="pict">
                <div class="card" style="margin-right:1.5rem; margin-top:1.4rem">
                    <img class="card-img-top rounded-end" src="<?=BASE_URL?>public/assets/img/team/<?=$row['profilephoto']?>" alt="<?=$row['profileposition']?> - <?=$row['profilename']?>" />
                    <div class="card-body">
                        <h3 class="card-text text-center"><?=$row['profilename']?></h3>
                        <h5 class="text-center"><?=$row['profileposition']?></h5>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<?php endforeach;?>
<div class="team-page-area-wrapper bg-offwhite sp-y bg-overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 order-lg-0 order-md-3">
                <?php require_once('sidebar.php')?>
            </div>
            <div class="col-md-6 col-lg-9">
                <div class="about-content ms-0">
                    <div class="row">
                        <div class="col-lg-7 col-md-6 left order-md-1 order-2">
                            <div class="position-relative h-100" style="text-align: justify;">
                                <?=$this->getContentDb('about-bod-content')?>
                            </div>
                        </div>
                        <div class="animate-box col-lg-5 col-md-6 px-md-3 px-0 right order-md-2 order-1" data-animate-effect="fadeIn">
                            <img alt="" class="w-100 rounded shadow" src="<?=BASE_URL?>public/assets/img/team/2Ver2.jpg">
                        </div>
                    </div>
                </div> 
            </div>
            <div class="col-lg-3"></div>
            <div class="col-lg-9">
                <div class="animate-box profile line-board"></div>
                <div class="profile board-title">
                    <h3 class="animate-box"><?=$this->getContent('about-bod-management')?></h3>
                </div>
                <div class="responsive-container-block outer-container">
                    <div class="responsive-container-block inner-container">
                        <div class="animate-box responsive-container-block card-container">
                            <div class="btn">
                                <div class="swiper-button-nexts" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-ec04e6c9fde0d3c0">
                                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Path.svg" class="arrow-right">
                                </div>
                                <div class="swiper-button-prevs" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-ec04e6c9fde0d3c0">
                                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Path.svg" class="arrow-left">
                                </div>
                            </div>
                            <div class="swiper-container team-swiper">
                                <div class="swiper-wrapper">
                                    <?php 
                                    $datas = $data['data'];
                                    foreach($datas as $row) : 
                                    $name = str_replace(' ','',$row['profilename']); 
                                    ?>
                                    <div class="animate-box swiper-slide" data-animate-effect="fadeIn">
                                        <div class="card shadow">
                                        <a class="" data-bs-toggle="modal" href="#<?=$name?>Modal">
                                        <img src="<?=BASE_URL?>public/assets/img/team/<?=$row['profilephoto']?>" alt="Founder" class="team-member-image" role="button"/>
                                        <div class="mt-bod" style="height: 120px;">
                                            <p class="text-blk name text-center"><?=$row['profilename']?></p>
                                            <p class="text-blk text-center"><?=$row['profileposition']?></p>
                                        </div>
                                        </a>
                                        </div>
                                    </div>
                                    <?php endforeach;?>
                                    </div>
                                </div>
                                <br /><br />
                                <!-- <div class="swiper-pagination"></div> -->
                            </div>
                            <br><br>
                            <!-- <div class="swiper-pagination"></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Team Area Wrapper ==-->


<?php
$scriptfooter = <<<EOF
<script type="text/javascript">
var swiper = new Swiper(".team-swiper", {
    navigation: {
      nextEl: ".swiper-button-nexts",
      prevEl: ".swiper-button-prevs",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    loop: true,
    slidesPerView: 1,
    spaceBetween: 10,
    // Responsive breakpoints
    breakpoints: {
      250: {
        slidesPerView: 1.2,
        spaceBetween: 80
      },
      // when window width is >= 320px
      300: {
        slidesPerView: 1.2,
        spaceBetween: 0
      },
      // when window width is >= 480px
      400: {
        slidesPerView: 1.5,
        spaceBetween: 20
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 2,
        spaceBetween: 40
      },
      840: {
        slidesPerView: 3,
        spaceBetween: 40
      },
      1150: {
        slidesPerView: 3,
        spaceBetween: 40
      }
    }
  });  

  
</script>
EOF;
?>