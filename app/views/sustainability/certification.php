<div class="page-header-area bg-img-news" data-bg="<?=BASE_URL?>public/assets/img/contact_us.jpg" >
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-start">
                    <div class="page-header-content" >
                        <h2><?=$this->getContent('sustain-certification-topbar')?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== Start Blog Details Page Content ==-->
<div class="blog-details-page-content sp-y">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <article class="blog-post-details">
                    <figure class="blog-post-thumb">
                        <img src="<?=BASE_URL?>public/assets/img/sustainability/[GetPaidStock.com]-6315c9a9237c6.jpg" alt="Blog"/>
                    </figure>

                    <div class="blog-post-txt contentweb">
                        <?php //$data['data']['content']?>
                        <?=$this->getContentDb('sustain-certification-content')?>
                    </div>
                </article>
            </div>

            <div class="col-lg-3" style="position:relative; right:0px; z-index: 0;">
                <?php require_once('sidebar.php');?>
            </div>
        </div>
    </div>
</div>
<!--== End Blog Details Page Content ==-->