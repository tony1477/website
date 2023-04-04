<div class="page-header-area bg-img-news" data-bg="<?=BASE_URL?>public/assets/img/business/fnb-topbar.png" style="background-position: center center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-start">
                    <div class="page-header-content" >
                        <h2 style="text-transform:uppercase; margin-top:5rem"><?=$this->getContent('fnb')?></h2>
                      
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
            <div class="col-md-12 col-lg-12 order-1">
                <div class="about-content ms-0 contentweb">
                    <?php //$data['data']['content']?>
                    <?=$this->getContentDb('business-fnb-content')?>
                    <p></p>

                    <p class="animate-box text-start" data-animate-effect="fadeInUp"><?=$this->getContent('moreinfo-visit-us')?>:</p>

                    <button class="animate-box btn btn-outline-secondary text-dark" data-animate-effect="fadeInUp"><a href="https://flipnfry.id/" class="text-dark" target="_blank">FlipnFry</a></button>
                </div>
            </div>

        </div>
    </div>
</div>
<!--== End About Area Wrapper ==-->
