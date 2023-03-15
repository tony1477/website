<!--== Start Page Header Area ==-->
<div class="page-header-area bg-img-news" data-bg="<?=BASE_URL?>public/assets/img/bod.jpg" style="background-position: bottom;">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-inner">
                    <div class="page-header-content">
                        <!-- <h2>KNOW ABOUT BUSINEX THE ULTIMATE TEAM</h2> -->
                        <!-- <p>Businex always try to provide the best Business Solutions for Clinets
                            to grow up their Business very sharply and smoothly.</p> -->
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
                <img class="w-100 h-100 rounded" src="<?=BASE_URL?>public/assets/img/team/<?=$row['profilephoto']?>" alt="">
            </div>
        </div>
        </div>
    </div>
</div>
<?php endforeach;?>
<!-- <div class="modal fade modal-director" id="wwModal" role="dialog" aria-hidden="true" aria-labelledby="exampleModalToggleLabel">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
        <div class="modal-body p-0 d-flex">
            <div class="detail">
                <h3 >Corporate Service Director</h3>
                <h5 class="mb-lg-4 mb-3 name ">Widiyati Wilian</h5>
                <p>Lahir pada tahun 1974. Erry Wilian merupakan Founder dari Wilian Perkasa Group sejak tahun 2006. Saat ini, beliau juga menjabat sebagai Managing Director di Wilian Perkasa Group. Sebelumnya, sempat menjalani beberapa usaha , dimulai dari Inter Chemical dibidang water treatment pada tahun 1999. Selanjutnya join dengan partner dibidang trading sparepart dan kontraktor pabrik di tahun 2005 hingga 2006.Di tahun yang sama juga mendirikan PT Surya Palma Sejahtera usaha dibidang perkebunan kelapa sawit, dan di tahun 2012 ekpansi bisnis dengan mendirikan CV Tani Sejahtera Perkasa. Tahun 2016 beliau mulai membangun pabrik kelapa sawit pertama dengan nama PT Libo Sawit Perkasa, dan PT Semunai Sawit Perkasa. Tahun 2019 Beliau mulai melakukan managing group dengan mendirikan Wilian Perkasa Group.</p>
            </div>
            <div class="pict">
                <img class="w-100 h-100 rounded" src="<?=BASE_URL?>public/assets/img/team/02.jpg" alt="Saud Usman Nasution">
            </div>
        </div>
        </div>
    </div>
</div>
<div class="modal fade modal-director" id="srModal" role="dialog" aria-hidden="true" aria-labelledby="exampleModalToggleLabel">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
        <div class="modal-body p-0 d-flex">
            <div class="detail">
                <h3 >Production Mill Controller</h3>
                <h5 class="mb-lg-4 mb-3 name ">Suresh A/L Sugoomaran</h5>
                <p>Lahir pada tahun 1974. Erry Wilian merupakan Founder dari Wilian Perkasa Group sejak tahun 2006. Saat ini, beliau juga menjabat sebagai Managing Director di Wilian Perkasa Group. Sebelumnya, sempat menjalani beberapa usaha , dimulai dari Inter Chemical dibidang water treatment pada tahun 1999. Selanjutnya join dengan partner dibidang trading sparepart dan kontraktor pabrik di tahun 2005 hingga 2006.Di tahun yang sama juga mendirikan PT Surya Palma Sejahtera usaha dibidang perkebunan kelapa sawit, dan di tahun 2012 ekpansi bisnis dengan mendirikan CV Tani Sejahtera Perkasa. Tahun 2016 beliau mulai membangun pabrik kelapa sawit pertama dengan nama PT Libo Sawit Perkasa, dan PT Semunai Sawit Perkasa. Tahun 2019 Beliau mulai melakukan managing group dengan mendirikan Wilian Perkasa Group.</p>
            </div>
            <div class="pict">
                <img class="w-100 h-100 rounded" src="<?=BASE_URL?>public/assets/img/team/03.jpg" alt="Saud Usman Nasution">
            </div>
        </div>
        </div>
    </div>
</div>
<div class="modal fade modal-director" id="prModal" role="dialog" aria-hidden="true" aria-labelledby="exampleModalToggleLabel">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
        <div class="modal-body p-0 d-flex">
            <div class="detail">
                <h3 >Head of Internal Audit & Certification Compliance</h3>
                <h5 class="mb-lg-4 mb-3 name ">Purwantoro</h5>
                <p>Lahir pada tahun 1974. Erry Wilian merupakan Founder dari Wilian Perkasa Group sejak tahun 2006. Saat ini, beliau juga menjabat sebagai Managing Director di Wilian Perkasa Group. Sebelumnya, sempat menjalani beberapa usaha , dimulai dari Inter Chemical dibidang water treatment pada tahun 1999. Selanjutnya join dengan partner dibidang trading sparepart dan kontraktor pabrik di tahun 2005 hingga 2006.Di tahun yang sama juga mendirikan PT Surya Palma Sejahtera usaha dibidang perkebunan kelapa sawit, dan di tahun 2012 ekpansi bisnis dengan mendirikan CV Tani Sejahtera Perkasa. Tahun 2016 beliau mulai membangun pabrik kelapa sawit pertama dengan nama PT Libo Sawit Perkasa, dan PT Semunai Sawit Perkasa. Tahun 2019 Beliau mulai melakukan managing group dengan mendirikan Wilian Perkasa Group.</p>
            </div>
            <div class="pict">
                <img class="w-100 h-100 rounded" src="<?=BASE_URL?>public/assets/img/team/04.jpg" alt="Saud Usman Nasution">
            </div>
        </div>
        </div>
    </div>
</div>
<div class="modal fade modal-director" id="lyModal" role="dialog" aria-hidden="true" aria-labelledby="exampleModalToggleLabel">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
        <div class="modal-body p-0 d-flex">
            <div class="detail">
                <h3 >Head Of Finance and Accounting</h3>
                <h5 class="mb-lg-4 mb-3 name ">Lainy</h5>
                <p>Lahir pada tahun 1974. Erry Wilian merupakan Founder dari Wilian Perkasa Group sejak tahun 2006. Saat ini, beliau juga menjabat sebagai Managing Director di Wilian Perkasa Group. Sebelumnya, sempat menjalani beberapa usaha , dimulai dari Inter Chemical dibidang water treatment pada tahun 1999. Selanjutnya join dengan partner dibidang trading sparepart dan kontraktor pabrik di tahun 2005 hingga 2006.Di tahun yang sama juga mendirikan PT Surya Palma Sejahtera usaha dibidang perkebunan kelapa sawit, dan di tahun 2012 ekpansi bisnis dengan mendirikan CV Tani Sejahtera Perkasa. Tahun 2016 beliau mulai membangun pabrik kelapa sawit pertama dengan nama PT Libo Sawit Perkasa, dan PT Semunai Sawit Perkasa. Tahun 2019 Beliau mulai melakukan managing group dengan mendirikan Wilian Perkasa Group.</p>
            </div>
            <div class="pict">
                <img class="w-100 h-100 rounded" src="<?=BASE_URL?>public/assets/img/team/04.jpg" alt="Saud Usman Nasution">
            </div>
        </div>
        </div>
    </div>
</div> -->
<div class="team-page-area-wrapper bg-offwhite sp-y sm-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-lg-2 order-lg-0 order-md-0 order-md-0">
                <?php require_once('sidebar.php')?>
            </div>
            <div class="col-md-9 col-lg-10 order-1">
                <div class="about-content ms-0">
                    <h2 class="text-center">Manajemen Wilian Perkasa</h2>
                    <div class="responsive-container-block outer-container">
                        <div class="responsive-container-block inner-container">
                            <div class="responsive-container-block card-container">
                            <div class="btn">
                                <div class="swiper-button-nexts">
                                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Path.svg" class="arrow-right" />
                                </div>
                                <div class="swiper-button-prevs">
                                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Path.svg" class="arrow-left" />
                                </div>
                            </div>
                            <div class="swiper-container team-swiper">
                                <div class="swiper-wrapper">
                                    <?php 
                                    $datas = $data['data'];
                                    foreach($datas as $row) : 
                                    $name = str_replace(' ','',$row['profilename']); 
                                    ?>
                                    <div class="swiper-slide">
                                        <div class="card">
                                        <a class="" data-bs-toggle="modal" href="#<?=$name?>Modal">
                                        <img src="<?=BASE_URL?>public/assets/img/team/<?=$row['profilephoto']?>" alt="Founder" class="team-member-image" role="button"/>
                                        <p class="text-blk name text-center"><?=$row['profilename']?></p>
                                        <p class="text-blk text-center"><?=$row['profileposition']?></p>
                                        </a>
                                        </div>
                                    </div>
                                    <?php endforeach;?>
                                    <!-- <div class="swiper-slide">
                                        <div class="card">
                                        <a href="#wwModal" class="" data-bs-toggle="modal">
                                        <img src="<?=BASE_URL?>public/assets/img/team/02.jpg" alt="Founder" class="team-member-image" />
                                        <p class="text-blk name  text-center">Widiyati Wilian</p>
                                        <p class="text-blk text-center">Corporate Service Director</p>
                                        </a>    
                                    </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card">
                                        <a href="#srModal" class="" data-bs-toggle="modal">
                                        <img src="<?=BASE_URL?>public/assets/img/team/03.jpg" alt="Founder" class="team-member-image" />
                                        <p class="text-blk name text-center">Suresh A/L Sugoomaran</p>
                                        <p class="text-blk text-center">Production Mill Controller</p>
                                        </a>    
                                    </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card">
                                        <a href="#prModal" class="" data-bs-toggle="modal">
                                        <img src="<?=BASE_URL?>public/assets/img/team/04.jpg" alt="Founder" class="team-member-image" />
                                        <p class="text-blk name text-center">Purwantoro</p>
                                        <p class="text-blk text-center">Head of IA & CC</p>
                                        </a>    
                                    </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card">
                                        <a href="#lyModal" class="" data-bs-toggle="modal">
                                        <img src="<?=BASE_URL?>public/assets/img/team/05.jpg" alt="Founder" class="team-member-image" />
                                        <p class="text-blk name text-center">Lainy</p>
                                        <p class="text-blk text-center">Head of Fin & Acc</p>
                                        </a>    
                                    </div> -->
                                    </div>
                                </div>
                                <br /><br />
                                <!-- <div class="swiper-pagination"></div> -->
                            </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Team Area Wrapper ==-->

<!--== Start Fun Fact Area Wrapper ==-->
<div class="fun-fact-area sm-top parallax" data-parallax-speed="0.70" data-bg="<?=BASE_URL?>public/assets/img/fun-fact-bg.webp">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="brand-logo-content slick-row-20">
                    <div class="brand-logo-item">
                        <a href="#"><img src="<?=BASE_URL?>public/assets/img/brand-logo/ssp.png" alt="WPG-Logo" style="width: 128px;"/></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="<?=BASE_URL?>public/assets/img/brand-logo/libo.png" alt="WPG-Logo" style="width: 128px;"/></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="<?=BASE_URL?>public/assets/img/brand-logo/tsp.png" alt="WPG-Logo" style="width: 128px;"/></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="<?=BASE_URL?>public/assets/img/brand-logo/sps.png" alt="WPG-Logo" style="width: 128px;"/></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="<?=BASE_URL?>public/assets/img/brand-logo/kbp.png" alt="WPG-Logo" style="width: 128px;"/></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="<?=BASE_URL?>public/assets/img/brand-logo/wtp.png" alt="WPG-Logo" style="width: 128px;"/></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Fun Fact Area Wrapper ==-->

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
        slidesPerView: 4,
        spaceBetween: 40
      }
    }
  });  

  
</script>
EOF;
?>