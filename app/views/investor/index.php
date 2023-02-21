<div class="about-area-wrapper sm-top">
    <div class="container-fluid" style="border: 0px solid #000;">
        <div class="row">
            <div class="col-md-3 col-lg-2 order-lg-0 order-md-0 order-md-3">
                <?php require_once('sidebar.php')?>
            </div>
            <div class="col-md-9 col-lg-9 order-md-2 order-lg-2 order-2 justify-content-md-end">
            <h2 class="text-center text-decoration-underline">Statistik Produksi</h2>
                <div class="row justify-content-center">
<table class="table" style="margin-bottom: 0px; border- border-style: none;">
<tbody>
<tr>
<td style="border-top: 0px;"><h3 class="title-report">Laporan Produksi CPO</h3></td>
</tr>
</tbody>
</table>
<table class="table table-bordered">
<thead style="background: darkseagreen; color: white; padding: 0.25rem !important;">
<tr><th style="text-align: center;" scope="col" rowspan="2">Keterangan</th><th style="text-align: center;" colspan="7">Target Produksi CPO VS Realisasi Produksi CPO</th></tr>
</thead>
<tbody>
<tr style="background: darkseagreen; color: white; text-align: center;">
<td style="padding: 0.25rem !important;"></td>
<td style="padding: 0.25rem !important;">2016</td>
<td style="padding: 0.25rem !important;">2017</td>
<td style="padding: 0.25rem !important;">2018</td>
<td style="padding: 0.25rem !important;">2019</td>
<td style="padding: 0.25rem !important;">2020</td>
<td style="padding: 0.25rem !important;">2021</td>
<td style="padding: 0.25rem !important;">2022</td>
</tr>
<tr style="text-align:center;">
<td style="padding: 0.25rem !important;">Target Produksi (tonase)</td>
<td style="padding: 0.25rem !important;">30.000</td>
<td style="padding: 0.25rem !important;">50.000</td>
<td style="padding: 0.25rem !important;">60.000</td>
<td style="padding: 0.25rem !important;">70.000</td>
<td style="padding: 0.25rem !important;">80.000</td>
<td style="padding: 0.25rem !important;">90.000</td>
<td style="padding: 0.25rem !important;">110.000</td>
</tr>
<tr style="text-align:center;">
<td style="padding: 0.25rem !important;">Realisasi Produksi (tonase)</td>
<td style="padding: 0.25rem !important;">39.621</td>
<td style="padding: 0.25rem !important;">56.762</td>
<td style="padding: 0.25rem !important;">103.834</td>
<td style="padding: 0.25rem !important;">104.504</td>
<td style="padding: 0.25rem !important;">100.581</td>
<td style="padding: 0.25rem !important;">100.654</td>
<td style="padding: 0.25rem !important;">~</td>
</tr>
</tbody>
</table>
<canvas id="prodcpo" width="400" height="80"></canvas>
<div class="mb-50"></div>
<table class="table" style="margin-bottom: 0px; border- border-style: none;">
<tbody>
<tr>
<td style="border-top: 0px;"><h3 class="title-report">Laporan Produksi PK</h3></td>
</tr>
</tbody>
</table>
<table class="table table-bordered">
<thead style="background: darkseagreen; color: white; padding: 0.25rem !important;">
<tr><th style="text-align: center;" scope="col" rowspan="2">Keterangan</th><th style="text-align: center;" colspan="7">Target Produksi PK VS Realisasi Produksi PK</th></tr>
</thead>
<tbody>
<tr style="background: darkseagreen; color: white; text-align:center;">
<td style="padding: 0.25rem !important;"></td>
<td style="padding: 0.25rem !important;">2016</td>
<td style="padding: 0.25rem !important;">2017</td>
<td style="padding: 0.25rem !important;">2018</td>
<td style="padding: 0.25rem !important;">2019</td>
<td style="padding: 0.25rem !important;">2020</td>
<td style="padding: 0.25rem !important;">2021</td>
<td style="padding: 0.25rem !important;">2022</td>
</tr>
<tr style="text-align: center;">
<td style="padding: 0.25rem !important;">Target Produksi (tonase)</td>
<td style="padding: 0.25rem !important;">50.000</td>
<td style="padding: 0.25rem !important;">70.000</td>
<td style="padding: 0.25rem !important;">100.000</td>
<td style="padding: 0.25rem !important;">130.000</td>
<td style="padding: 0.25rem !important;">160.000</td>
<td style="padding: 0.25rem !important;">190.000</td>
<td style="padding: 0.25rem !important;">120.000</td>
</tr>
<tr style="text-align: center;">
<td style="padding: 0.25rem !important;">Realisasi Produksi (tonase)</td>
<td style="padding: 0.25rem !important;">69.620</td>
<td style="padding: 0.25rem !important;">106.762</td>
<td style="padding: 0.25rem !important;">163.834</td>
<td style="padding: 0.25rem !important;">174.504</td>
<td style="padding: 0.25rem !important;">180.581</td>
<td style="padding: 0.25rem !important;">190.654</td>
<td style="padding: 0.25rem !important;">122.589</td>
</tr>
</tbody>
</table>
<canvas id="prodpk" width="400" height="80"></canvas>
<div class="mb-50"></div>
<table class="table" style="margin-bottom: 0px; border- border-style: none;">
<tbody>
<tr>
<td style="border-top: 0px;"><h3 class="title-report">Laporan Rendemen CPO</h3></td>
</tr>
</tbody>
</table>
<table class="table table-bordered">
<thead style="background: darkseagreen; color: white; padding: 0.25rem !important;">
<tr><th style="text-align: center;" scope="col" rowspan="2">Keterangan</th><th style="text-align: center;" colspan="7">Target Rendemen CPO VS Realisasi Rendemen CPO</th></tr>
</thead>
<tbody>
<tr style="background: darkseagreen; color: white; text-align:center;">
<td style="padding: 0.25rem !important;"></td>
<td style="padding: 0.25rem !important;">2016</td>
<td style="padding: 0.25rem !important;">2017</td>
<td style="padding: 0.25rem !important;">2018</td>
<td style="padding: 0.25rem !important;">2019</td>
<td style="padding: 0.25rem !important;">2020</td>
<td style="padding: 0.25rem !important;">2021</td>
<td style="padding: 0.25rem !important;">2022</td>
</tr>
<tr style="text-align: center;">
<td style="padding: 0.25rem !important;">Target Rendemen (%)</td>
<td style="padding: 0.25rem !important;">17,00</td>
<td style="padding: 0.25rem !important;">17,50</td>
<td style="padding: 0.25rem !important;">18,00</td>
<td style="padding: 0.25rem !important;">18,00</td>
<td style="padding: 0.25rem !important;">18,00</td>
<td style="padding: 0.25rem !important;">18,00</td>
<td style="padding: 0.25rem !important;">18,00</td>
</tr>
<tr style="text-align: center;">
<td style="padding: 0.25rem !important;">Realisasi Rendemen (%)</td>
<td style="padding: 0.25rem !important;">18,76</td>
<td style="padding: 0.25rem !important;">18,31</td>
<td style="padding: 0.25rem !important;">19,06</td>
<td style="padding: 0.25rem !important;">19,05</td>
<td style="padding: 0.25rem !important;">18,53</td>
<td style="padding: 0.25rem !important;">18,12</td>
<td style="padding: 0.25rem !important;">~</td>
</tr>
</tbody>
</table>
<canvas id="rendcpo" width="400" height="80"></canvas>
<div class="mb-50"></div>
<table class="table" style="margin-bottom: 0px; border- border-style: none;">
<tbody>
<tr>
<td style="border-top: 0px;"><h3 class="title-report">Laporan Rendemen PK</h3></td>
</tr>
</tbody>
</table>
<table class="table table-bordered">
<thead style="background: darkseagreen; color: white; padding: 0.25rem !important;">
<tr><th style="text-align: center;" scope="col" rowspan="2">Keterangan</th><th style="text-align: center;" colspan="7">Target Rendemen PK VS Realisasi Rendemen PK</th></tr>
</thead>
<tbody>
<tr style="background: darkseagreen; color: white; text-align:center;">
<td style="padding: 0.25rem !important;"></td>
<td style="padding: 0.25rem !important;">2016</td>
<td style="padding: 0.25rem !important;">2017</td>
<td style="padding: 0.25rem !important;">2018</td>
<td style="padding: 0.25rem !important;">2019</td>
<td style="padding: 0.25rem !important;">2020</td>
<td style="padding: 0.25rem !important;">2021</td>
<td style="padding: 0.25rem !important;">2022</td>
</tr>
<tr style="text-align: center;">
<td style="padding: 0.25rem !important;">Target Rendemen (%)</td>
<td style="padding: 0.25rem !important;">4,00</td>
<td style="padding: 0.25rem !important;">4,50</td>
<td style="padding: 0.25rem !important;">5,00</td>
<td style="padding: 0.25rem !important;">5,00</td>
<td style="padding: 0.25rem !important;">5,00</td>
<td style="padding: 0.25rem !important;">5,00</td>
<td style="padding: 0.25rem !important;">5,00</td>
</tr>
<tr style="text-align: center;">
<td style="padding: 0.25rem !important;">Realisasi Rendemen (%)</td>
<td style="padding: 0.25rem !important;">4,76</td>
<td style="padding: 0.25rem !important;">5,15</td>
<td style="padding: 0.25rem !important;">5,20</td>
<td style="padding: 0.25rem !important;">5,19</td>
<td style="padding: 0.25rem !important;">5,01</td>
<td style="padding: 0.25rem !important;">5,02</td>
<td style="padding: 0.25rem !important;">~</td>
</tr>
</tbody>
</table>
<canvas id="rendpk" width="400" height="80"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sm-top-wt"></div>
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