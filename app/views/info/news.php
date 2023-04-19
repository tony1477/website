<!--== Start Page Header Area ==-->
<div class="page-header-area bg-img-clear" data-bg="<?=BASE_URL?>public/assets/img/news/sawit.jpg" >
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-start">
                    <div class="page-header-content">
                        <h2><?=$this->getContent('news-topbar-title')?></h2>
                        <!-- <p>Businex always try to provide the best Business Solutions for Clinets
                            to grow up their Business very sharply and smoothly.</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->

<!--== Start Blog Page Area Wrapper ==-->
<div class="blog-page-content-area sp-y">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="blog-content-wrapper">
                    <div class="row mtn-30">
                        <?php foreach($data['news'] as $row): ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="blog-item">
                                <figure class="blog-thumb">
                                    <a href="<?=BASE_URL?>news/read/<?=$row['url']?>"><img src="<?=BASE_URL?>public/assets/img/news/<?=$row['img']?>" alt="<?=$row['img']?> Photo's"/></a>
                                </figure>
                                <div class="blog-content">
                                    <h2 class="h5"><a href="<?=BASE_URL?>news/read/<?=$row['url']?>detail/<?=$row['url']?>"><?=$this->getNewsTitle($row)?></a></h2>
                                    <?=$this->getNewsHighlight($row)?>
                                    <div class="blog-meta">
                                        <a href="#"></a>
                                        <a href="#"><?=date('d F, Y',strtotime($row['postdate']))?></a>    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach?>

                        <p class="mt-5 text-center fw-bold"><?=$this->getContent('news-content-subtitle')?> <br />
                        <div class="px-5 text-center">
                            <a href="https://www.instagram.com/wilianperkasa" target="newtab" class="icon-social-media"><i class="fa fa-instagram fs-2 text-danger"></i></a>
                            <a href="https://www.youtube.com/@WilianPerkasa" target="newtab" class="icon-social-media"><i class="fa fa-youtube-play fs-2 text-danger"></i></a>
                            <a href="https://id.linkedin.com/company/wilian-perkasa" target="newtab" class="icon-social-media"><i class="fa fa-linkedin fs-2 text-primary"></i></a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- <div class="pagination-wrap">
                    <ul class="pagination">
                        <li class="prev"><a href="#"><i class="fa fa-long-arrow-left"></i> Previous</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="next"><a href="#">Next <i class="fa fa-long-arrow-right"></i></a></li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!--== End Blog Page Area Wrapper ==-->