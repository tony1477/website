<aside class="sidebar-area-wrapper mt-md-80 mt-sm-60" style="position: sticky; top:7rem">
                    <!-- Start Single Sidebar Wrap -->
                    <div class="single-sidebar-item-wrap">
                        <!-- <h3 class="sidebar-title">NAVIGATION</h3> -->
                        <div class="sidebar-body">
                            <ul class="sidebar-list">
                                <li><a href="<?=BASE_URL?>about/profile" class="<?=((isset($data['active']) && $data['active']=='profile') ? 'active' : '')?>"><?=$this->getContent('about-sidebar-profile')?></a></li>
                                <li><a href="<?=BASE_URL?>about/vision" class="<?=((isset($data['active']) && $data['active']=='vision') ? 'active' : '')?>" ><?=$this->getContent('about-sidebar-vision')?></a></li>
                                <li><a href="<?=BASE_URL?>about/strategic" class="<?=((isset($data['active']) && $data['active']=='strategic') ? 'active' : '')?>"><?=$this->getContent('about-sidebar-strategic')?></a></li>
                                <li><a href="<?=BASE_URL?>about/bod" class="<?=((isset($data['active']) && $data['active']=='bod') ? 'active' : '')?>"><?=$this->getContent('about-sidebar-bod')?></a></li>
                                <li><a href="<?=BASE_URL?>about/structureorg" class="<?=((isset($data['active']) && $data['active']=='structure') ? 'active' : '')?>"><?=$this->getContent('about-sidebar-structure')?></a></li>
                                <li><a href="<?=BASE_URL?>about/milestone" class="<?=((isset($data['active']) && $data['active']=='milestone') ? 'active' : '')?>"><?=$this->getContent('about-sidebar-milestone')?></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Sidebar Wrap -->
</aside>