<!--== Start Page Header Area ==-->
<div class="page-header-area bg-img-news" data-bg="<?=BASE_URL?>public/assets/img/contact_us.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-inner">
                    <div class="page-header-content">
                        <h2><?=$this->getContent('contact-topbar-title')?></h2>
                        <!-- <p>Businex always try to provide the best Business Solutions for Clinets
                            to grow up their Business very sharply and smoothly.</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->

<!--== Start Contact Page Area Wrapper ==-->
<div class="contact-page-area-wrapper sp-top bg-overlay">
    <div class="container">
        <div class="contact-content-wrap">
            <div class="row">
                <div class="col-lg-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.649463039454!2d101.47618733346462!3d0.5271358181762673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5ad31cdf3cea7%3A0xfae8b0a4ba97ac91!2sGedung%20Wilian%20Perkasa!5e0!3m2!1sid!2sid!4v1677115227893!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col-lg-4">
                    <div class="contact-information contact-method">
                        <div class="contact-info-con">
                            <h3><?=$this->getContent('contact-sidebar-title')?></h3>

                            <div class="widget-item m-0">
                                <address>
                                    <i class="mdi mdi-map-marker-radius" style="margin-left: -.7rem;"></i>
                                    <?=$this->getContent('contact-sidebar-address')?>
                                    <br>
                                    <i class="mdi mdi-web" style="margin-left: -.7rem;"></i> wilianperkasa.com
                                    <br>
                                    <i class="mdi mdi-email" style="margin-left: -.7rem;"></i> info@wilianperkasa.com
                                    <br>
                                    <i class="mdi mdi-phone" style="margin-left: -.7rem;"></i> (+62761) 31953
                                </address>
                            </div>
                            <div class="member-social-icons mt-30">
                                <a href="https://www.instagram.com/wilianperkasa/" target="_blank"><i class="mdi mdi-instagram"></i></a>
                                <a href="https://id.linkedin.com/company/wilian-perkasa" target="_blank"><i class="mdi mdi-linkedin"></i></a>
                                <a href="https://www.youtube.com/@WilianPerkasa" target="_blank"><i class="mdi mdi-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="alert alert-success alert-dismissible fade show d-none cf_alert" role="alert">
                        <strong>Terimakasih!</strong> Pesan Anda sudah kami terima.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="contact-form-area contact-method">
                        <h3><?=$this->getContent('contact-form-title')?></h3>

                        <div class="contact-form-wrap">
                            <form method="post" id="contact-form" name="contact_form">
                            <div class="mb-3 row">
                                <label for="inputPerihal" class="col-sm-2 col-form-label"><?=$this->getContent('contact-form-about')?></label>
                                <div class="col-sm-10">
                                <div class="select_box">
                                <select class="form-select" aria-label="Pilih Perihal">
                                    <?=$this->getContent('contact-form-select')?>
                                    <?=$this->getContent('contact-form-list')?>
                                </select>
                                </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputNama" class="col-sm-2 col-form-label"><?=$this->getContent('contact-form-name')?></label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNama">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPerusahaan" class="col-sm-2 col-form-label"><?=$this->getContent('contact-form-company')?></label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPerusahaan">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputAlamat" class="col-sm-2 col-form-label"><?=$this->getContent('contact-form-address')?></label>
                                <div class="col-sm-10">
                                <textarea class="form-control" id="inputAlamat" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPhone" class="col-sm-2 col-form-label"><?=$this->getContent('contact-form-phone')?></label>
                                <div class="col-sm-10">
                                <input type="tel" class="form-control" id="inputPhone" placeholder="+62 8XX-XXX-XXX">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputEmail" class="col-sm-2 col-form-label"><?=$this->getContent('contact-form-email')?></label>
                                <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail" placeholder="mail@yourdomain.com">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPesan" class="col-sm-2 col-form-label"><?=$this->getContent('contact-form-message')?></label>
                                <div class="col-sm-10">
                                <textarea class="form-control" id="inputPesan" rows="3"></textarea>
                            </div>
                            <div class="single-input-item mb-3 my-5 row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                <button class="btn-outline cf_send" type="submit"><?=$this->getContent('contact-form-send')?></button>
                                <div class="spinner-border d-none cf_loading" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Contact Page Area Wrapper ==-->