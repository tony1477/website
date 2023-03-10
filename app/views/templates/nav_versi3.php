<?php 
    $strpos = strpos($this->getUrl(),'/',0);
    $url = substr($this->getUrl(),0,$strpos);
?>
<header class="<?=($url=='home' || $url=='') ? 'header-area transparent' : 'header-area sticky'?>">
    <div class="container-fluid">
        <div class="row align-items-end">
            <div class="col-5 col-lg-2">
                <!-- Start Logo Area -->
                <div class="logo-area resize-img">
                    <a href="index.html"><img src="<?=BASE_URL?>public/assets/img/WPG_logo_complete1_rev.png" alt="Brand-Logo"></a>
                    <!-- <div class="container-motto">
                        <p class="logo-motto">be Wise be Excellent</p>
                    </div> -->
                </div>
                <!-- End Logo Area -->
            </div>

            <div class="col-lg-10 d-none d-lg-block">
                <!-- Start Navigation Area -->
                <div class="navigation-area mt-lg-3">
                    <ul class="main-menu nav resize-font">
                        <?php foreach($menu as $url => $link): ?>
                        <?php if($link['type'] == 'detail'): ?>
                        <li class="has-submenu">
                            <a href="#"><?=$link['text']?></a>
                            <ul class="submenu-nav">
                                <?php foreach($link['data'] as $subUrl => $subLink):?> 
                                <li><a href="<?=BASE_URL.$url.'/'.$subUrl?>"><?=$subLink?></a></li>
                                <?php endforeach;?>
                            </ul>
                        </li>
                        <?php else: ?>
                        <li><a href="<?=BASE_URL.$url?>"><?=$link['text']?></a></li>
                        <?php endif;?>
                        <!-- Example single danger button -->
                        <?php endforeach;?>
                        <div class="nav-wrapper">
                            <div class="sl-nav">
                                <ul>
                                <li><img src="http://localhost/webs/public/assets/img/indonesia.png" style="display: inline; margin-top:-5px; width:24px"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    <div class="triangle"></div>
                                    <ul>
                                    <li><i class="sl-flag flag-usa"><div id="english"></div></i> <span>English</span></li>
                                    </ul>
                                </li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="btn-group">
                            <button type="button" class=" dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="<?=BASE_URL?>public/assets/img/icons/indonesia.png" style="display: inline; margin-top:-8px">
                            </button>
                            <ul class="dropdown-menu" style="border: 0px solid #000; width:32px !important;">
                            <li><a href="#" style="color:#000"><img src="<?=BASE_URL?>public/assets/img/icons/usa.png" style="display:inline;"> IDN</a></li>
                            </ul>
                        </div> -->
                        <!-- <li><a href="contact.html">Contact</a></li> -->
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