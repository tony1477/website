<div class="page-header-area bg-img-news" data-bg="<?=BASE_URL?>public/assets/img/business/fnb-topbar.png" style="background-position: center center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-start">
                    <div class="page-header-content" >
                        <h2><?=$this->getContent('fnb')?></h2>
                      
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
                    <?=$this->getContentDb('business-fnb-content')?>
                    <p></p>

                    <p class="text-start"><?=$this->getContent('moreinfo-visit-us')?>:</p>

                    <button class="btn btn-outline-secondary text-dark"><a href="https://flipnfry.id/" class="text-dark" target="_blank">FlipnFry</a></button>
                </div>
            </div>

            <div class="col-md-6 col-lg-5 order-0 order-md-1">
                <!-- <figure class="about-thumb">
                    <img src="<?=BASE_URL?>public/assets/img/our business/plantation.jpeg" alt="Businex-About"/>
                </figure> -->
                <figure class="service-details-thumb">
                    <img src="<?=BASE_URL?>public/assets/img/business/fnb2.jpeg" alt="Businex-Service Details"/>
                    <img src="<?=BASE_URL?>public/assets/img/business/fnb.jpeg" alt="Businex-Service Details"/>
                </figure>
            </div>

        </div>
    </div>
</div>
<!--== End About Area Wrapper ==-->
