<div class="page-header-area bg-img-news" data-bg="<?=BASE_URL?>public/assets/img/sustainability/environment.jpg" style="background-position:top -300px center">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-start">
                    <div class="page-header-content" >
                        <h2 style="text-transform:uppercase; margin-top:5rem"><?=$this->getContent('sustain-environment-topbar')?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== Start Blog Details Page Content ==-->
<div class="blog-details-page-content sp-y bg-overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <article class="blog-post-details">
                    <figure class="blog-post-thumb animate-box">
                        <img src="<?=BASE_URL?>public/assets/img/sustainability/environment.jpg" alt="Blog" class="rounded shadow" />
                    </figure>

                    <div class="blog-post-txt contentweb">
                        <?php //$data['data']['content']?>
                        <?=$this->getContentDb('sustain-environment-content')?>
                    </div>
                </article>
            </div>

            <div class="col-lg-3" style="position:relative; right:0px; z-index: 0;">
                <?php require_once('sidebar.php')?>
            </div>
        </div>
    </div>
</div>
<!--== End Blog Details Page Content ==-->