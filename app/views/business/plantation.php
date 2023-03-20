<div class="page-header-area bg-img-news" data-bg="https://www.asianagri.com/wp-content/uploads/2021/06/banner-bg-1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-start">
                    <div class="page-header-content" >
                        <h2><?=$this->getContent('business-plant-topbar')?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== Start About Area Wrapper ==-->
<div class="about-area-wrapper sm-top">
    <div class="container">
        <!-- <div style="background: linear-gradient(87deg, rgba(5,10,38,0.8883928571428571) 7%, rgba(234,235,236,0.8267682072829132) 100%); height:484px; width:100%; background-size: cover; position: absolute; box-sizing: border-box; opacity: .6; left:0"> -->
        <!-- <img src="<?=BASE_URL?>public/assets/img/business/Ruyi - goldfoil.jpg"> -->
        <!-- </div> -->
        <div class="row align-items-lg-center">
            <div class="col-md-6 col-lg-7 order-1">
                <div class="about-content ms-0 contentweb">
                    <?=$this->getContentDb('business-plant-content')?>
                    <?php //$data['data']['content']?>
                </div>
            </div>

            <div class="col-md-6 col-lg-5 order-0 order-md-1">
                <!-- <figure class="about-thumb">
                    <img src="<?=BASE_URL?>public/assets/img/our business/plantation.jpeg" alt="Businex-About"/>
                </figure> -->
                <figure class="service-details-thumb">
                    <img src="<?=BASE_URL?>public/assets/img/business/plantation.jpeg" alt="Businex-Service Details"/>
                    <img src="<?=BASE_URL?>public/assets/img/business/plantation2.jpeg" alt="Businex-Service Details"/>
                    <img src="<?=BASE_URL?>public/assets/img/business/seraiwangi3.jpeg" alt="Businex-Service Details"/>
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
                    <h6 class="counter-txt"><a href="<?=BASE_URL?>business/mill" class="text-white"><?=$this->getContent('next')?> <i class="mdi mdi-arrow-right-bold-circle"></i><br /><?=$this->getContent('mills')?></a></h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Fun Fact Area Wrapper ==-->