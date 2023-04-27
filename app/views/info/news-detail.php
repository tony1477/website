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
                            <div class="col-md-3 col-lg-3 order-1 order-md-0">
                                
                                <aside class="sidebar-area-wrapper mt-md-80 mt-sm-60 sticky-top" style="top:7rem">
                                    <div class="single-sidebar-item-wrap">
                                        <h3 class="sidebar-title">Featured Posts</h3>
                                        <div class="sidebar-body">
                                            <div class="latest-blog-widget">
                                                <div class="single-blog-item">
                                                    <div class="post-thumb">
                                                        <a href="<?=BASE_URL?>news/read/kom-2022"><img src="<?=BASE_URL?>public/assets/img/news/kom2022.jpg" alt="Thumb"></a>
                                                    </div>

                                                    <div class="post-info">
                                                        <h6><a href="<?=BASE_URL?>news/read/kom-2022">KOM 2022 "SPIRIT of CHANGE".</a></h6>
                                                        <span class="post-date"><i class="fa fa-clock-o"></i>  January 17, 2022</span>
                                                    </div>
                                                </div>

                                                <div class="single-blog-item">
                                                    <div class="post-thumb">
                                                        <a href="<?=BASE_URL?>news/read/launching-flip-n-fry"><img src="<?=BASE_URL?>public/assets/img/news/flipnfry.jpg" alt="Thumb"></a>
                                                    </div>

                                                    <div class="post-info">
                                                        <h6><a href="<?=BASE_URL?>news/read/launching-flip-n-fry">Grand Opening Flip N Fry</a></h6>
                                                        <span class="post-date"><i class="fa fa-clock-o"></i>  January 6, 2023</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    

                                    <div class="single-sidebar-item-wrap">
                                        <h3 class="sidebar-title">Social Media</h3>
                                        <div class="sidebar-body">
                                            <div class="instagram-feed">
                                                <div id="instafeed" class="instagram-gallery" data-accesstoken="IGQVJWRlI0cGpSWm44eW9qSklnV1hIclZArNi1zbW5xZAVZAZAYXVoYUo0TUtwNDNMQ2o5VzBxRDNTa1lNSHVzVHBWSEtSZAFR3NmlkSWlxZAlUwN2RBRjc2YWVwYWR4QldENFRLUDlCanpCNTBTOS1VMXh6LQZDZD">
                                                </div>
                                                <h4 class="insta-follow" style="display: flex;align-items: center;"><i class="fa fa-instagram text-danger fs-1"></i><a href="https://www.instagram.com/wilianperkasa" target="_blank" style="display: inline-block;">@wilianperkasa</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                               
                            </div>
                            <div class="col-md-9 col-lg-9 m-auto order-0">
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