<!--== Start Page Header Area ==-->
<div class="page-header-area bg-img" data-bg="<?=BASE_URL?>public/assets/img/news/<?=$data['news']['img']?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-inner">
                    <div class="page-header-content">
                        <h2><?=$this->getNewsTitle($data['news'])?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->
<!--== Start Blog Details Page Content ==-->
<div class="blog-details-page-content sp-y">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <article class="blog-post-details">                  
                    <div class="blog-post-txt-wrap">
                        <div class="row">
                            <div class="col-md-3 col-lg-2 order-1 order-md-0">
                            </div>

                            <div class="col-md-9 col-lg-8 m-auto order-0">
                                <div class="blog-post-txt">
                                    <h2 class="animate-box h3" data-animate-effect="fadeIn"><?=$this->getNewsTitle($data['news'])?></h2>
                                    <?=$this->getNewsContent($data['news'])?>
                                </div>

                                <!-- <div class="share-article text-center">
                                    <h6>Share this article</h6>
                                    <div class="member-social-icons justify-content-center">
                                        <a class="facebook" href="#"><i class="mdi mdi-facebook"></i></a>
                                        <a class="twitter" href="#"><i class="mdi mdi-twitter"></i></a>
                                        <a class="reddit" href="#"><i class="mdi mdi-reddit"></i></a>
                                        <a class="pinterest" href="#"><i class="mdi mdi-pinterest"></i></a>
                                    </div>
                                </div>                                 -->
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
<!--== End Blog Details Page Content ==-->