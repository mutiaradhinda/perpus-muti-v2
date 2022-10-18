<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  {{-- <link rel="stylesheet" href="{{asset('lte/plugins/fontawesome-free/css/all.min.css')}}"> --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('lte/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('lte/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('lte/plugins/summernote/summernote-bs4.min.css')}}">
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


<!-- Navbar -->
  @include('admin/header')
<!-- /.navbar -->


<!-- Main Sidebar Container -->
  @include('admin/sidebar')
<!-- /.sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Halaman Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="card">
           <div class="card-header bg-primary">
                Rekap
            </div>
            <div class="card-body">
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-primary">
                                    <div class="inner">
                                        <p>Jumlah Buku</p>
                                        <h3>{{ $buku }}</h3>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-book"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                             <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <p>Jumlah Penulis</p>
                                        <h3>{{ $penulis }}</h3>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-pencil-alt"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <p>Jumlah Penerbit</p>
                                        <h3>{{ $penerbit }}</h3>
                                  </div> 
                                  <div class="icon">
                                    <i class="fa fa-building"></i>
                                  </div>
                                  <a href="#" class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                 <div class="small-box bg-danger">
                                    <div class="inner">
                                        <p>Jumlah Kategori</p>
                                        <h3>{{ $kategori }}</h3>
                                    </div>
                                  <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                  </div>
                                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="card">
            <div class="card-header bg-primary">
                Grafik Buku Berdasarkan Penulis
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="charts">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header bg-primary">
                        Grafik Buku Berdasarkan Penerbit
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                   <div id="chartPenerbit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header bg-primary">
                        Grafik Buku Berdasarkan Kategori
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                   <div id="chartKategori">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



                                  
                               
             
    
        <!-- /.row -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    @include('admin/footer')
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('lte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('lte/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('lte/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('lte/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('lte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('lte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('lte/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('lte/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('lte/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('lte/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('lte/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('lte/dist/js/pages/dashboard.js')}}"></script>
<!!-- Grafik -->
<script src="http://code.highcharts.com/highcharts.js"></script>

<script>
  Highcharts.chart('charts', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Penulis Buku'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
            'Henry Manampiring',
            'Leila Salikha Chudori',
            'Sir Arthur Conan Doyle',
            'James Clear',
            'Ardhi Mohamad',
            'Alvi Syahrin'
        ],
        crosshair: true
    },
    yAxis: {
        title: {
            useHTML: true,
            text: 'Jumlah Buku'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Buku',
        data: [15.93, 13.63, 18.73, 16.67, 14.37, 16.67]

    }]
});
</script>

<script>
  Highcharts.chart('chartPenerbit', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Grafik Data Buku'
    },
    subtitle: {
        text: 'Berdasarkan: <a ' +
            'href="https://en.wikipedia.org/wiki/List_of_continents_and_continental_subregions_by_population"' +
            'target="_blank">Penerbit</a>'
    },
    xAxis: {
        categories: ['Bhumi Anoma', 'Kompas', 'Gramedia', 'Baca'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah Buku',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' books'
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Buku',
        data: [300, 700, 1000, 550]
    }]
});
</script>

<script>
  // Create the chart
Highcharts.chart('chartKategori', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Grafik Data Buku'
    },
    subtitle: {
        text: 'Berdasarkan: <a href="http://statcounter.com" target="_blank">Kategori</a>'
    },

    accessibility: {
        announceNewData: {
            enabled: true
        },
        point: {
            valueSuffix: '%'
        }
    },

    plotOptions: {
        series: {
            dataLabels: {
                enabled: true,
                format: '{point.name}: {point.y:.1f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    series: [
        {
            name: "book",
            colorByPoint: true,
            data: [
                {
                    name: "Fiksi",
                    y: 54.04,
                    drilldown: "Chrome"
                },
                {
                    name: "Sejarah",
                    y: 9.47,
                    drilldown: "Safari"
                },
                {
                    name: "Komik",
                    y: 9.32,
                    drilldown: "Edge"
                },
                {
                    name: "Self Improvement",
                    y: 17.02,
                    drilldown: null
                }
            ]
        }
    ],
    drilldown: {
        series: [
            {
                name: "Chrome",
                id: "Chrome",
                data: [
                    [
                        "v97.0",
                        36.89
                    ],
                    [
                        "v96.0",
                        18.16
                    ],
                    [
                        "v95.0",
                        0.54
                    ],
                    [
                        "v94.0",
                        0.7
                    ],
                    [
                        "v93.0",
                        0.8
                    ],
                    [
                        "v92.0",
                        0.41
                    ],
                    [
                        "v91.0",
                        0.31
                    ],
                    [
                        "v90.0",
                        0.13
                    ],
                    [
                        "v89.0",
                        0.14
                    ],
                    [
                        "v88.0",
                        0.1
                    ],
                    [
                        "v87.0",
                        0.35
                    ],
                    [
                        "v86.0",
                        0.17
                    ],
                    [
                        "v85.0",
                        0.18
                    ],
                    [
                        "v84.0",
                        0.17
                    ],
                    [
                        "v83.0",
                        0.21
                    ],
                    [
                        "v81.0",
                        0.1
                    ],
                    [
                        "v80.0",
                        0.16
                    ],
                    [
                        "v79.0",
                        0.43
                    ],
                    [
                        "v78.0",
                        0.11
                    ],
                    [
                        "v76.0",
                        0.16
                    ],
                    [
                        "v75.0",
                        0.15
                    ],
                    [
                        "v72.0",
                        0.14
                    ],
                    [
                        "v70.0",
                        0.11
                    ],
                    [
                        "v69.0",
                        0.13
                    ],
                    [
                        "v56.0",
                        0.12
                    ],
                    [
                        "v49.0",
                        0.17
                    ]
                ]
            },
            {
                name: "Safari",
                id: "Safari",
                data: [
                    [
                        "v15.3",
                        0.1
                    ],
                    [
                        "v15.2",
                        2.01
                    ],
                    [
                        "v15.1",
                        2.29
                    ],
                    [
                        "v15.0",
                        0.49
                    ],
                    [
                        "v14.1",
                        2.48
                    ],
                    [
                        "v14.0",
                        0.64
                    ],
                    [
                        "v13.1",
                        1.17
                    ],
                    [
                        "v13.0",
                        0.13
                    ],
                    [
                        "v12.1",
                        0.16
                    ]
                ]
            },
            {
                name: "Edge",
                id: "Edge",
                data: [
                    [
                        "v97",
                        6.62
                    ],
                    [
                        "v96",
                        2.55
                    ],
                    [
                        "v95",
                        0.15
                    ]
                ]
            },
            {
                name: "Firefox",
                id: "Firefox",
                data: [
                    [
                        "v96.0",
                        4.17
                    ],
                    [
                        "v95.0",
                        3.33
                    ],
                    [
                        "v94.0",
                        0.11
                    ],
                    [
                        "v91.0",
                        0.23
                    ],
                    [
                        "v78.0",
                        0.16
                    ],
                    [
                        "v52.0",
                        0.15
                    ]
                ]
            }
        ]
    }
});
</script>
</body>
</html>
