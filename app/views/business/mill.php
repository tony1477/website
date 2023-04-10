<div class="page-header-area bg-img-news" data-bg="<?=BASE_URL?>public/assets/img/business/mill-business-page1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-start">
                    <div class="page-header-content" >
                        <h2 style="text-transform:uppercase; margin-top:5rem"><?=$this->getContent('business-mill-topbar')?></h2>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== Start About Area Wrapper ==-->
<div class="about-area-wrapper sm-top bg-overlay">
    <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-md-12 col-lg-12 order-1">
                <div class="about-content ms-0 contentweb">
                    <?php //$data['data']['content']?>
                    <?=$this->getContentDb('business-mill-content')?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End About Area Wrapper ==-->

<!--== Start Fun Fact Area Wrapper ==-->
<div class="our-business">
    <div class="container" style="padding-right:3.5rem">
        <div class="row mtn-40">
            <div class="col-6 col-md-6 text-start">
            <div class="counter-item">
                    <h6 class="counter-txt"><a href="<?=BASE_URL?>business/plantation" class="text-white"><i class="mdi mdi-arrow-left-bold-circle"></i> <?=$this->getContent('prev')?> <br /><?=$this->getContent('plantation')?></a></h6>
                </div>
            </div>
            <div class="col-6 col-md-6 text-end">
                <div class="counter-item">
                    <h6 class="counter-txt"><a href="<?=BASE_URL?>business/agronomy" class="text-white"><?=$this->getContent('next')?> <i class="mdi mdi-arrow-right-bold-circle"></i><br /><?=$this->getContent('agronomy')?></a></h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Fun Fact Area Wrapper ==-->