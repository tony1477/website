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
              <?=$this->getContentDb('investor-page-content')?>
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
// const myChart1 = new Chart(
//     document.getElementById('prodcpo'),
//     config1
//   );
// const myChart2 = new Chart(
//     document.getElementById('prodpk'),
//     config2
//   );
// const myChart3 = new Chart(
//     document.getElementById('rendcpo'),
//     config3
//   );
// const myChart4 = new Chart(
//     document.getElementById('rendpk'),
//     config4
//   );
</script>
EOF;
?>