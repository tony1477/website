<div class="page-header-area bg-img-news" data-bg="<?=BASE_URL?>public/assets/img/about/frontdesk.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-start">
                    <div class="page-header-content" >
                        <h2><?=$this->getContent('about-topbar-title')?></h2>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->

<!--== Start Testimonial Area Wrapper ==-->
<div class="about-area-wrapper sm-top">
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
        </div>
    </div>
</div>
<!--== End Testimonial Area Wrapper ==-->
<div class="animate-box video-profile1" data-animate-effect="fadeIn">
    <div class="w-100">
        <div class="nectar-shape-divider-wrap " style="height:50%; position:absolute; width:100%" data-using-percent-val="true" data-height="50%" data-front="" data-style="straight_section" data-position="bottom">
            <svg class="nectar-shape-divider" aria-hidden="true" fill="#004b31" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"> <polygon points="104 10, 104 0, 0 0, 0 10"></polygon> </svg>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-9">
                    <div class="video-profile">
                    <i class="mdi mdi-play" style="position: relative;top: 44%;font-family: 'Material Design Icons';content: '\f40a';left: 48.5%;color: #fff;font-size: 2rem;transform: translate(-50%, -50%);"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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