<div class="page-header-area bg-img-news" data-bg="https://www.asianagri.com/wp-content/uploads/2021/06/banner-bg-1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-start">
                    <div class="page-header-content" >
                        <h2><?=$this->getContent('business-trading-topbar')?></h2>
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
                    <?=$this->getContentDb('business-trading-content')?>
                </div>
            </div>

            <div class="col-md-6 col-lg-5 order-0 order-md-1">
                <!-- <figure class="about-thumb">
                    <img src="<?=BASE_URL?>public/assets/img/our business/plantation.jpeg" alt="Businex-About"/>
                </figure> -->
                <div class="testimonial-area-right">
                <div class="testimonial-content-wrap pl-0">
                    <div class="testimonial-thumbnail mt-sm-5 mt-md-1">
                        <div class="testimonial-thumbnail-item">
                            <img src="<?=BASE_URL?>public/assets/img/business/bahan-kimia-pertambangan.jpeg" alt="Businex-Testimonial"/>
                        </div>
                    </div>
                    <div class="testimonial-arrows-2"></div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End About Area Wrapper ==-->

<!--== Start Fun Fact Area Wrapper ==-->
<div class="sm-top our-business">
    <div class="container">
        <div class="row mtn-40">
            <div class="col-12 col-md-12 text-end">
                <div class="counter-item">
                    <h6 class="counter-txt"><a href="<?=BASE_URL?>business/fnb" class="text-white"> <?=$this->getContent('next')?> <i class="mdi mdi-arrow-right-bold-circle"></i><br /><?=$this->getContent('fnb')?></a></h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Fun Fact Area Wrapper ==-->