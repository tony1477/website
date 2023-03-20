<div class="page-header-area bg-img-news" data-bg="https://www.asianagri.com/wp-content/uploads/2021/06/banner-bg-1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-start">
                    <div class="page-header-content" >
                        <h2><?=$this->getContent('business-mill-topbar')?></h2>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== Start About Area Wrapper ==-->
<div class="about-area-wrapper sm-top">
    <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-md-6 col-lg-7 order-1">
                <div class="about-content ms-0 contentweb">
                    <?php //$data['data']['content']?>
                    <?=$this->getContentDb('business-mill-content')?>
                </div>
            </div>

            <div class="col-md-6 col-lg-5 order-0 order-md-1">
                <!-- <figure class="about-thumb">
                    <img src="<?=BASE_URL?>public/assets/img/our business/plantation.jpeg" alt="Businex-About"/>
                </figure> -->
                <figure class="service-details-thumb">
                    <img src="<?=BASE_URL?>public/assets/img/business/storage-tank.webp" alt="Businex-Service Details"/>
                    <img src="<?=BASE_URL?>public/assets/img/business/pabrik.webp" alt="Businex-Service Details"/>
                    <!-- <img src="<?=BASE_URL?>public/assets/img/business/plantation2.jpeg" alt="Businex-Service Details"/> -->
                </figure>
            </div>
        </div>
    </div>
</div>
<!--== End About Area Wrapper ==-->

<!--== Start Fun Fact Area Wrapper ==-->
<div class="sm-top our-business">
    <div class="container">
        <div class="row mtn-40">
            <div class="col-6 col-md-6"></div>
            <div class="col-6 col-md-6 text-end">
                <div class="counter-item">
                    <h6 class="counter-txt"><a href="<?=BASE_URL?>business/trading" class="text-white"><?=$this->getContent('next')?> <i class="mdi mdi-arrow-right-bold-circle"></i><br /><?=$this->getContent('trading')?></a></h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Fun Fact Area Wrapper ==-->