<div class="page-header-area bg-img-news" data-bg="<?=BASE_URL?>public/assets/img/Bendera.jpg" style="background-position:top -90rem center">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-start">
                    <div class="page-header-content" >
                        <h2 style="text-transform:uppercase; margin-top:5rem"><?=$this->getContent('vision-topbar-title')?></h2>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== Start Testimonial Area Wrapper ==-->
<div class="testimonial-area testimonial-area--2 bg-offwhite bg-overlay">
    <div class="container">
        <div class="row sp-top">
            <div class="col-md-6 col-lg-3 order-lg-0 order-xl-0 order-3 col-12">
                <?php require_once('sidebar.php')?>
            </div>
            <div class="col-md-6 col-lg-9 col-xl-9 order-0 order-lg-1 order-xl-1 col-12">
                <div class="animate-box card mb-3" style="border: 1px solid rgb(177 163 163 / 75%);" data-animate-effect="fadeIn">
                    <div class="row g-0">
                        <div class="col-md-4 col-lg-4 col-xl-4 col-12">
                            <img src="<?=BASE_URL?>public/assets/img/Bendera.jpg" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-md-8 col-lg-8 col-xl-8 col-12">
                            <div class="card-body">
                                <h3 class="text-center pb-5 text-visi-misi"><?=$this->getContent('about-vision-title')?></h3>
                                <p class="text-visi"><?=$this->getContent('about-vision-content')?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="animate-box card mb-3" style="margin-top: 5rem;" data-animate-effect="fadeInUp">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-4 col-lg-4 col-xl-4 col-12">
                            <img src="<?=BASE_URL?>public/assets/img/about/wp-mill.jpg" class="rounded-start img-vision" alt="...">
                        </div>
                        <div class="col-md-8 col-lg-8 col-xl-8 col-12">
                            <div class="card-body">
                                <h3 class="text-center pb-5 text-visi-misi"><?=$this->getContent('about-mission-title')?></h3>
                                <ul class="text-misi" style="margin-left: 1.5rem;">
                                    <?=$this->getContent('about-mission-content')?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="wisdomModal">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content modal-values">
                            <div class="modal-body">
                                <div class="content">
                                    <img src="<?=BASE_URL?>public/assets/img/about/flat/1.png" class="img-content">
                                    <?=$this->getContentDb('about-values-wisdom')?>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="modal fade" id="intellectualModal">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content modal-values">
                            <div class="modal-body">
                                <div class="content">
                                    <img src="<?=BASE_URL?>public/assets/img/about/flat/2.png" class="img-content">
                                    <?=$this->getContentDb('about-values-intellectual')?>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="modal fade" id="loyalModal">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content modal-values">
                            <div class="modal-body">
                                <div class="content">
                                    <img src="<?=BASE_URL?>public/assets/img/about/flat/3.png" class="img-content">
                                    <?=$this->getContentDb('about-values-loyal')?>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="modal fade" id="integrityModal">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content modal-values">
                            <div class="modal-body">
                                <div class="content">
                                    <img src="<?=BASE_URL?>public/assets/img/about/flat/4.png" class="img-content">
                                    <?=$this->getContentDb('about-values-integrity')?>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="modal fade" id="accomplishedModal">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content modal-values">
                            <div class="modal-body">
                                <div class="content">
                                    <img src="<?=BASE_URL?>public/assets/img/about/flat/5.png" class="img-content">
                                    <?=$this->getContentDb('about-values-accomplished')?>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>       
                <div class="modal fade" id="nobleModal">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content modal-values">
                            <div class="modal-body">
                                <div class="content">
                                    <img src="<?=BASE_URL?>public/assets/img/about/flat/6.png" class="img-content">
                                    <?=$this->getContentDb('about-values-noble')?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3 col-3 order-lg-2 order-xl-2 order-1"></div>
            <div class="col-md-9 col-lg-9 col-xl-9 col-12 order-lg-3 order-xl-3 order-2">
                <div class="animate-box row values justify-content-lg-center" data-animate-effect="fadeIn">
                    <h3 class="text-center"><?=$this->getContent('about-values-title')?></h3>
                    <div class="icon-values">
                        <div class="img-values text-center">
                            <img src="<?=BASE_URL?>public/assets/img/about/flat/1.png" class="imgmodal" id="wisdom" onclick="showModal(this)">
                            <?=$this->getContent('about-values-wisdom-dual')?>
                        </div>
                        <div class="img-values text-center">
                            <img src="<?=BASE_URL?>public/assets/img/about/flat/2.png" class="imgmodal" id="intellectual" onclick="showModal(this)">
                            <?=$this->getContent('about-values-intellectual-dual')?>
                        </div>
                        <div class="img-values text-center">
                            <img src="<?=BASE_URL?>public/assets/img/about/flat/3.png" class="imgmodal" id="loyal" onclick="showModal(this)">
                            <?=$this->getContent('about-values-loyal-dual')?>
                        </div>
                        <div class="img-values text-center">
                            <img src="<?=BASE_URL?>public/assets/img/about/flat/4.png" class="imgmodal" id="integrity" onclick="showModal(this)">
                            <?=$this->getContent('about-values-integrity-dual')?>
                        </div>
                        <div class="img-values text-center">
                            <img src="<?=BASE_URL?>public/assets/img/about/flat/5.png" class="imgmodal" id="accomplished" onclick="showModal(this)">
                            <?=$this->getContent('about-values-accomplished-dual')?>
                        </div>
                        <div class="img-values text-center">
                            <img src="<?=BASE_URL?>public/assets/img/about/flat/6.png" class="imgmodal" id="noble" onclick="showModal(this)">
                            <?=$this->getContent('about-values-noble-dual')?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Testimonial Area Wrapper ==-->

<?php
$scriptfooter = <<<EOF
<script type="text/javascript">
    const imgmodal = document.querySelectorAll('.imgmodal')
   
    function showModal(el) {
        const modalName = el.id+'Modal'
        $('#'+modalName).modal('show')
    }

</script>
EOF;
PHP_EOL;
