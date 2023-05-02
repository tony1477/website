<div class="page-header-area bg-img-news" data-bg="<?=BASE_URL?>public/assets/img/business/wp-home.jpg" style="background-position: center center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-start">
                    <div class="page-header-content" >
                        <h2 style="text-transform:uppercase; margin-top:5rem"><?=$this->getContent('location-map')?></h2>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== Start About Area Wrapper ==-->
<div class="blog-details-page-content sp-y bg-overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <article class="blog-post-details">
                    <figure class="blog-post-thumb">
                        <img src="<?=BASE_URL?>public/assets/img/business/location-map3.jpg" alt="Blog" class="rounded shadow" />
                    </figure>

                    <div class="animate-box blog-post-txt contentweb">
                        <?php //$data['data']['content']?>
                        <?php //$this->getContentDb('business-certification-content')?>
                        <h3><?=$this->getContent('subsdiary-location')?></h3>
                        <div class="border-bottom"></div>
                       <?=$this->getContentDb('business-location-content')?>

                        <div class="animate-box row">
                            <div class="col-lg-8 col-xl-8 col-12">
                                <div class="row">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th width="50%">Icons</th>
                                                <th>Companies</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="td-subsidiaries"><img src="<?=BASE_URL?>public/assets/img/icons/icon-plant.png" width="32"/> <?=$this->getContent('plantation')?></td>
                                                <td>
                                                    <div class="box-company color-plant"></div>
                                                    <span class="text-location-map">SPS</span>
                                                    <div class="mx-4 subsidiaries-company">PT. Surya Palma Sejahtera</div><br />
                                                    <div class="box-company color-plant"></div>
                                                    <span class="text-location-map">TSP</span>
                                                    <div class="mx-4 subsidiaries-company subsidiaries-company">CV. Tani Sejahtera Perkasa</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td-subsidiaries"><img src="<?=BASE_URL?>public/assets/img/icons/icon-mill.png" width="32"/> <?=$this->getContent('mills')?></td>
                                                <td>
                                                    <div class="box-company color-mill"></div>
                                                    <span class="text-location-map">SSP</span>
                                                    <div class="mx-4 subsidiaries-company">PT. Semunai Sawit Perkasa</div><br />
                                                    <div class="box-company color-mill"></div>
                                                    <span class="text-location-map">SSP II</span>
                                                    <div class="mx-4 subsidiaries-company ssp2">PT. Semunai Sawit Perkasa Unit II</div><br />
                                                    <div class="box-company color-mill"></div>
                                                    <span class="text-location-map">LSP</span>
                                                    <div class="mx-4 subsidiaries-company">PT. Libo Sawit Perkasa</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td-subsidiaries"><img src="<?=BASE_URL?>public/assets/img/icons/icon-ho.png" width="32"/> <?=$this->getContent('head-office')?></td>
                                                <td>
                                                    <div class="box-company color-ho"></div>
                                                    <span class="text-location-map">WMS</span>
                                                    <div class="mx-4 subsidiaries-company">PT. Wilian Multi Sejahtera</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td-subsidiaries"><img src="<?=BASE_URL?>public/assets/img/icons/icon-fnb.png" width="32"/> <?=$this->getContent('fnb')?></td>
                                                <td>
                                                    <div class="box-company color-fnb"></div>
                                                    <span class="text-location-map">KBP</span>
                                                    <div class="mx-4 subsidiaries-company">PT. Karya Boga Perkasa</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td-subsidiaries"><img src="<?=BASE_URL?>public/assets/img/icons/icon-trading.png" width="32"/> <?=$this->getContent('trading')?></td>
                                                <td>
                                                    <div class="box-company color-trading"></div>
                                                    <span class="text-location-map">WTP</span>
                                                    <div class="mx-4 subsidiaries-company">PT. Wilian Trading Perkasa</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td-subsidiaries"><img src="<?=BASE_URL?>public/assets/img/icons/icon-nilam.png" width="32"/> <?=$this->getContent('agronomy')?></td>
                                                <td>
                                                    <div class="box-company color-nilam"></div>
                                                    <span class="text-location-map">SWP</span>
                                                    <div class="mx-4 subsidiaries-company">PT. Serai Wangi Perkasa</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

        </div>
    </div>
</div>
<!--== End About Area Wrapper ==-->
