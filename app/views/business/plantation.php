<div class="page-header-area bg-img-news" data-bg="<?=BASE_URL?>public/assets/img/business/plant-business-page1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-start">
                    <div class="page-header-content" >
                        <h2 style="text-transform:uppercase; margin-top:5rem"><?=$this->getContent('business-plant-topbar')?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== Start About Area Wrapper ==-->
<div class="about-area-wrapper sm-top bg-overlay">
    <div class="container">
        <!-- <div style="background: linear-gradient(87deg, rgba(5,10,38,0.8883928571428571) 7%, rgba(234,235,236,0.8267682072829132) 100%); height:484px; width:100%; background-size: cover; position: absolute; box-sizing: border-box; opacity: .6; left:0"> -->
        <!-- <img src="<?=BASE_URL?>public/assets/img/business/Ruyi - goldfoil.jpg"> -->
        <!-- </div> -->
        <div class="row align-items-lg-center">
            <div class="col-md-12 col-lg-12 order-1">
                <div class="about-content ms-0 contentweb">
                    <?=$this->getContentDb('business-plant-content')?>
                    <?php //$data['data']['content']?>
                </div>
            </div>

        </div>
    </div>
</div>
<!--== End About Area Wrapper ==-->

<!--== Start Fun Fact Area Wrapper ==-->
<div class="our-business">
    <div class="container nav-busineepage">
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