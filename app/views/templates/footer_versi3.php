<footer class="footer-area">
    <!-- <div class="footer-top-wrap">
        <div class="container">
            <div class="footer-top-content">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-6">
                        <h2>Get Started Today</h2>
                        <p>Businex always try to provide the best Business Solutions for Clinets to grow up their
                            Business sharply and smoothly.</p>
                    </div>
                    <div class="col-md-4 col-lg-6 text-md-end mt-sm-25">
                        <a href="contact.html" class="btn-outline">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="footer-widget-area">
        <div class="container-fluid">
            <div class="row mtn-40 ">
                <div class="col-md-6 col-lg-4 order-4 order-lg-0 order-md-3 ">
                    <div class="widget-item">
                        <div class="about-widget" style="position:relative">
                            <!-- <a href="index.html"><img src="public/assets/img/logo-footer.png" alt="Logo" /></a> -->
                            <h4 class="widget-title"><?=$this->getContent('footer-location-title')?></h4>
                            <p style="font-size:.85rem"><i class="mdi mdi-map-marker-radius"></i> <?=$this->getContent('footer-location-address')?> <br />
                            <i class="mdi mdi-phone"></i> +62761 (31953) <br /> <i class="mdi mdi-email"></i> info@wilianperkasa.com</p>
                            <p style="font-size:.85rem"><a href="<?=BASE_URL?>privacy" class="btn-about text-privacy"><i class="mdi mdi-marker-check"></i> Privacy & Policy</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-2 m s-auto ">
                    <div class="widget-item" style="position:relative">
                        <h4 class="widget-title" ><?=$this->getContent('footer-info-title')?></h4>
                        <div class="widget-body">
                            <ul class="widget-list">
                                <li><a href="<?=BASE_URL?>about/profile"><?=$this->getContent('footer-info-about')?></a></li>
                                <li><a href="<?=BASE_URL?>info/contact"><?=$this->getContent('footer-info-contact')?></a></li>
                                <li><a href="<?=BASE_URL?>about/bod"><?=$this->getContent('footer-info-management')?></a></li>
                                <li><a href="<?=BASE_URL?>info/career"><?=$this->getContent('footer-info-career')?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-lg-2 ms-auto " >
                    <div class="widget-item">
                        <h4 class="widget-title" style="position:relative"><?=$this->getContent('footer-bisnis-title')?></h4>
                        <div class="widget-body">
                            <ul class="widget-list">
                                <li><a href="<?=BASE_URL?>business/plantation"><?=$this->getContent('footer-bisnis-plant')?></a></li>
                                <li><a href="<?=BASE_URL?>business/mill"><?=$this->getContent('footer-bisnis-mill')?></a></li>
                                <li><a href="<?=BASE_URL?>business/trading"><?=$this->getContent('footer-bisnis-trading')?></a></li>
                                <li><a href="<?=BASE_URL?>business/fnb"><?=$this->getContent('footer-bisnis-fnb')?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-2 ms-auto ">
                    <div class="widget-item" style="position:relative">
                        <h4 class="widget-title"><?=$this->getContent('footer-sustain-title')?></h4>
                        <div class="widget-body">
                            <ul class="widget-list">
                                <li><a href="<?=BASE_URL?>sustainability/policy"><?=$this->getContent('footer-sustain-policy')?></a></li>
                                <li><a href="<?=BASE_URL?>sustainability/certification"><?=$this->getContent('footer-sustain-certification')?></a></li>
                                <li><a href="<?=BASE_URL?>sustainability/environment"><?=$this->getContent('footer-sustain-environment')?></a></li>
                                <li><a href="<?=BASE_URL?>sustainability/gcg"><?=$this->getContent('footer-sustain-gcg')?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-2 social-media order-md-4">
                    <div class="widget-item" style="position:relative">
                        <h4 class="widget-title"><?=$this->getContent('footer-social-title')?></h4>
                        <div class="widget-body">
                            <div class="newsletter-section">
                                Never miss a thing, sign up to the <span class="fw-bold">mailing list</span>
                                <div class="newsletter-form">
                                    <form name="subscribeForm" id="subscribeForm" novalidate="" class="">
                                        <ul>
                                            <li class="form-icon">
                                                <i class="icofont-paper-plane"></i>
                                            </li>
                                            <li class="form-input">
                                                <input ng-model="tb_sub_email" ng-required="true" type="email" placeholder="Enter your email" class="" required="required">
                                            </li>
                                            <!-- <li class="form-button">
                                                <button type="button" class="" value="">Ikuti</button>
                                            </li> -->
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <!-- <i class="fa fa-facebook fs-4" style="padding:5px;"></i> -->
                            <a href="https://www.instagram.com/wilianperkasa" class="<?=$url?> text-white" target="newtab"><i class="fa fa-instagram fs-4" style="padding:5px;"></i></a>
                            <a href="https://id.linkedin.com/company/wilian-perkasa" class="text-white" target="newtab"><i class="fa fa-linkedin fs-4" style="padding:5px;"></i></a>
                            <a href="https://www.youtube.com/@WilianPerkasa" class="text-white" target="newtab"><i class="fa fa-youtube-play fs-4" style="padding:5px;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-footer-copy">
            <div class="footer-copy">
                <!-- <div class="widget-item"> -->
                    <!-- <h4 class="widget-title">Follow Us</h4> -->
                    <div class="widget-body">
                        Copyright &copy; 2022 Wilian Perkasa. All Right Reserved
                        <!-- Created By Martoni F -->
                    </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
</footer>
<!--== End Footer Area Wrapper ==-->

<!-- Scroll Top Button -->
<button class="btn-scroll-top"><i class="mdi mdi-chevron-up"></i></button>

<!-- Start Off Canvas Menu Wrapper -->
<aside class="off-canvas-wrapper off-canvas-menu">
    <div class="off-canvas-overlay"></div>
    <div class="off-canvas-inner">
        <!-- Start Off Canvas Header -->
        <div class="close-btn">
            <button class="btn-close"><i class="mdi mdi-close"></i></button>
        </div>

        <!-- Start Off Canvas Content -->
        <div class="off-canvas-content">
            <div class="res-mobile-menu">

            </div>
        </div>
    </div>
</aside>
<!-- End Off Canvas Menu Wrapper -->


<!--=======================Javascript============================-->
<script src="<?=BASE_URL?>public/assets/js/modernizr-3.6.0.min.js"></script>
<script src="<?=BASE_URL?>public/assets/js/jquery.min.js"></script>
<script src="<?=BASE_URL?>public/assets/js/jquery-migrate.min.js"></script>
<script src="<?=BASE_URL?>public/assets/js/popper.min.js"></script>
<script src="<?=BASE_URL?>public/assets/js/bootstrap.min.js"></script>
<script src="<?=BASE_URL?>public/assets/js/plugins/waypoint.min.js"></script>
<script src="<?=BASE_URL?>public/assets/js/plugins/counterup.min.js"></script>
<script src="<?=BASE_URL?>public/assets/js/plugins/instafeed.min.js"></script>
<script src="<?=BASE_URL?>public/assets/js/plugins/jquery.appear.js"></script>
<script src="<?=BASE_URL?>public/assets/js/plugins/jquery.slicknav.min.js"></script>
<script src="<?=BASE_URL?>public/assets/js/plugins/parallax.min.js"></script>
<script src="<?=BASE_URL?>public/assets/js/plugins/slick.min.js"></script>
<script src="<?=BASE_URL?>public/assets/js/plugins/magnific-popup.min.js"></script>

<!--=== Active Js ===-->
<script src="<?=BASE_URL?>public/assets/js/active_versi3.js"></script>

<!-- REVOLUTION JS FILES -->
<script src="<?=BASE_URL?>public/assets/js/revslider/jquery.themepunch.tools.min.js"></script>
<script src="<?=BASE_URL?>public/assets/js/revslider/jquery.themepunch.revolution.min.js"></script>


<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="<?=BASE_URL?>public/assets/js/revslider/extensions/revolution.extension.actions.min.js"></script>
<script src="<?=BASE_URL?>public/assets/js/revslider/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?=BASE_URL?>public/assets/js/revslider/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?=BASE_URL?>public/assets/js/revslider/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?=BASE_URL?>public/assets/js/revslider/extensions/revolution.extension.migration.min.js"></script>
<script src="<?=BASE_URL?>public/assets/js/revslider/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?=BASE_URL?>public/assets/js/revslider/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?=BASE_URL?>public/assets/js/revslider/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?=BASE_URL?>public/assets/js/revslider/extensions/revolution.extension.video.min.js"></script>

<!--=== REVOLUTION JS ===-->
<script src="<?=BASE_URL?>public/assets/js/revslider/rev-active.js"></script>
<script src="<?=BASE_URL?>public/assets/js/main.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<?php if(end($arr)=='bod') { ?>
    <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen"> -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <?php } ?>
<?php if(end($arr)=='investor') { ?>
    <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen"> -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <?php } ?>
<?=(isset($scriptfooter) && ($scriptfooter!='') ? $scriptfooter:'')?>
</body>

</html>