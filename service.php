<?php 
if(isset($_POST['submit'])){
    $to = "mbedade9056@mymail.stratford.edu"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Service Request";
    $subject2 = "Copy of your service request";
    $message = $first_name . " " . $last_name . " has requested a service appointment." . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    $result= "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>




<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" href="capstone.css" type="text/css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://malsup.github.io/min/jquery.cycle2.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
     <link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen"/>
    <title>Mac Auto Sales Inc</title>
</head>
<body>
    <div id="container">

        <div class="fixed-width">
            <div id="header">
                <div class="logo">
                    <img src="images/myLogo.PNG" />
                </div>
                <div class="address">
                    <p>
                        11834, Chase Wellesley Dr.<br />
                        Richmond VA-23233<br />
                        (804)342-0345
                    </p>
                </div>
                <div class="fbtwitlinks">
                    <div class="square">
                        <a href="https://www.facebook.com/" title="Follow us on Facebook" target="_blank">
                            <img title="Follow us on Facebook" src="images/facebook.PNG" style="width: 25px; height: 25px;" /></a>
                    </div>
                    <div class="square">
                        <a href="https://twitter.com/" title="Follow us on Twitter" target="_blank">
                            <img title="Follow us on Twitter" src="images/twitter.PNG" style="width: 25px; height: 25px;" /></a>
                    </div>
                </div>


            </div>

        </div>

        <div class="break"></div>
        <div id="main-navbar">
            <div class="fixed-width">
                <div id="navbar">
                    <ul class="menu">
                        <li><a href="index.html" title="Home">Home</a></li>
                        <li><a href="inventory.html" title="Inventory">Inventory</a></li>
                        <li><a href="service.php" title="Services">Services</a></li>
                        <li><a href="apply.html" title="Apply Online">Apply Online</a></li>
                        <li><a href="calculator.html" title="Loan Calculator">Loan Calculator</a></li>
                        <li><a href="directions.html" title="Directions">Directions</a></li>
                        <li><a href="about.html" title="About Us">About Us</a></li>
                        <li><a href="contact.html" title="Contact">Contact Us</a></li>
                    </ul>
                </div>

            </div>

        </div>

        <div class="break"></div>
        <div id="main-content">
            <div class="fixed-width">
                <div id="service-content">
                    <div id="serviceRequest">

                     <div class="result">
                   <?php 
                    echo "$result"
                    ?></div>

                        <form id="serviceForm" action="" method="post">

                            <h2>Request a service appointment </h2>
                            <p>Please use our online form to schedule your next service appointment, or call (804) 342-0345.</p>

                            <label for="first_name" class="serviceLabel">First Name :</label>
                            <input type="text" name="first_name" />

                             <label for="last_name" class="serviceLabel">Last Name :</label>
                            <input type="text" name="last_name" />

                            <label for="email" class="serviceLabel">Email Address :</label>
                            <input type="text" name="email" />

                            <label for="phone" class="serviceLabel">Phone :</label>
                            <input type="text" name="phone" id="phone" />

                            <label for="veh-description" class="serviceLabel">Vehicle year, make & model :</label>
                            <input type="text" name="veh-description" />

                            <label for="message" class="serviceLabel">Please describe the service you desire :</label>
                            <textarea name="message"></textarea>

                            <label for="dropoff" class="serviceLabel">When can you drop your vehicle off? </label>
                            <input type="text" name="dropoff" id="dropDate" />


                            <button id="messageBut" name="submit">
                                <img src="images/email.png" style="float: left; position: relative; top: 2px;" />Send Message</button>



                        </form>
                    </div>
                     <div class="break"></div>
                    <div id="serviceList">
                        <div class="heading">
                            <h2>Services we offer at Mac Auto Sales Inc:</h2>
                        </div>
                        <div class="listBox">
                            <div class="listItems">
                                <ul>
                                    <li>Alternator</li>
                                    <li>Battery </li>
                                    <li>Belts</li>
                                    <li>Bent rims</li>
                                    <li>Brake fluid service</li>
                                    <li>Brake pads</li>
                                    <li>Check engine light</li>
                                    <li>Clear fluid leak</li>
                                    <li>Climate control</li>
                                    <li>Clutch</li>
                                    <li>Coolant leak</li>
                                    <li>Dead battery</li>

                                </ul>
                            </div>
                            <div class="listItems">
                                <ul>
                                    <li>Differential</li>
                                    <li>Door locks</li>
                                    <li>Door lock switch</li>
                                    <li>Engine repair</li>
                                    <li>Flat tire</li>
                                    <li>Front end alignment</li>
                                    <li>Fuel injection</li>
                                    <li>Headlamp</li>
                                    <li>Headlights</li>
                                    <li>Key fob </li>
                                    <li>Maintenance light</li>
                                    <li>Moon roof</li>
                                </ul>
                            </div>
                            <div class="listItems">
                                <ul>
                                    <li>Oil leak</li>
                                    <li>Power steering</li>
                                    <li>Radiator</li>
                                    <li>Radiator hose</li>
                                    <li>Red light on dash</li>
                                    <li>Rim</li>
                                    <li>Rotors</li>
                                    <li>Routine service</li>
                                    <li>Service light</li>
                                    <li>Sliding car doors</li>
                                    <li>Starter</li>
                                    <li>Steering rack</li>
                                </ul>
                            </div>
                            <div class="listItems">
                                <ul>
                                    <li>Steering wheel shakes</li>
                                    <li>Sunroof</li>
                                    <li>Suspension</li>
                                    <li>Timing belt</li>
                                    <li>Tire Balance</li>
                                    <li>Tire pressure light</li>
                                    <li>Turn signal</li>
                                    <li>Vibration problems</li>
                                    <li>Warning light</li>
                                    <li>Water pump</li>
                                    <li>Window regulator</li>
                                    <li>Windshield cracks</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="break"></div>
        <div class="fixed-width">
            <div class="footer-nav">
                <ul class="menu-1">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="inventory.html">Inventory</a></li>
                    <li><a href="service.php">Services</a></li>
                    <li><a href="apply.html">Apply Online</a></li>
                    <li><a href="calculator.html">Loan Calculator</a></li>
                    <li><a href="directions.html">Directions</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
        </div>

         <div class="fixed-width">
        <div class="disclaimer">            
            <p style=" padding:10px;">All the content on this site is used for academic purposes only and not intended for commercial use. <br />Stratford University(Glen Allen Campus-07/2015).</p>
        </div>
            </div>
         <a href="#" class="back-to-top" style="display: inline;">
<i class="fa fa-arrow-circle-up"></i>
</a>



    </div>
    <script>
        $(document).ready(function () {
            $("#dropDate").datepicker({
                showOn: "button",
                buttonImage: "images/calender.JPG",

                buttonImageOnly: true,


            })
        });
    </script>

     <script>
         jQuery(document).ready(function () {
             var offset = 250;
             var duration = 300;
             jQuery(window).scroll(function () {
                 if (jQuery(this).scrollTop() > offset) {
                     jQuery('.back-to-top').fadeIn(duration);
                 } else {
                     jQuery('.back-to-top').fadeOut(duration);
                 }
             });

             jQuery('.back-to-top').click(function (event) {
                 event.preventDefault();
                 jQuery('html, body').animate({ scrollTop: 0 }, duration);
                 return false;
             })
         });
</script>



</body>
</html>