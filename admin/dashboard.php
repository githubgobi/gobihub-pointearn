<?php include("lib/common.php");  include("lib/session_check.php"); $menu='dashboard'; ?> <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <title><?php echo COMPANY_NAME; ?></title>

    <!--google font-->
    <?php include("inc/header_scripts.php"); ?>
    
</head>
<body class="app header-fixed left-sidebar-fixed right-sidebar-fixed right-sidebar-overlay right-sidebar-hidden">

    <!--===========header start===========-->
    <?php include("inc/header.php"); ?>
    <!--===========header end===========-->

    <!--===========app body start===========-->
    <div class="app-body">

        <!--left sidebar start-->
        <?php include("inc/sidebar.php"); ?>
        <!--left sidebar end-->

        <!--main contents start-->
        <main class="main-content">
            <!--page title start-->
            <div class="page-title">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="mb-0"> Dashboard
                            </h4>
                        </div>
                        
                    </div>
                </div>
            </div>


            <!--page title end-->


            <div class="container-fluid">

                <!--state widget start-->
                
                <!--state widget end-->

                <div class="row">



                    
                </div>

               

            

        </main>
        <!--main contents end-->

        <!--right sidebar start-->
        <?php include("inc/rightsidebar.php"); ?>
        <!--right sidebar end-->

    </div>
    <!--===========app body end===========-->

    <!--===========footer start===========-->
    <?php include("inc/footer.php"); ?>
    <!--===========footer end===========-->


    <?php include("inc/footer_scripts.php"); ?>
    <!--flot chart -->
    <script src="assets/vendor/flot-chart/jquery.flot.js"></script>
    <script src="assets/vendor/flot-chart/jquery.flot.tooltip.min.js"></script>
    <script src="assets/vendor/flot-chart/jquery.flot.resize.js"></script>
    <script src="assets/vendor/flot-chart/jquery.flot.pie.js"></script>
    <script src="assets/vendor/flot-chart/jquery.flot.stack.js"></script>
    <script src="assets/vendor/flot-chart/jquery.flot.crosshair.js"></script>
    <script src="assets/vendor/flot-chart/jquery.flot.time.js"></script>

    <!--custom chart-->
    <script src="assets/vendor/custom-chart/Chart.min.js"></script>
    <script src="assets/vendor/custom-chart/underscore-min.js"></script>
    <script src="assets/vendor/custom-chart/moment.min.js"></script>
    <script src="assets/vendor/custom-chart/accounting.min.js"></script>
    <!--custom chart init-->
    <script src="assets/vendor/custom-chart/custom-chart-init.js"></script>
    <!--flot initialization-->
    <script src="assets/vendor/flot-chart-init.js"></script>


    <script>
        $(document).ready(function() {

            

            <!--Doughnut echarts init-->

            var dom = document.getElementById("doughnut");
            var dnutChart = echarts.init(dom);

            var app = {};
            option = null;
            option = {
                color: ['#FF518A','#eac459', '#36a2f5','#34bfa3', '#A768F3'],
                tooltip : {
                    trigger: 'item',
                    formatter: '{a} <br/>{b} : {c} ({d}%)'
                },
                legend: {
                    orient : 'vertical',
                    x : 'left',
                    data:['Direct','Mail','Affiliate','AD','Search']
                },
                calculable : true,
                series : [
                    {
                        name:'Source',
                        type:'pie',
                        radius : ['50%', '70%'],
                        data:[
                            {value:335, name:'Direct Cars'},
                            {value:310, name:'Dealers Cars'},
                            {value:234, name:'Mediators Cars'},
                            {value:135, name:'Park & Sale'}
                        ]
                    }
                ]
            };

            if (option && typeof option === "object") {
                dnutChart.setOption(option, false);
            }



        });
        // Multiple Statistics
        var data7_1 = [
            [1000000, 13],
            [2000000, 55],
            [3000000, 198],
            [4000000, 153],
            [5000000, 320],
            [6000000, 220],
            [7000000, 236]
        ];
        var data7_2 = [
            [1000000, 43],
            [2000000, 150],
            [3000000, 80],
            [4000000, 283],
            [5000000, 98],
            [6000000, 125],
            [7000000, 50]
        ];
        $(function() {
            $.plot($("#multi-sates #multi-states-container"), [{
                        data: data7_1,
                        label: "Buy Lead",
                        lines: {
                            fill: false
                        }
                    }, {
                        data: data7_2,
                        label: "Sell Lead",

                        points: {
                            show: true
                        },
                        lines: {
                            show: true
                        },
                        yaxis: 2
                    }
                    ],
                    {
                        series: {
                            lines: {
                                show: true,
                                fill: true
                            },
                            points: {
                                show: true,
                                lineWidth: 2,
                                fill: true,
                                fillColor: "#ffffff",
                                symbol: "circle",
                                radius: 5
                            },
                            shadowSize: 0
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#e5ebf8",
                            borderWidth: 1,
                            borderColor: "#e5ebf8"
                        },
                        colors: ["#36a2f5", "#A768F3"],
                        tooltip: true,
                        tooltipOpts: {
                            defaultTheme: false
                        },
                        xaxis: {
                            mode: "categories"


                        },
                        yaxes: [{
                            /* First y axis */
                        }, {
                            /* Second y axis */
                            position: "right" /* left or right */
                        }]
                    }
            );
        });

        var ctx = document.getElementById('myChart-light').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "My First dataset",
                    backgroundColor: 'rgba(167,104,243,.2)',
                    borderColor: 'rgba(167,104,243,1)',
                    data: [0, 20, 9, 25, 15, 25,18]
                }]


            },

            // Configuration options go here
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },

                scales: {
                    xAxes: [{
                        display: false
                    }],
                    yAxes: [{
                        display: false
                    }]
                },
                elements: {
                    line: {
                        tension: 0.00001,
                        //tension: 0.4,
                        borderWidth: 1
                    },
                    point: {
                        radius: 4,
                        hitRadius: 10,
                        hoverRadius: 4
                    }
                }
            }
        });


        var ctx = document.getElementById('myChart-tow-light').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "My First dataset",
                    backgroundColor: 'rgba(54,162,245,.2)',
                    borderColor: 'rgba(54,162,245,1)',
                    //data: [6.06, 82.2, -22.11, 21.53, -21.47, 73.61, -53.75, -60.32]
                    data: [70, 45, 65, 50, 65, 35, 50]
                }]


            },

            // Configuration options go here
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        display: false
                    }],
                    yAxes: [{
                        display: false
                    }]
                },
                elements: {
                    line: {
                        //tension: 0.00001,
                        tension: 0.4,
                        borderWidth: 1
                    },
                    point: {
                        radius: 4,
                        hitRadius: 10,
                        hoverRadius: 4
                    }
                }
            }
        });

    </script>


</body>
</html>

