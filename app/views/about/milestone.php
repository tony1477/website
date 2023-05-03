<!--== Start Page Header Area ==-->
<div class="page-header-area bg-img-news" data-bg="<?=BASE_URL?>public/assets/img/about/milestone/logo-landmark.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-start">
                    <div class="page-header-content">
                        <h2 style="text-transform:uppercase; margin-top:5rem"><?=$this->getContent('milestone-topbar-title')?></h2>
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
            <div class="col-md-6 col-lg-3 col-xl-3 order-lg-0 order-xl-0 order-1">
                <?php require_once('sidebar.php')?>
            </div>
            <div class="col-md-6 col-lg-9 col-xl-9 order-lg-1 order-xl-1 order-0 justify-content-md-end">
            <div class="member-details-bottom">
                    <div class="row mtn-50">
                        <div class="col-lg-12 m-auto">   
                            <div class="member-education mem-achieve-item" style="text-align: justify;">
                                <?=$this->getContentDb('about-milestone-content')?>
                            </div>
                        </div>
                        <p class="animate-box text-end text-danger fw-bold" style="font-size:.75rem" data-animate-effect="fadeIn">* <?=$this->getContent('click-to-detail')?></p>
                        <ul class="timeline">
                            <!-- Item 1 -->
                            <li class="animate-box" >
                                <p class="time-timeline-l">2009</p>
                                <img src="<?=BASE_URL?>public/assets/img/WPG_logo_complete123.png" width="200" class="milestone-logo" />
                                <div class="direction-r" onclick="showhistory(this)">
                                    <?=$this->getContentDb('about-milestone-sps')?>
                                </div>
                            </li>
                        
                            <!-- Item 2 -->
                            <li class="animate-box" >
                                <p class="time-timeline-r">2012</p>
                                <img src="<?=BASE_URL?>public/assets/img/WPG_logo_complete123.png" width="200" class="" />
                                <div class="direction-l" onclick="showhistory(this)">
                                <?=$this->getContentDb('about-milestone-tsp')?>
                                </div>
                            </li>

                            <!-- Item 3 -->
                            <li class="animate-box" >
                                <p class="time-timeline-l">2014</p>
                                <img src="<?=BASE_URL?>public/assets/img/WPG_logo_complete123.png" width="200" class="mx-3" />
                                <div class="direction-r" onclick="showhistory(this)">
                                    <?=$this->getContentDb('about-milestone-lsp')?>
                                </div>
                            </li>
                            <!-- Item 4 -->
                            <li class="animate-box" >
                                <p class="time-timeline-r">2017</p>
                                <img src="<?=BASE_URL?>public/assets/img/WPG_logo_complete123.png" width="200" class="" />
                                <div class="direction-l" onclick="showhistory(this)">
                                    <?=$this->getContentDb('about-milestone-ssp')?>
                                </div>
                            </li>
                            <!-- Item 5 -->
                            <li class="animate-box" >
                                <p class="time-timeline-l">2019</p>
                                <img src="<?=BASE_URL?>public/assets/img/WPG_logo_complete123.png" width="200" class="mx-3" />
                                <div class="direction-r" onclick="showhistory(this)">
                                    <?=$this->getContentDb('about-milestone-wms')?>
                                </div>
                            </li>
                            <!-- Item 6 -->
                            <li class="animate-box" >
                                <p class="time-timeline-r">2020</p>
                                <img src="<?=BASE_URL?>public/assets/img/WPG_logo_complete123.png" width="200" class="" />
                                <div class="direction-l" onclick="showhistory(this)">
                                    <?=$this->getContentDb('about-milestone-swp')?>
                                </div>
                            </li>
                            <!-- Item 7 -->
                            <li class="animate-box" >
                                <p class="time-timeline-l">2022</p>
                                <img src="<?=BASE_URL?>public/assets/img/WPG_logo_complete123.png" width="200" class="mx-3" />
                                <div class="direction-r" onclick="showhistory(this)">
                                    <?=$this->getContentDb('about-milestone-wtp')?>
                                </div>
                            </li>
                            <!-- Item 8 -->
                            <li class="animate-box" >
                                <p class="time-timeline-r">2022</p>
                                <img src="<?=BASE_URL?>public/assets/img/WPG_logo_complete123.png" width="200" class="" />
                                <div class="direction-l" onclick="showhistory(this)">
                                    <?=$this->getContentDb('about-milestone-ssp2')?>
                                </div>
                            </li>
                             <!-- Item 9 -->
                            <li class="animate-box" >
                                <p class="time-timeline-l">2023</p>
                                <img src="<?=BASE_URL?>public/assets/img/WPG_logo_complete123.png" width="200" class="mx-3" />
                                <div class="direction-r" onclick="showhistory(this)">
                                    <?=$this->getContentDb('about-milestone-kbp')?>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Testimonial Area Wrapper ==-->
<?php
$scriptfooter = <<<HEREDOC
<script type="text/javascript">
function showhistory(el) {
    const direction = el
    const detailhist = $(direction).find('.detailhist').length > 0 ? $(direction).find('.detailhist') : $(direction).find('.detailhist-r')
    console.log(detailhist)
    detailhist.toggleClass('d-none')
}
</script>
HEREDOC;
?>