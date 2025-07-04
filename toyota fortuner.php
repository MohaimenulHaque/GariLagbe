<?php
session_start();
?>


<!DOCTYPE HTML>
<html>

<head>
    <title>fortuner</title>
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
                    <h1>Toyota Fortuner : (Rs 25.71 - 31.48 Lakh*)</h1>
                </div>
                <div class="single-top">
                    <div class="lsidebar span_1_of_s">
                        <div id="container">
                            <div id="products_example">
                                <div id="products">
                                    <div class="slides_container">
                                        <a href="#" target="_blank"><img src="images/f-1.jpg" alt=" " height=210px width=560px /></a>
                                        <a href="#" target="_blank"><img src="images/f-2.jpg" alt=" " height=210px width=560px /></a>
                                        <a href="#" target="_blank"><img src="images/f-3.jpg" alt=" " height=210px width=560px /></a>
                                        <a href="#" target="_blank"><img src="images/f-4.jpeg" alt=" " height=210px width=560px /></a>

                                    </div>
                                    <ul class="pagination">
                                        <li><a href="#"><img src="images/f-1.jpg" alt=" " /></a></li>
                                        <li><a href="#"><img src="images/f-2.jpg" alt=" " /></a></li>
                                        <li><a href="#"><img src="images/f-3.jpg" alt=" " /></a></li>
                                        <li><a href="#"><img src="images/f-4.jpeg" alt=" " /></a></li>

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
                                    <td>Mileage 15.04 kmpl</td>
                                    <td>Engine 2755 cc</td>

                                </tr>
                                <tr>
                                    <td>Fuel Type: Diesel</td>
                                    <td>BHP: 174.5</td>

                                </tr>
                                <tr>
                                    <td>Service Cost: Rs 30,875/yr</td>
                                    <td>No. of cylinders : 4</td>

                                </tr>
                                <tr>
                                    <td>Fuel Tank: 80L</td>
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
                                    <td>Bootspace :454L</td>
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
                            <th class="text-center" style="font-family: broadway; ">FORTUNER highlights</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>
                                Toyota has confirmed the waiting period for the Fortuner currently ranges between 6-10 weeks, even with its production plant working at 95 per cent of its capacity. Click here for more details.
                                Toyota recently launched the TRD Sportivo version of the Fortuner at an asking price of Rs 31.01 lakh (ex-showroom Delhi). It is based on the 2.8L 4x2 AT variant from the standard lot but gets a host of cosmetic updates. The list includes racy front and rear bumpers, TRD radiator grille, TRD lower grille cover, TRD-marked red and black decals, 18-inch TRD alloy wheels, TRD Sportivo badge at the rear and red stitch accents on the interior trim. The only body colour it is available in is pearl white.
                                Toyota Fortuner prices have increased by up to Rs 1,60,000 with the government increasing cess over GST.
                                The Fortuner is offered in six variants, encompassing two engine options, two transmissions and two drive types. The petrol Fortuner is a 4x2 only, with the 2.7-litre engine being paired with a 5-speed manual or an optional 6-speed automatic. Diesel duties are being carried out by the 2.8-litre motor. This engine gets a choice of a 6-speed manual or a 6-speed automatic, and is made available with four-wheel drive as well.
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