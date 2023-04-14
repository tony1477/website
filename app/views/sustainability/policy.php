<div class="page-header-area bg-img-news" data-bg="<?=BASE_URL?>public/assets/img/sustainability/policy.jpg" >
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-start">
                    <div class="page-header-content" >
                        <h2 style="text-transform:uppercase; margin-top:5rem"><?=$this->getContent('sustain-policy-topbar')?></h2>
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
                    <figure class="animate-box blog-post-thumb" data-animate-effect="fadeIn">
                        <img src="<?=BASE_URL?>public/assets/img/sustainability/policy.jpg" alt="Blog" width="100%" class="rounded shadow" />
                    </figure>

                    <div class="blog-post-txt contentweb">
                        <?php //$data['data']['content']?>
                        <?=$this->getContentDb('sustain-policy-content')?>
                    </div>
                    <!-- <div class="animate-box" data-animate-effect="fadeInUp">
                        <h3>TEST INI</h3>
                    </div> -->
                </article>
            </div>

            <div class="col-lg-3" style="position:relative; right:0px; z-index: 0;">
              <?php require_once('sidebar.php');?>
            </div>
        </div>
    </div>
</div>
<!--== End Blog Details Page Content ==-->