<?php
session_start();
?>


<!DOCTYPE HTML>
<html>

<head>
    <title>trailblazer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });

            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });

            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (!$clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
    </script>
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <link rel="stylesheet" href="css/global.css">
    <script src="js/slides.min.jquery.js"></script>
    <script>
        $(function() {
            $('#products').slides({
                preload: true,
                preloadImage: 'img/loading.gif',
                effect: 'slide, fade',
                crossfade: true,
                slideSpeed: 350,
                fadeSpeed: 500,
                generateNextPrev: true,
                generatePagination: false
            });
        });
    </script>
</head>

<body>
<?php include('header.php'); ?>
    <div class="header-bottom">
        <div class="wrap">
            <div class="single">
                <div class="box_wrapper">
                    <h1>Chevrolet Trailblazer : (BDT 23.95 Lakh*)</h1>
                </div>
                <div class="single-top">
                    <div class="lsidebar span_1_of_s">
                        <div id="container">
                            <div id="products_example">
                                <div id="products">
                                    <div class="slides_container">
                                        <a href="#" target="_blank"><img src="images/t-1.jpg" alt=" " height=210px width=560px /></a>
                                        <a href="#" target="_blank"><img src="images/t-2.jpg" alt=" " height=210px width=560px /></a>
                                        <a href="#" target="_blank"><img src="images/t-3.jpg" alt=" " height=210px width=560px /></a>
                                        <a href="#" target="_blank"><img src="images/t-4.jpg" alt=" " height=210px width=560px /></a>

                                    </div>
                                    <ul class="pagination">
                                        <li><a href="#"><img src="images/t-1.jpg" alt=" " /></a></li>
                                        <li><a href="#"><img src="images/t-2.jpg" alt=" " /></a></li>
                                        <li><a href="#"><img src="images/t-3.jpg" alt=" " /></a></li>
                                        <li><a href="#"><img src="images/t-4.jpg" alt=" " /></a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid span_2_of_3">
                        <table class="table table-bordered table-responsive table-striped table-hover table-condensed">
                            <thead>
                                <tr>
                                    <th class="text-center" style="font-family: broadway; ">Economy</th>
                                    <th class="text-center" style="font-family: broadway; ">Performance</th>
                                </tr>
                            </thead>

                            <tbody class="text-center">
                                <tr>
                                    <td>Mileage 11.45 kmpl</td>
                                    <td>Engine 2776 cc</td>

                                </tr>
                                <tr>
                                    <td>Fuel Type: Diesel</td>
                                    <td>BHP: 197.2</td>

                                </tr>
                                <tr>
                                    <td>Service Cost: Rs 23,975/yr</td>
                                    <td>No. of cylinders : 4</td>

                                </tr>
                                <tr>
                                    <td>Fuel Tank: 76L</td>
                                    <td>No. of Gears : 6 Speed</td>

                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-bordered table-responsive table-striped table-hover table-condensed">
                            <thead>
                                <tr>
                                    <th class="text-center" style="font-family: broadway; ">Comfort</th>
                                    <th class="text-center" style="font-family: broadway; ">Safety</th>
                                </tr>
                            </thead>

                            <tbody class="text-center">
                                <tr>
                                    <td>Transmission : Manual/Automatic</td>
                                    <td>ABS : Yes</td>

                                </tr>
                                <tr>
                                    <td>Rear AC vents: Yes</td>
                                    <td>Driver Airbag : Yes</td>

                                </tr>
                                <tr>
                                    <td>Seating capacity: 7</td>
                                    <td>Parking Sensor : Yes</td>

                                </tr>
                                <tr>
                                    <td>Bootspace :205L</td>
                                    <td>Air Bag: Yes</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="clear"></div>
                </div>

                <table class="table table-bordered table-responsive table-striped table-hover table-condensed">
                    <thead>
                        <tr>
                            <th class="text-center" style="font-family: broadway; ">TRAILBLAZER highlights</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>
                                Chevrolet India will discontinue sales of all of its products in India effective December 31, 2017. Its Indian facilities will be utilised for export markets only.
                                Chevrolet has launched the Trailblazer to compete with the Toyota Fortuner and the Ford Endeavour. The body-on-frame Trailblazer has replaced the monocoque Chevrolet Captiva in GM India's line-up. The SUV made its way to India via a CBU (Completely Built Up) route and is only offered in a single variant (LTZ) in a 2WD (two wheel drive) setup. Powering the Trailblazer is Chevrolet's 2.8-litre DuraMax diesel engine mated to a six-speed automatic transmission. The oil burner musters class-leading 200PS of peak power and max torque of 500Nm. Chevrolet India has started testing the updated 2017 Trailblazer in the country. The car was recently spied in the NCR region. It is expected to come early next year with more variants and a 4WD (four wheel drive) option, while mechanically it will remain unaltered. In order to give the current Trailblazer a sales boost, Chevrolet has slashed the SUV's price by Rs 3.04 lakh and it now retails for Rs 23.95 lakh, ex-showroom, Delhi.
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="container">
                    <div class="row">

                        <div class="col-sm-4">
                        </div>

                        <div class="col-sm-4">
                            <?php
                            if (isset($_SESSION['s_name'])) {
                                echo '<a href="booking.php" class="btn btn-primary" style =" padding-left: 110px;"><h3>BOOK THE CAR</h3> </a>';
                            } else {
                                echo '<a href="login.php" class="btn btn-primary" style =" padding-left: 110px;"><h3>BOOK THE CAR</h3> </a>';
                            }
                            ?>
                        </div>

                        <div class="col-sm-4">
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    
    
    <?php include('footer.php'); ?>

</body>

</html>