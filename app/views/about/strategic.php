<!--== Start Page Header Area ==-->
<div class="page-header-area bg-img-news" data-bg="<?=BASE_URL?>public/assets/img/business/plant-business-page1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-start">
                    <div class="page-header-content" >
                        <h2 style="text-transform:uppercase; margin-top:5rem"><?=$this->getContent('strategic-topbar-title')?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== Sta
<!--== End Page Header Area ==-->
<!--== Start Testimonial Area Wrapper ==-->
<div class="about-area-wrapper sm-top bg-overlay">
    <div class="container" style="border: 0px solid #000;">
        <div class="row">
            <div class="col-md-6 col-lg-3 col-xl-3 col-12 order-1 order-lg-0 order-xl-0">
                <?php require_once('sidebar.php')?>
            </div>
            <div class="col-md-9 col-lg-9 col-xl-9 col-12 order-lg-1 order-xl-1 order-0 justify-content-end">
                <div class="about-content ms-0 contentweb">
                    <?php //$data['data']['content']?>
                    <?=$this->getContentDb('about-strategic-content')?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="sm-top-wt"></div> -->
<!--== End Testimonial Area Wrapper ==-->