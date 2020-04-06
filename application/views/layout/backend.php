<!doctype html>
<html class="no-js" lang="en">
<base href="<?php echo base_url() ?>">

<!-- Tieu Long Lanh Kute -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Diệp Mặc</title>

    <link rel="stylesheet" href="asset/css/foundation.css" />

    <!-- Custom styles for this template -->

    <link rel="stylesheet" href="asset/css/dashboard.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/dripicon.css">
    <link rel="stylesheet" href="asset/css/typicons.css" />
    <link rel="stylesheet" href="asset/css/font-awesome.css" />
    <link rel="stylesheet" href="asset/sass/css/theme.css">
    <!-- pace loader -->
    <script src="asset/js/pace/pace.js"></script>
    <link href="asset/js/pace/themes/orange/pace-theme-flash.css" rel="stylesheet" />
    <link rel="stylesheet" href="asset/js/slicknav/slicknav.css" />
    <script src="asset/js/vendor/modernizr.js"></script>
    <style>
        ul.pagination.phantrang {
            margin-left: 425px
        }

        ul.pagination.phantrang li {
            border: 1px solid;
            padding: 0px 8px;
            border-radius: 5px;
            margin: 3px;
        }

        .table.table.table-hover {
            margin-left: -16px;
        }

        .form-group select {
            margin-top: 6px;
            height: 32px;
            border-radius: 10px;
        }

        .side-bar ul li.anty {
            background-color: #212328;
        }
    </style>
</head>

<?php
$s1 = '';
$s2 = '';
$s3 = '';
$s4 = '';
$s5 = '';
switch ($class) {
    case 'one':
        $s1 = 'anty';
        break;
    case 'two':
        $s2 = 'anty';
        break;
    case 'three':
        $s3 = 'anty';
        break;
    case 'four':
        $s4 = 'anty';
        break;
    case 'five':
        $s5 = 'anty';
        break;
}
?>

<body>
    <!-- preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- End of preloader -->

    <div class="off-canvas-wrap" data-offcanvas>
        <!-- right sidebar wrapper -->
        <div class="inner-wrap">


            <!-- Right sidemenu -->
            <div id="skin-select">
                <!--      Toggle sidemenu icon button -->
                <a id="toggle">
                    <span class="fa icon-menu"></span>
                </a>
                <!--      End of Toggle sidemenu icon button -->

                <div class="skin-part">
                    <div id="tree-wrap">
                        <!-- Profile -->
                        <div class="profile">
                            <img alt="" class="" src="asset/img/logo.png">
                            <h3>Diệp Mặc <small>1.2</small></h3>

                        </div>
                        <!-- End of Profile -->

                        <!-- Menu sidebar begin-->
                        <div class="side-bar">
                            <ul id="menu-showhide" class="topnav slicknav">
                                <li>
                                    <a id="menu-select" class="tooltip-tip" href="index.php/product_controller/index" title="Dashboard">
                                        <i class="icon-monitor"></i>
                                        <span>Dashboard</span>

                                    </a>

                                </li>
                                <li class="<?php echo $s1 ?>">
                                    <a class="tooltip-tip" href="index.php/product_controller/getcate">
                                        <i class=" icon-window"></i>
                                        <span>Danh mục</span>

                                    </a>
                                </li>

                                <li class="<?php echo $s2 ?>">
                                    <a class="tooltip-tip" href="index.php/product_controller/product">
                                        <i class=" icon-preview"></i>
                                        <span>Sản phẩm</span>
                                    </a>
                                </li>

                                <li class="<?php echo $s3 ?>">
                                    <a class="tooltip-tip bill" href="index.php/product_controller/bill">
                                        <i class=" icon-mail"></i>
                                        <span>Đơn đặt hàng&nbsp;


                                            <?php if ($span > 0) { ?>
                                                <small style="margin-left:10px;" class="side-menu-noft bg-blue"><?php echo $span; ?></small>
                                            <?php } ?>

                                        </span>
                                    </a>
                                </li>
                                <li class="<?php echo $s4 ?>">
                                    <a href="index.php/product_controller/getuser">
                                        <i class="icon-document-new"></i>
                                        <span>Người dùng&nbsp;
                                    </a>
                                </li>
                                <li class="<?php echo $s5 ?>">
                                    <a class="tooltip-tip" href="index.php/product_controller/thongke" title="UI">
                                        <i class="icon-align-justify"></i>
                                        <span>Thống kê &nbsp;
                                    </a>

                                </li>
                            </ul>
                        </div>
                        <!-- end of Menu sidebar  -->
                    </div>
                </div>
            </div>
            <!-- end of Rightsidemenu -->



            <div class="wrap-fluid" id="paper-bg">
                <!-- top nav -->
                <div class="top-bar-nest">
                    <nav class="top-bar" data-topbar role="navigation" data-options="is_hover: false">
                        <ul class="title-area left">


                            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                            </li>
                        </ul>

                        <section class="top-bar-section ">
                            <!-- Right Nav Section -->
                            <!-- Left Nav Section -->

                            <form action="index.php/product_controller/Filterproduct" method="post">
                                <ul class="left">
                                    <!-- Search | has-form wrapper -->
                                    <li class="has-form bg-white">
                                        <div class="row collapse">
                                            <div class="large-12 columns">
                                                <div class="form-group">
                                                    <select name="product_cate">
                                                        <?php foreach ($cate as $key) { ?>
                                                            <option value="<?php echo $key['cate_id'] ?>"><?php echo $key['cate_name']  ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="left">
                                    <!-- Search | has-form wrapper -->
                                    <li class="has-form bg-white">
                                        <div class="row collapse">
                                            <div class="large-12 columns">
                                                <div class="form-group">
                                                    <select class="browser-default custom-select" name="product_price">
                                                        <option value="1">Trên 10 triệu</option>
                                                        <option value="2">Từ 10 - 6 triệu </option>
                                                        <option value="3">Từ 6 - 4 triệu </option>
                                                        <option value="4">Dưới 4 triệu</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="left">
                                    <!-- Search | has-form wrapper -->
                                    <li class="has-form bg-white">
                                        <div class="row collapse">
                                            <div class="large-12 columns">
                                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </form>

                            <form action="index.php/product_controller/search" method="post">
                                <ul class="left" style="margin-left:60px">
                                    <!-- Search | has-form wrapper -->
                                    <li class="has-form bg-white">
                                        <div class="row collapse">
                                            <div class="large-12 columns">
                                                <div class="dark"> </div>
                                                <input class="input-top" type="text" name="search" placeholder="search">
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="left">
                                    <!-- Search | has-form wrapper -->
                                    <li class="has-form bg-white">
                                        <div class="row collapse">
                                            <div class="large-12 columns">
                                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </form>


                            <ul class="right">
                                <li class=" has-dropdown bg-white">
                                    <a class="bg-white"><span class="admin-pic-text text-gray">Xin chào, <?php echo $admin ?> </span>
                                    </a>

                                    <ul class="dropdown dropdown-nest profile-dropdown">

                                        <li>
                                            <i class="icon-upload"></i>

                                            <a href="index.php/home/logout">
                                                <h4>Đăng xuất<span class="text-aqua fontello-record"></span></h4>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </section>
                    </nav>
                </div>
                <!-- end of top nav -->

                <!-- breadcrumbs -->
                <ul class="breadcrumbs">
                    <li><a href="index.php/product_controller/index"><span class="entypo-home"></span></a>
                    </li>
                    <li>Dashboard
                    </li>
                    <!--   <ul class="right inline-list">
                        <li>Help Center</a>
                        </li>
                        <li>Mail Support
                        </li>
                    </ul> -->
                </ul>
                <!-- end of breadcrumbs -->



                <!-- Container Begin -->


                <?php $this->load->view($temp) ?>

                <!-- Widget  -->
                <!-- End of Widget  -->



                <footer>
                    <div id="footer">Copyright &copy; 2020 Diep Mac <a>Matirasa</a> Made with <i class="fontello-heart-1 text-green"></i></div>

                </footer>
            </div>

            <!-- End of Container Begin -->








            <!-- Right Menu -->
            <!-- close the off-canvas menu -->
            <a class="exit-off-canvas"></a>
            <!-- End of Right Menu -->
        </div>
        <!-- end paper bg -->

    </div>
    <!-- end of off-canvas-wrap -->

    <!-- end of inner-wrap -->



    <!-- main javascript library -->
    <script type='text/javascript' src="asset/js/jquery.js"></script>
    <script type="text/javascript" src="asset/js/waypoints.min.js"></script>
    <script type='text/javascript' src='asset/js/preloader-script.js'></script>
    <!-- foundation javascript -->
    <script type='text/javascript' src="asset/js/foundation.min.js"></script>
    <script type='text/javascript' src="asset/js/foundation/foundation.html#111111.js"></script>
    <!-- main edumix javascript -->
    <script type='text/javascript' src='asset/js/slimscroll/jquery.slimscroll.js'></script>
    <script type='text/javascript' src='asset/js/slicknav/jquery.slicknav.js'></script>
    <script type='text/javascript' src='asset/js/sliding-menu.js'></script>
    <script type='text/javascript' src='asset/js/scriptbreaker-multiple-accordion-1.js'></script>
    <script type="text/javascript" src="asset/js/number/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="asset/js/circle-progress/jquery.circliful.js"></script>
    <script type='text/javascript' src='asset/js/app.js'></script>
    <!-- additional javascript -->
    <script type='text/javascript' src="asset/js/number-progress-bar/jquery.velocity.min.js"></script>
    <script type='text/javascript' src="asset/js/number-progress-bar/number-pb.js"></script>
    <script type='text/javascript' src="asset/js/loader/loader.js"></script>
    <script type='text/javascript' src="asset/js/loader/demo.js"></script>
    <!-- FLOT CHARTS -->
    <script src="asset/js/flot/jquery.flot.js" type="text/javascript"></script>
    <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
    <script src="asset/js/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
    <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
    <script src="asset/js/flot/jquery.flot.pie.min.js" type="text/javascript"></script>
    <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
    <script src="asset/js/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="asset/js/skycons/skycons.js"></script>
    <script type="text/javascript">
        function ckeckall() {
            var danhsach = document.getElementsByName('checkbox_bill');
            if ($('input.all_ckeckbox').prop('checked')) {
                for (var i = 0; i < danhsach.length; i++) {
                    danhsach[i].checked = true;
                }
            } else {
                for (var i = 0; i < danhsach.length; i++) {
                    danhsach[i].checked = false;
                }
            }

        }
    </script>
    <script type="text/javascript">
        $(document).ready(function(e) {
            $(".bill").click(function(e) {
                $.ajax({
                    type: "Post",
                    url: "<?php echo base_url() ?>index.php/product_controller/updatelevel",
                    data: "data",
                    dataType: "dataType",
                    success: function(response) {
                        location.reload();
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(e) {
            $(".delete").click(function(e) {
                // if ($('input.checkbox_bill').prop('checked')) {
                alert("Bạn chắc chắn muốn xóa?");
                var danhsach = document.getElementsByName('checkbox_bill');
                var chon = [];
                var i = 0;
                for (i; i < danhsach.length; i++) {
                    if (danhsach[i].checked === true) {
                        chon.push(danhsach[i].value);
                    }
                }
                $.ajax({
                    type: "post",
                    url: "<?php echo base_url() ?>index.php/product_controller/delete_bill",
                    data: {
                        chon: chon
                    },
                    dataType: "dataType",
                    success: function(response) {}
                });
                location.reload();
                // }else{

                // }
            });
        });
    </script>
    <script type="text/javascript">
        $(function() {
            "use strict";


            //weather icons
            var icons = new Skycons({
                    "stroke": 0.06,
                    "color": "Gray",
                    "cloudColor": "#666666",
                    "sunColor": "#92cd18",
                    "moonColor": "DodgerBlue",
                    "rainColor": "RoyalBlue",
                    "snowColor": "LightGray",
                    "windColor": "LightSteelBlue",
                    "fogColor": "#65C3DF"
                }),
                list = [
                    "clear-day", "clear-night", "partly-cloudy-day",
                    "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                    "fog"
                ],
                i;

            for (i = list.length; i--;)
                icons.set(list[i], list[i]);
            icons.play()

            /*
             * LINE CHART
             * ----------
             */
            //LINE randomly generated data

            var line_data1 = [
                [1, 800],
                [2, 1500],
                [3, 900],
                [4, 1900],
                [5, 4000],
                [6, 2800],
                [7, 2500],
                [8, 700],
                [9, 1500],
                [10, 1000],
                [11, 2000],
                [12, 4300],
                [13, 1756],
                [14, 2000],
                [15, 1500],
                [16, 1900],
                [17, 1200],
                [18, 2800],
                [19, 3200],
                [20, 2190]
            ];
            var line_data2 = [
                [1, 1800],
                [2, 2900],
                [3, 1950],
                [4, 3450],
                [5, 7000],
                [6, 5300],
                [7, 4890],
                [8, 2300],
                [9, 3900],
                [10, 2900],
                [11, 4500],
                [12, 2200],
                [13, 1120],
                [14, 1459],
                [15, 1100],
                [16, 1189],
                [17, 300],
                [18, 1250],
                [19, 1705],
                [20, 959]

            ];


            $.plot("#line-chart", [line_data1, line_data2], {
                grid: {
                    hoverable: true,
                    borderColor: "#E2E6EE",
                    borderWidth: 1,
                    tickColor: "#E2E6EE"
                },
                series: {
                    shadowSize: 0,
                    lines: {
                        show: true
                    },
                    points: {
                        show: true
                    }
                },
                colors: ["#333333", "#cccccc"],
                lines: {
                    fill: true,
                },
                yaxis: {
                    show: false,
                },
                xaxis: {
                    show: true
                }
            });
            //Initialize tooltip on hover
            $("<div class='tooltip-inner' id='line-chart-tooltip'></div>").css({
                position: "absolute",
                background: "#333333",
                padding: "3px 10px",
                color: "#ffffff",
                display: "none",
                opacity: 0.9
            }).appendTo("body");
            $("#line-chart").bind("plothover", function(event, pos, item) {

                if (item) {
                    var x = item.datapoint[0].toFixed(2),
                        y = item.datapoint[1].toFixed(2);

                    $("#line-chart-tooltip").html(item.series.label + " of " + x + " = " + y)
                        .css({
                            top: item.pageY + 5,
                            left: item.pageX + 5
                        })
                        .fadeIn(200);
                } else {
                    $("#line-chart-tooltip").hide();
                }

            });
            /* END LINE CHART */

            /*
             * FULL WIDTH STATIC AREA CHART
             * -----------------
             */
            var areaData = [
                [2, 88.0],
                [3, 93.3],
                [4, 102.0],
                [5, 108.5],
                [6, 115.7],
                [7, 115.6],
                [8, 124.6],
                [9, 130.3],
                [10, 134.3],
                [11, 141.4],
                [12, 146.5],
                [13, 151.7],
                [14, 159.9],
                [15, 165.4],
                [16, 167.8],
                [17, 168.7],
                [18, 169.5],
                [19, 168.0]
            ];
            $.plot("#area-chart", [areaData], {
                grid: {
                    borderWidth: 0
                },
                series: {
                    shadowSize: 0, // Drawing is faster without shadows
                    color: "#00c0ef"
                },
                lines: {
                    fill: true //Converts the line chart to area chart                        
                },
                yaxis: {
                    show: false
                },
                xaxis: {
                    show: false
                }
            });

            /* END AREA CHART */

        });

        /*
         * Custom Label formatter
         * ----------------------
         */
        function labelFormatter(label, series) {
            return "<div style='font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
        }
    </script>


    <script>
        $(document).foundation();
    </script>



</body>


<!-- Tieu Long Lanh Kute -->

</html>