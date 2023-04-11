<div class="page-header-area bg-img-news" data-bg="<?=BASE_URL?>public/assets/img/business/plant-business-page1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-start">
                    <div class="page-header-content" >
                        <h2 style="text-transform:uppercase; margin-top:5rem"><?=$this->getContent('investor')?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about-area-wrapper sm-top bg-overlay">
    <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-md-12 col-lg-12 order-1">
              <div class="about-content ms-0 contentweb">
                <div class="animate-box business-page-title" data-animate-effect="fadeInUp">
                  <h4 class="title">Profil Perusahaan</h4>
                </div>
                <p class="first-cap animate-box" data-animate-effect="fadeInUp" style="text-align:justify">Wilian Perkasa (WP), adalah merupakan perusahaan Multi Industry, WP didirikan pada tahun 2019.</p>
                <p class="animate-box" data-animate-effect="fadeInUp" style="text-align:justify">Wilian Perkasa adalah perusahaan Multi Industry yang berkembang dengan kegiatan usaha dari Plantation, Agronomy, Pabrik pengolahan Kelapa Sawit, Trading dan Makanan & Minuman, yang menghasilkan portofolio produk berbasis kelapa sawit yang beragam dan unit industry lainnya dengan rantai pasokan yang terintegrasi dan efisien.</p>
                </div>

                <div class="row">
                  <div class="col-6">
                    <div class="card bg-dark text-white">
                      <img src="..." class="card-img" alt="...">
                      <div class="card-img-overlay">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text">Last updated 3 mins ago</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card mb-3" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="<?=BASE_URL?>public/assets/img/Bendera.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title fw-bold" style="color: var(--red-wp)">Mengapa berinvestasi di Wilian Perkasa (WP)?</h5>
                            <p class="card-text">
                              <ul>
                                <li>Visi Misi jangka Panjang dalam Multi Industry yang dinamis.</li>
                                <li>Potensi dan Pengembangan Unit multi bisnis industry yang terdepan dalam produktivitas.</li>
                                <li>Potensi & Jaringan pemasok pihak ke-tiga yang luas dengan ketertelusuran.</li>
                                <li>Mengelola keuangan perusahaan secara optimal dan sehat (revenue, share, dividen). </li>
                                <li>Portofolio produk bernilai tambah yang beragam.</li>
                                <li>Mendorong Transformasi Organisasi ke Budaya Kinerja Tinggi.</li>
                                <li>Meningkatkan pendapatan penjualan hasil usaha dan Standard Hidup.</li>
                              </ul>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row justify-content-center">
                  <div class="business-page">
                    <a class="title">Hubungi Tim Investor Kami : </a>
                    <br /><i class="fa fa-envelope" style="color: var(--red-wp);"></i> <a href="mailto:investor@wilianperkasa.com" class="link" style="
                    color: var(--red-wp);
                    font-weight: 600;">Email : investor@wilianperkasa.com </a>
                    <br />
                    <i class="fa fa-phone" style="color: var(--red-wp);"></i> <a href="tel:085x" class="link" style="
                    color: var(--red-wp);
                    font-weight: 600;">Phone : +628 5xx xxxx </a>
                    <div class="my-1">
                      <a href="<?=BASE_URL?>sustainability/gcg" class="title">Pelajari lebih lanjut tentang Tata Kelola kami : </a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about-area-wrapper bg-overlay">
    <div class="container-fluid" style="border: 0px solid #000;">
        <div class="row">
            <div class="col-md-3 col-lg-2 order-lg-0 order-md-0 order-md-3">
                <?php require_once('sidebar.php')?>
            </div>
            <div class="col-md-9 col-lg-9 order-md-2 order-lg-2 order-2 justify-content-md-end">
            <!-- <h2 class="text-center text-decoration-underline">Statistik Produksi</h2> -->
               
            </div>
        </div>
    </div>
</div>
<?php
$scriptfooter = <<<EOF
<script>
const labels = ['2016','2017','2018','2019','2020','2021','2022'];
const data1 = {
  labels: labels,
  datasets: [
    {
      label: 'Target Produksi CPO',
      data: [30000000,50000000,60000000,70000000,80000000,90000000,60000000],
      backgroundColor: 'rgba(253, 132, 31,0.8)',
      borderColor: 'rgba(253, 132, 31,0.6)',
      tension: 0.3,
    },
    {
      label: 'Realisasi Produksi CPO',
      data: [39620342, 56761917, 103833654, 104503621, 100580728, 100654456, 62588877],
      type: 'line',
      backgroundColor: 'rgb(170, 196, 255,0.8)',
      borderColor: 'rgba(170, 196, 255,0.6)',
      tension: 0.3,
    }
  ],
};

const config1 = {
    type: 'line',
    data: data1,
    options: {
        layout: {
            padding: {
                left:50,
                right:50,
                top:15,
                bottom:10,
            },
        },
        scales: {
            y: {
                beginAtZero: true
            }
        },
        plugins: {
            legend: {
                display: true,
                labels: {
                    color: 'rgb(255, 99, 132)'
                }
            }
        }
    }
  };

const data2 = {
  labels: labels,
  datasets: [
    {
      label: 'Target Produksi PK',
      data: [50000000,70000000,100000000,130000000,160000000,190000000,120000000],
      backgroundColor: 'rgba(253, 132, 31,0.8)',
      borderColor: 'rgba(253, 132, 31,0.6)',
      tension: 0.3,
    },
    {
      label: 'Realisasi Produksi PK',
      data: [69620342, 106761917, 163833654, 174503621, 180580728, 190654456, 122588877],
      type: 'line',
      backgroundColor: 'rgb(170, 196, 255,0.8)',
      borderColor: 'rgba(170, 196, 255,0.6)',
      tension: 0.3,
    }
  ],
};

const config2 = {
    type: 'line',
    data: data2,
    options: {
        layout: {
            padding: {
                left:50,
                right:50,
                top:15,
                bottom:10,
            },
        },
        scales: {
            y: {
                beginAtZero: true,
                suggestedMin: 40000000,
                suggestedMax: 200000000
            }
        },
        plugins: {
            legend: {
                display: true,
                labels: {
                    color: 'rgb(255, 99, 132)'
                }
            }
        }
    }
  };


const data3 = {
  labels: labels,
  datasets: [
    {
      label: 'Target Rendemen CPO',
      data: [17,17.50,18,18,18,18,18],
      backgroundColor: 'rgba(253, 132, 31,0.8)',
      borderColor: 'rgba(253, 132, 31,0.6)',
      tension: 0.3,
    },
    {
      label: 'Realisasi Rendemen CPO',
      data: [18.76, 18.31, 19.06, 19.05, 18.53, 18.12, 17.93],
      type: 'line',
      backgroundColor: 'rgb(170, 196, 255,0.8)',
      borderColor: 'rgba(170, 196, 255,0.6)',
      tension: 0.3,
    }
  ],
};

const config3 = {
    type: 'line',
    data: data3,
    options: {
        layout: {
            padding: {
                left:50,
                right:50,
                top:15,
                bottom:10,
            },
        },
        scales: {
            y: {
                beginAtZero: true,
                suggestedMin: 15,
                suggestedMax: 25
            }
        },
        plugins: {
            legend: {
                display: true,
                labels: {
                    color: 'rgb(255, 99, 132)'
                }
            }
        }
    }
  };

const data4 = {
  labels: labels,
  datasets: [
    {
      label: 'Target Rendemen PK',
      data: [4,4.5,5,5,5,5,5],
      backgroundColor: 'rgba(253, 132, 31,0.8)',
      borderColor: 'rgba(253, 132, 31,0.6)',
      tension: 0.3,
    },
    {
      label: 'Realisasi Rendemen PK',
      data: [4.76, 5.15, 5.2, 5.19, 5.01, 5.02, 5.08],
      type: 'line',
      backgroundColor: 'rgb(170, 196, 255,0.8)',
      borderColor: 'rgba(170, 196, 255,0.6)',
      tension: 0.3, 
    }
  ],
};

const config4 = {
    type: 'line',
    data: data4,
    options: {
        layout: {
            padding: {
                left:50,
                right:50,
                top:15,
                bottom:10,
            },
        },
        scales: {
            y: {
                beginAtZero: true
            }
        },
        plugins: {
            legend: {
                display: true,
                labels: {
                    color: 'rgb(255, 99, 132)'
                }
            }
        }
    }
  };
const myChart1 = new Chart(
    document.getElementById('prodcpo'),
    config1
  );
const myChart2 = new Chart(
    document.getElementById('prodpk'),
    config2
  );
const myChart3 = new Chart(
    document.getElementById('rendcpo'),
    config3
  );
const myChart4 = new Chart(
    document.getElementById('rendpk'),
    config4
  );
</script>
EOF;
?>