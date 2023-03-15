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
<div class="team-page-area-wrapper bg-offwhite sp-y">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <aside class="sidebar-area-wrapper mt-md-80 mt-sm-60">
                    <!-- Start Single Sidebar Wrap -->
                    <div class="single-sidebar-item-wrap">
                        <!-- <h3 class="sidebar-title">NAVIGATION</h3> -->
                        <div class="sidebar-body">
                            <ul class="sidebar-list">
                                <li><a href="http://localhost/webs/about/profile" class="">Profil Perusahaan</a></li>
                                <li><a href="http://localhost/webs/about/vision" class="">Visi - Misi , Nilai Luhur</a></li>
                                <li><a href="http://localhost/webs/about/strategic" class="">Strategi Bisnis</a></li>
                                <li><a href="http://localhost/webs/about/bod" class="active">Profil Manajemen</a></li>
                                <li><a href="http://localhost/webs/about/structureorg" class="">Struktur Organisasi</a></li>
                                <li><a href="http://localhost/webs/about/milestone" class="">Sejarah Penting</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Sidebar Wrap -->
                </aside>
            </div>
            <div class="col-md-6 col-lg-9">
                <div class="about-content ms-0">
                    <div class="row">
                        <div class="col-lg-7 col-md-6 left order-md-1 order-2">
                            <div class="position-relative h-100">
                                <div class="w-title mb-md-0 mb-4"><!---->
                                    <h2 class="fw-400 mb-0">Profil Manajemen</h2>
                                </div>
                                <div class="text-justify">
                                    <div class="detail">
                                        <p>Seluruh anggota Dewan, selain Komisaris Utama yang berafiliasi, merupakan profesional dengan bidang spesialis masing-masing. Dewan Komisaris selalu memonitor penerapan GCG secara berkelanjutan, memberikan masukan serta mendorong Direksi untuk dapat mencapai kinerja operasional termasuk upaya optimal dalam meningkatkan daya saing perusahaan melalui pencapaian produktivitas yang lebih tinggi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 px-md-3 px-0 right order-md-2 order-1">
                            <img alt="" class="w-100 rounded" src="https://cms.sampoernaagro.com/storage/files/shares/about-us/Organisationstructure1.jpg">
                        </div>
                    </div>
                </div> 
            </div>
            <div class="col-lg-3"></div>
            <div class="col-lg-9">
                <div class="profile line-board"></div>
                <div class="profile board-title">
                    <h3>Dewan Direksi</h3>
                </div>
                <div class="responsive-container-block outer-container">
                    <div class="responsive-container-block inner-container">
                        <div class="responsive-container-block card-container">
                            <div class="btn">
                                <div class="swiper-button-nexts" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-ec04e6c9fde0d3c0">
                                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Path.svg" class="arrow-right">
                                </div>
                                <div class="swiper-button-prevs" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-ec04e6c9fde0d3c0">
                                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Path.svg" class="arrow-left">
                                </div>
                            </div>
                            <div class="swiper-container team-swiper swiper-initialized swiper-horizontal swiper-pointer-events">
                                <div class="swiper-wrapper" id="swiper-wrapper-ec04e6c9fde0d3c0" aria-live="polite" style="transform: translate3d(-1158px, 0px, 0px); transition-duration: 0ms;">
                                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="1" role="group" aria-label="2 / 5" style="width: 153px; margin-right: 40px;">
                                        <div class="card">
                                            <a class="" data-bs-toggle="modal" href="#WidiyatiWilianModal">
                                            <img src="http://localhost/webs/public/assets/img/team/02.jpg" alt="Founder" class="team-member-image" role="button">
                                            <p class="text-blk name text-center">Widiyati Wilian</p>
                                            <p class="text-blk text-center">Corporate Service Director</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="2" role="group" aria-label="3 / 5" style="width: 153px; margin-right: 40px;">
                                        <div class="card">
                                            <a class="" data-bs-toggle="modal" href="#SureshALSugoomaranModal">
                                            <img src="http://localhost/webs/public/assets/img/team/02.jpg" alt="Founder" class="team-member-image" role="button">
                                            <p class="text-blk name text-center">Suresh AL Sugoomaran</p>
                                            <p class="text-blk text-center">Production Mill Controller</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="3" role="group" aria-label="4 / 5" style="width: 153px; margin-right: 40px;">
                                        <div class="card">
                                            <a class="" data-bs-toggle="modal" href="#PurwantoroModal">
                                            <img src="http://localhost/webs/public/assets/img/team/02.jpg" alt="Founder" class="team-member-image" role="button">
                                            <p class="text-blk name text-center">Purwantoro</p>
                                            <p class="text-blk text-center">Head Of IA &amp; CC</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" role="group" aria-label="5 / 5" style="width: 153px; margin-right: 40px;">
                                        <div class="card">
                                            <a class="" data-bs-toggle="modal" href="#LainyModal">
                                            <img src="http://localhost/webs/public/assets/img/team/02.jpg" alt="Founder" class="team-member-image" role="button">
                                            <p class="text-blk name text-center">Lainy</p>
                                            <p class="text-blk text-center">Head of Fin &amp; Acc</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-swiper-slide-index="0" role="group" aria-label="1 / 5" style="width: 153px; margin-right: 40px;">
                                        <div class="card">
                                            <a class="" data-bs-toggle="modal" href="#ErryWilianModal">
                                            <img src="http://localhost/webs/public/assets/img/team/pak-md.jpg" alt="Founder" class="team-member-image" role="button">
                                            <p class="text-blk name text-center">Erry Wilian</p>
                                            <p class="text-blk text-center">Managing Director</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="1" role="group" aria-label="2 / 5" style="width: 153px; margin-right: 40px;">
                                        <div class="card">
                                            <a class="" data-bs-toggle="modal" href="#WidiyatiWilianModal">
                                            <img src="http://localhost/webs/public/assets/img/team/02.jpg" alt="Founder" class="team-member-image" role="button">
                                            <p class="text-blk name text-center">Widiyati Wilian</p>
                                            <p class="text-blk text-center">Corporate Service Director</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="2" role="group" aria-label="3 / 5" style="width: 153px; margin-right: 40px;">
                                        <div class="card">
                                            <a class="" data-bs-toggle="modal" href="#SureshALSugoomaranModal">
                                            <img src="http://localhost/webs/public/assets/img/team/02.jpg" alt="Founder" class="team-member-image" role="button">
                                            <p class="text-blk name text-center">Suresh AL Sugoomaran</p>
                                            <p class="text-blk text-center">Production Mill Controller</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="3" role="group" aria-label="4 / 5" style="width: 153px; margin-right: 40px;">
                                        <div class="card">
                                            <a class="" data-bs-toggle="modal" href="#PurwantoroModal">
                                            <img src="http://localhost/webs/public/assets/img/team/02.jpg" alt="Founder" class="team-member-image" role="button">
                                            <p class="text-blk name text-center">Purwantoro</p>
                                            <p class="text-blk text-center">Head Of IA &amp; CC</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-swiper-slide-index="4" role="group" aria-label="5 / 5" style="width: 153px; margin-right: 40px;">
                                        <div class="card">
                                            <a class="" data-bs-toggle="modal" href="#LainyModal">
                                            <img src="http://localhost/webs/public/assets/img/team/02.jpg" alt="Founder" class="team-member-image" role="button">
                                            <p class="text-blk name text-center">Lainy</p>
                                            <p class="text-blk text-center">Head of Fin &amp; Acc</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" role="group" aria-label="1 / 5" style="width: 153px; margin-right: 40px;">
                                        <div class="card">
                                            <a class="" data-bs-toggle="modal" href="#ErryWilianModal">
                                            <img src="http://localhost/webs/public/assets/img/team/pak-md.jpg" alt="Founder" class="team-member-image" role="button">
                                            <p class="text-blk name text-center">Erry Wilian</p>
                                            <p class="text-blk text-center">Managing Director</p>
                                            </a>
                                        </div>
                                    </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="1" role="group" aria-label="2 / 5" style="width: 153px; margin-right: 40px;">
                                        <div class="card">
                                            <a class="" data-bs-toggle="modal" href="#WidiyatiWilianModal">
                                            <img src="http://localhost/webs/public/assets/img/team/02.jpg" alt="Founder" class="team-member-image" role="button">
                                            <p class="text-blk name text-center">Widiyati Wilian</p>
                                            <p class="text-blk text-center">Corporate Service Director</p>
                                            </a>
                                        </div>
                                    </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="2" role="group" aria-label="3 / 5" style="width: 153px; margin-right: 40px;">
                                        <div class="card">
                                            <a class="" data-bs-toggle="modal" href="#SureshALSugoomaranModal">
                                            <img src="http://localhost/webs/public/assets/img/team/02.jpg" alt="Founder" class="team-member-image" role="button">
                                            <p class="text-blk name text-center">Suresh AL Sugoomaran</p>
                                            <p class="text-blk text-center">Production Mill Controller</p>
                                            </a>
                                        </div>
                                    </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="3" role="group" aria-label="4 / 5" style="width: 153px; margin-right: 40px;">
                                        <div class="card">
                                            <a class="" data-bs-toggle="modal" href="#PurwantoroModal">
                                            <img src="http://localhost/webs/public/assets/img/team/02.jpg" alt="Founder" class="team-member-image" role="button">
                                            <p class="text-blk name text-center">Purwantoro</p>
                                            <p class="text-blk text-center">Head Of IA &amp; CC</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
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