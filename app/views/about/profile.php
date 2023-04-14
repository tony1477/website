<div class="page-header-area bg-img-news" data-bg="<?=BASE_URL?>public/assets/img/about/frontdesk.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-start">
                    <div class="page-header-content" >
                        <h2 style="text-transform:uppercase; margin-top:5rem"><?=$this->getContent('about-topbar-title')?></h2>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->

<!--== Start Testimonial Area Wrapper ==-->
<div class="about-area-wrapper sm-top bg-overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 order-lg-0 order-md-3">
                <?php require_once('sidebar.php')?>
            </div>
            <div class="col-md-6 col-lg-9 order-md-2 order-lg-2 order-2 justify-content-md-end">
                <div class="about-content ms-0">
                    
                    <!-- <h2><?php //$data['data']['title']?></h2> -->
                    <?php //echo ($data['data']['content']);?>
                    <?=$this->getContentDb('about-profile-content')?>
                    <?php //endforeach;?>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 order-3"></div>
            <div class="animate-box col-md-6 col-lg-9 order-4 mt-5" data-animate-effect="fadeIn" style="padding-right:5rem">
                <figure class="about-thumb video-button-thumb" style="border-radius: .55rem;">
                <img src="<?=BASE_URL?>public/assets/img/video-sample2.jpg" alt="Wilian Perkasa's Company Profile">
                    <a href="<?=BASE_URL?>/public/assets/videos/WP 15 MIN.mp4" class="btn-play"><i class="fa fa-play"></i></a>
                </figure>
            </div>
        </div>
    </div>
</div>
<!--== End Testimonial Area Wrapper ==-->
<!--== Start History Area Wrapper ==-->
<div class="animate-box history-area sp-y bg-offwhite" style="
    background-image: url('<?=BASE_URL?>public/assets/img/about/about2.jpg');
    background-position: right center;
    position: relative;" data-animate-effect="fadeInUp">
    <div class="row-bg-overlay" style="background: rgba(0,75,49,0.83);background: linear-gradient(90deg,rgb(34 33 30 / 95%) 0%,rgb(147 107 18 / 85%) 100%);opacity: 1;"></div>
    
    <div class="container">
        <div class="row align-items-center">
            <div class="title-profile">
                <h5><?=$this->getContent('about-content-title')?></h5>
            </div>
            <div class="col-md-6">
                <div class="row img_profile">
                    <img class="rounded" width="100%" src="<?=BASE_URL?>public/assets/img/about/about2.jpg" alt="" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <?php 
                    $i=0;
                    foreach($this->getContent('about-profile-milestone') as $milestone):?>
                    <div class="animate-box col-6 content-profile" data-animate-effect="fadeInUp">
                        <div class="content-year-border">
                           <?=$milestone['year']?>
                        </div>
			            <?=$milestone['title']?>
                        <?=$milestone['caption']?>
                    </div>
                    <?php $i++; endforeach;?>
                </div>
            </div>
            <p>&nbsp;</p>                   
            <div class="animate-box col-md-12 text-end mt-3 about-content">
                <p><a href="<?=BASE_URL?>about/milestone" class="btn-about text-white"><?=$this->getContent('readmore')?> <i class="mdi mdi-chevron-double-right"></i></a></p>
            </div>
        </div>
    </div>
</div>
<!--== End History Area Wrapper ==-->