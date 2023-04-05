<aside class="sidebar-area-wrapper mt-md-80 mt-sm-60" style="position:sticky; top:1.5rem;">
                    <!-- Start Single Sidebar Wrap -->
                    <div class="single-sidebar-item-wrap">
                        <h3 class="sidebar-title">Quick Links</h3>
                        <div class="sidebar-body">
                            <ul class="sidebar-list">
                                <li><a href="<?=BASE_URL?>sustainability/policy" class="<?=((isset($data['active']) && $data['active']=='policy') ? 'active' : '')?>"><?=$this->getContent('sustain-sidebar-policy')?></a></li>
                                <li><a href="<?=BASE_URL?>sustainability/certification" class="<?=((isset($data['active']) && $data['active']=='certification') ? 'active' : '')?>"><?=$this->getContent('sustain-sidebar-certification')?></a></li>
                                <li><a href="<?=BASE_URL?>sustainability/environment" class="<?=((isset($data['active']) && $data['active']=='environment') ? 'active' : '')?>"><?=$this->getContent('sustain-sidebar-environment')?></a></li>
                                <li><a href="<?=BASE_URL?>sustainability/gcg" class="<?=((isset($data['active']) && $data['active']=='community') ? 'active' : '')?>"><?=$this->getContent('sustain-sidebar-gcg')?></a></li>
                                <!-- <li><a href="<?=BASE_URL?>sustainability/osh" class="<?=((isset($data['active']) && $data['active']=='osh') ? 'active' : '')?>">KESEHATAN DAN KESELAMATAN PRODUK</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Sidebar Wrap -->

                    <!-- Start Single Sidebar Wrap -->
                    <!-- <div class="single-sidebar-item-wrap">
                        <div class="sidebar-body">
                            <a href="#"><img src="assets/img/banner-poster.jpg" alt="Poster"></a>
                        </div>
                    </div> -->
                    <!-- End Single Sidebar Wrap -->
                </aside>