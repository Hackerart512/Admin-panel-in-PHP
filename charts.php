<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "link.php" ?>
</head>


<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <?php include "sidebar.php" ?>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <?php include "navbar.php" ?>
            <!--// top-bar -->

            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Charts</h2>
            <!--// main-heading -->

            <!-- Circle Bar chart -->
            <div class="outer-w3-agile mt-3">

                <h4 class="tittle-w3-agileits mb-4">Circle Bar Chart</h4>
                <div class="c-bars d-lg-flex justify-content-around">
                <div class="circle-1-w3">
                <svg class="circular-bars" x="0px" y="0px" xml:space="preserve">

                    <g id="circleBarCharts">

                        <!-- Web Circle Bar Chart -->
                        <g id="circleBar-web-group">
                            <text id="circleBar-web-text" opacity="0" x="200" y="143">WEB</text>
                            <g id="circleBar-web-chart" transform="translate(215,150)"></g>
                            <clippath id="circleBar-web-clipPath">
                                <rect id="circleBar-web-clipLabels" x="205" y="215" width="180" height="0"></rect>
                            </clippath>
                            <g id="circleBar-web-legend" clip-path="url(#circleBar-web-clipPath)">
                                <text id="circleBar-web-values" transform="translate(222,225)"></text>
                                <text id="circleBar-web-labels" transform="translate(277,225)"></text>
                            </g>
                        </g>
                        <!-- END: Web Circle Bar Chart -->

                    </g>

                </svg>
                    
                </div>
                <div class="circle-2-w3">
                    <svg class="circular-bars" x="0px" y="0px" xml:space="preserve">

                    <g id="circleBarCharts">

                        <!-- Mobile Circle Bar Chart -->
                        <g id="circleBar-mobile-group">
                            <text id="circleBar-mobile-text" opacity="0" x="187" y="155">MOBILE</text>
                            <g id="circleBar-mobile-chart" transform="translate(215,150)"></g>
                            <clippath id="circleBar-mobile-clipPath">
                                <rect id="circleBar-mobile-clipLabels" x="205" y="215" width="150" height="0"></rect>
                            </clippath>
                            <g id="circleBar-mobile-legend" clip-path="url(#circleBar-mobile-clipPath)">
                                <text id="circleBar-mobile-values" transform="translate(222,225)"></text>
                                <text id="circleBar-mobile-labels" transform="translate(277,225)"></text>
                            </g>
                        </g>
                        <!-- END: Mobile Circle Bar Chart -->
                    </g>

                </svg>
                    
            
            </div>
            </div>
            </div>
            <!--// Circle Bar chart -->

            <!-- Simple-chart -->
            <div class="outer-w3-agile mt-3">
                <h4 class="tittle-w3-agileits mb-4">Quadratic Curve</h4>
                <canvas class="chart1"></canvas>
            </div>
            <!--// Simple-chart -->

            <!-- Dual-section-chart -->
            <div class="container-fluid">
                <div class="row d-xl-flex justify-content-between">
                    <!-- percentage-circles -->
                    <div class="outer-w3-agile mt-3 text-center col-xl-7">
                        <h4 class="tittle-w3-agileits mb-4">Circle Charts</h4>
                        <ul class="percentg-circles-w3ls d-sm-flex justify-content-around">
                            <li>
                            <div class="chart circle-one">
                                <div class="figure">
                                  <div class="pie"></div>
                                </div>
                                <div class="data-table">
                                  <span class="percent">36%</span>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="chart circle-one">
                                <div class="figure">
                                  <div class="pie"></div>
                                </div>
                                <div class="data-table">
                                  <span class="percent">26%</span>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="chart circle-one">
                                <div class="figure">
                                  <div class="pie"></div>
                                </div>
                                <div class="data-table">
                                  <span class="percent">36%</span>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="chart circle-one">
                                <div class="figure">
                                  <div class="pie"></div>
                                </div>
                                <div class="data-table">
                                  <span class="percent">5%</span>
                                </div>
                            </div>
                            </li>
                          </ul>
                    </div>
                    <!--// percentage-circles -->
                    <div class="outer-w3-agile mt-3 text-center col-xl-4 ml-xl-3">
                        <h4 class="tittle-w3-agileits mb-4">Gauge Meter</h4>
                        <div class="w3_agile_gauge_meter">
                            <div class="js-gauge js-gauge--1 gauge"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Dual-section-chart -->

            <!-- Copyright -->
             <?php include "footer.php" ?>
            <!--// Copyright -->
        </div>
    </div>


    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

    <!-- cirular-bar Js -->
    <script src='js/circle_bar.js'></script>
    <script>
        var chartData = {
            "barCircleMobile": [{
                    "index": 0.3,
                    "value": 17436920,
                    "fill": "#202e66",
                    "label": "WebMd Health"
                },
                {
                    "index": 0.4,
                    "value": 10884799,
                    "fill": "#283874",
                    "label": "Livestrong.com"
                },
                {
                    "index": 0.5,
                    "value": 10257432,
                    "fill": "#2e3e7e",
                    "label": "Everyday Health"
                },
                {
                    "index": 0.6,
                    "value": 6110024,
                    "fill": "#394b91",
                    "label": "About.com"
                },
                {
                    "index": 0.7,
                    "value": 3895612,
                    "fill": "#4a5da6",
                    "label": "Drugs.com"
                },
                {
                    "index": 0.8,
                    "value": 3414585,
                    "fill": "#6273b9",
                    "label": "Alliance Health"
                },
                {
                    "index": 0.9,
                    "value": 3099372,
                    "fill": "#6d7fc7",
                    "label": "Lifescript.com"
                }
            ],
            "barCircleWeb": [{
                    "index": 0.3,
                    "value": 31588490,
                    "fill": "#e04646",
                    "label": "WebMD Health"
                },
                {
                    "index": 0.4,
                    "value": 26260662,
                    "fill": "#e65252",
                    "label": "Everyday Health"
                },
                {
                    "index": 0.5,
                    "value": 24263463,
                    "fill": "#ee6f6f",
                    "label": "Livestrong.com"
                },
                {
                    "index": 0.6,
                    "value": 12795112,
                    "fill": "#5573ea",
                    "label": "About.com Health Section"
                },
                {
                    "index": 0.7,
                    "value": 11959167,
                    "fill": "#4c6ef5",
                    "label": "Healthline"
                },
                {
                    "index": 0.8,
                    "value": 10408917,
                    "fill": "#4263e6",
                    "label": "HealthGrades"
                }
            ]
        };

        function drawBarCircleChart(data, target, values, labels) {
            var w = 362,
                h = 362,
                size = data[0].value * 1.15,
                radius = 200,
                sectorWidth = .1,
                radScale = 25,
                sectorScale = 1.45,
                target = d3.select(target),
                valueText = d3.select(values),
                labelText = d3.select(labels);


            var arc = d3.svg.arc()
                .innerRadius(function (d, i) {
                    return (d.index / sectorScale) * radius + radScale;
                })
                .outerRadius(function (d, i) {
                    return ((d.index / sectorScale) + (sectorWidth / sectorScale)) * radius + radScale;
                })
                .startAngle(Math.PI)
                .endAngle(function (d) {
                    return Math.PI + (d.value / size) * 2 * Math.PI;
                });

            var path = target.selectAll("path")
                .data(data);

            //TODO: seperate color and index from data object, make it a pain to update object order
            path.enter().append("svg:path")
                .attr("fill", function (d, i) {
                    return d.fill
                })
                .attr("stroke", "#D1D3D4")
                .transition()
                .ease("elastic")
                .duration(1000)
                .delay(function (d, i) {
                    return i * 100
                })
                .attrTween("d", arcTween);

            valueText.selectAll("tspan").data(data).enter()
                .append("tspan")
                .attr({
                    x: 50,
                    y: function (d, i) {
                        return i * 14
                    },
                    "text-anchor": "end"
                })
                .text(function (d, i) {
                    return data[i].value
                });

            labelText.selectAll("tspan").data(data).enter()
                .append("tspan")
                .attr({
                    x: 0,
                    y: function (d, i) {
                        return i * 14
                    }
                })
                .text(function (d, i) {
                    return data[i].label
                });

            function arcTween(b) {
                var i = d3.interpolate({
                    value: 0
                }, b);
                return function (t) {
                    return arc(i(t));
                };
            }
        }

        // Animation Queue
        setTimeout(function () {
            drawBarCircleChart(chartData.barCircleWeb, "#circleBar-web-chart", "#circleBar-web-values",
                "#circleBar-web-labels")
        }, 500);
        setTimeout(function () {
            drawBarCircleChart(chartData.barCircleMobile, "#circleBar-mobile-chart", "#circleBar-mobile-values",
                "#circleBar-mobile-labels")
        }, 800);

        d3.select("#circleBar-web-icon")
            .transition()
            .delay(500)
            .duration(500)
            .attr("opacity", "1");
        d3.select("#circleBar-web-text")
            .transition()
            .delay(750)
            .duration(500)
            .attr("opacity", "1");

        d3.select("#circleBar-web-clipLabels")
            .transition()
            .delay(600)
            .duration(1250)
            .attr("height", "150");

        d3.select("#circleBar-mobile-icon")
            .transition()
            .delay(800)
            .duration(500)
            .attr("opacity", "1");
        d3.select("#circleBar-mobile-text")
            .transition()
            .delay(1050)
            .duration(500)
            .attr("opacity", "1");
        d3.select("#circleBar-mobile-clipLabels")
            .transition()
            .delay(900)
            .duration(1250)
            .attr("height", "150");
    </script>
    <!--// cirular-bar Js -->

    <!-- chart1 Js -->
    <script src="js/chart1.js"></script>
    <!--// chart1 Js -->

    <!--// percentage-circles Js -->
    <script src="js/percentage-circles.js"></script>
    <!--// percentage-circles Js -->

    <!-- gauge-meter -->
    <script src="js/raphael-min.js"></script>
    <script src="js/kuma-gauge.jquery.js"></script>

    <script>
        $('.js-gauge--1').kumaGauge({
            value: Math.floor((Math.random() * 99) + 1)
        });

        $('.js-gauge--1').kumaGauge('update', {
            value: Math.floor((Math.random() * 99) + 1),
            fill: '#F34A53',
            gaugeBackground: '#1E4147',
            gaugeWidth: 10,
            showNeedle: false,
            label: {
                display: true,
                left: 'Min',
                right: 'Max',
                fontFamily: 'Helvetica',
                fontColor: '#1E4147',
                fontSize: '11',
                fontWeight: 'bold'
            }
        });


        var update = setInterval(function () {
            var newVal = Math.floor((Math.random() * 99) + 1);
            $('.js-gauge--1').kumaGauge('update', {
                value: newVal
            });
        }, 1000);
    </script>
    <!-- gauge-meter -->

    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>