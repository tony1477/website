<header class="header-area">
    <div class="container-fluid">
        <div class="row align-items-end">
            <div class="col-5 col-lg-2">
                <!-- Start Logo Area -->
                <div class="logo-area">
                    <a href="index.html"><img src="<?=BASE_URL?>public/assets/img/WPG_logo_complete5.png" alt="Brand-Logo"></a>
                </div>
                <!-- End Logo Area -->
            </div>

            <div class="col-lg-10 d-none d-lg-block">
                <!-- Start Navigation Area -->
                <div class="navigation-area mt-lg-3">
                    <ul class="main-menu nav">
                        <?php foreach($menu as $row): ?>
                        <li><a href="<?=BASE_URL?>home"><?=$data['nav']['home']?></a>
                            <!-- <ul class="submenu-nav">
                                <li><a href="index.html">Home 01</a></li>
                                <li><a href="index-2.html">Home 02</a></li>
                                <li><a href="index-3.html">Home 03</a></li>
                            </ul> -->
                        </li>
                        <li class="has-submenu"><a href="#"><?=$data['nav']['about']?></a>
                            <ul class="submenu-nav">
                                <li><a href="<?=BASE_URL?>about/profile"><?=$data['nav']['profile']?></a></li>
                                <li><a href="<?=BASE_URL?>about/vision"><?=$data['nav']['vision']?></a></li>
                                <li><a href="<?=BASE_URL?>about/strategic"><?=$data['nav']['strategic']?></a></li>
                                <li><a href="<?=BASE_URL?>about/bod"><?=$data['nav']['bod']?></a></li>
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="#"><?=$data['nav']['business']?></a>
                            <ul class="submenu-nav">
                                <li><a href="<?=BASE_URL?>business/plantation"><?=$data['nav']['plantation']?></a></li>
                                <li><a href="<?=BASE_URL?>business/mill"><?=$data['nav']['mill']?></a></li>
                                <li><a href="<?=BASE_URL?>business/trading"><?=$data['nav']['trading']?></a></li>
                                <li><a href="<?=BASE_URL?>business/lemongrass"><?=$data['nav']['lemongrass']?></a></li>
                                <li><a href="<?=BASE_URL?>business/fnb"><?=$data['nav']['fnb']?></a></li>
                            </ul>
                        </li>
                        <li><a href="<?=BASE_URL?>investor"><?=$data['nav']['investor']?></a></li>
                        <li class="has-submenu"><a href="<?=BASE_URL?>investor"><?=$data['nav']['sustainability']?></a>
                            <ul class="submenu-nav">
                                <li><a href="<?=BASE_URL?>sustainability/policy"><?=$data['nav']['policy']?></a></li>
                                <li><a href="<?=BASE_URL?>sustainability/certification"><?=$data['nav']['certification']?></a></li>
                                <li><a href="<?=BASE_URL?>sustainability/environment"><?=$data['nav']['environment']?></a></li>
                                <li><a href="<?=BASE_URL?>sustainability/community"><?=$data['nav']['community']?></a></li>
                                <li><a href="<?=BASE_URL?>business/osh"><?=$data['nav']['osh']?></a></li>
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="#" style="border: 0px solid #000;"><?=$data['nav']['information']?></a>
                            <ul class="submenu-nav">
                                <li><a href="<?=BASE_URL?>info/news"><?=$data['nav']['news']?></a></li>
                                <li><a href="<?=BASE_URL?>info/video"><?=$data['nav']['albumvideo']?></a></li>
                                <li><a href="<?=BASE_URL?>info/photo"><?=$data['nav']['albumphoto']?></a></li>
                                <li><a href="<?=BASE_URL?>carrer"><?=$data['nav']['carrer']?></a></li>
                            </ul>
                        </li>
                        <li><a href="<?=BASE_URL?>info/contact"><?=$data['nav']['contact']?></a></li>
                        <!-- <li class="has-submenu">
                            <img src="assets/img/icons/usa.png">
                            <ul class="submenu-nav">
                                <li><a href="blog.html"><img src="assets/img/icons/indonesia.png">IDN</a></li>
                            </ul>
                        </li> -->
                        <!-- Example single danger button -->
                        <div class="btn-group">
                            <button type="button" class=" dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="<?=BASE_URL?>public/assets/img/icons/usa.png" style="display: inline; margin-top:-8px">
                            </button>
                            <ul class="dropdown-menu" style="border: 0px solid #000; width:32px !important;">
                            <li><a href="#" style="color:#000"><img src="<?=BASE_URL?>public/assets/img/icons/indonesia.png" style="display:inline;"> IDN</a></li>
                            </ul>
                        </div>
                                                <!-- <li><a href="contact.html">Contact</a></li> -->
                        <?php endforeach;?>
                    </ul>
                </div>
                <!-- End Navigation Area -->
            </div>

            <div class="col-lg-2">
                <div class="header-action mt-lg-3 text-end">
                    <!-- <a href="tel:00199823568658" class="tel-no">+998 23568 658</a> -->
                    <!-- <button class="btn-cog"><i class="fa fa-cog"></i></button> -->
                    <button class="btn-menu d-lg-none"><i class="fa fa-bars"></i></button>
                </div>
            </div>
        </div>
    </div>
</header>