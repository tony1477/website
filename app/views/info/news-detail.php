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
                                <!--
                                <aside class="sidebar-area-wrapper mt-md-80 mt-sm-60">
                                    <div class="single-sidebar-item-wrap">
                                        <h3 class="sidebar-title">Featured Posts</h3>
                                        <div class="sidebar-body">
                                            <div class="latest-blog-widget">
                                                <div class="single-blog-item">
                                                    <div class="post-thumb">
                                                        <a href="blog-details.html"><img src="assets/img/service/01.jpg" alt="Thumb"></a>
                                                    </div>

                                                    <div class="post-info">
                                                        <h6><a href="blog-details.html">Lorem ipsum dolor sit.</a></h6>
                                                        <span class="post-date"><i class="fa fa-clock-o"></i>  March 9, 2019</span>
                                                    </div>
                                                </div>

                                                <div class="single-blog-item">
                                                    <div class="post-thumb">
                                                        <a href="blog-details.html"><img src="assets/img/service/02.jpg" alt="Thumb"></a>
                                                    </div>

                                                    <div class="post-info">
                                                        <h6><a href="blog-details.html">Creating electronic beats</a></h6>
                                                        <span class="post-date"><i class="fa fa-clock-o"></i>  March 9, 2019</span>
                                                    </div>
                                                </div>

                                                <div class="single-blog-item">
                                                    <div class="post-thumb">
                                                        <a href="blog-details.html"><img src="assets/img/service/03.jpg" alt="Thumb"></a>
                                                    </div>
                                                    <div class="post-info">
                                                        <h6><a href="blog-details.html">Mysterious Black</a></h6>
                                                        <span class="post-date"><i class="fa fa-clock-o"></i>  March 9, 2019</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    

                                    <div class="single-sidebar-item-wrap">
                                        <h3 class="sidebar-title">Instagram</h3>
                                        <div class="sidebar-body">
                                            <div class="instagram-feed">
                                                <div id="instafeed" class="instagram-gallery" data-accesstoken="IGQVJWRlI0cGpSWm44eW9qSklnV1hIclZArNi1zbW5xZAVZAZAYXVoYUo0TUtwNDNMQ2o5VzBxRDNTa1lNSHVzVHBWSEtSZAFR3NmlkSWlxZAlUwN2RBRjc2YWVwYWR4QldENFRLUDlCanpCNTBTOS1VMXh6LQZDZD">
                                                </div>

                                                <h4 class="insta-follow"><i class="fa fa-instagram"></i> Follow Us <a href="#" target="_blank">@businex</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                                -->
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