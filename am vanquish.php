<?php
session_start();
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>vanquish</title>
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
                    <h1>Aston Martin Vanquish : (Rs 3.85 Cr*)</h1>
                </div>
                <div class="single-top">
                    <div class="lsidebar span_1_of_s">
                        <div id="container">
                            <div id="products_example">
                                <div id="products">
                                    <div class="slides_container">
                                        <a href="#" target="_blank"><img src="images/v-1.jpg" alt=" " height=210px width=560px /></a>
                                        <a href="#" target="_blank"><img src="images/v-2.jpg" alt=" " height=210px width=560px /></a>
                                        <a href="#" target="_blank"><img src="images/v-3.jpg" alt=" " height=210px width=560px /></a>
                                        <a href="#" target="_blank"><img src="images/v-4.jpg" alt=" " height=210px width=560px /></a>

                                    </div>
                                    <ul class="pagination">
                                        <li><a href="#"><img src="images/v-1.jpg" alt=" " /></a></li>
                                        <li><a href="#"><img src="images/v-2.jpg" alt=" " /></a></li>
                                        <li><a href="#"><img src="images/v-3.jpg" alt=" " /></a></li>
                                        <li><a href="#"><img src="images/v-4.jpg" alt=" " /></a></li>

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
                                    <td>Mileage 8.0 kmpl</td>
                                    <td>Engine 5935 cc</td>

                                </tr>
                                <tr>
                                    <td>Fuel Type: Petrol</td>
                                    <td>BHP: 565</td>

                                </tr>
                                <tr>
                                    <td>Service Cost: Rs 71,973/yr</td>
                                    <td>No. of cylinders : 12</td>

                                </tr>
                                <tr>
                                    <td>Fuel Tank: 92L</td>
                                    <td>No. of Gears : 8 Speed</td>

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
                                    <td>Transmission : Automatic</td>
                                    <td>ABS : Yes</td>

                                </tr>
                                <tr>
                                    <td>Rear AC vents: Yes</td>
                                    <td>Driver Airbag : Yes</td>

                                </tr>
                                <tr>
                                    <td>Seating capacity: 2</td>
                                    <td>Parking Sensor : Yes</td>

                                </tr>
                                <tr>
                                    <td>Bootspace :315L</td>
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
                            <th class="text-center" style="font-family: broadway; ">VANQUISH highlights</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>
                                With the name that needs no introduction in automobile industry, Aston Martin has come up with all new Vanquish V12. This high profile British company has just introduced the most expensive Aston Martin in India. Let it be the engine, transmission, comfort, safety features it’s almost an impossible task to find any fault in Aston Martin Vanquish V12. The car flies from 0 to 100kmph in just 4.1 seconds and that says everything about the engine and transmission. Vanquish is a D+ segment car that has interiors and exteriors to die for and is a successor of Aston Martin DBS. Under the hood this high class car has a 6 litre V 12 engine which will take anyone’s breath away with 295kmph top speed . This car is a powerhouse of features that Indians might not even have the tiny bit of a clue.
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