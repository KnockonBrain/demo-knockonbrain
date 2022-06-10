<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <script src="https://kit.fontawesome.com/80d99e7a2a.js" crossorigin="anonymous"></script>
        <title></title>
    </head>
    <body>
        <nav>
            <ul class="cul">
                <li><a class="active" href="#">Home</a></li>
            </ul>
        </nav>
        <section>
            <div class="upcontact">
                <h1>Contact Us</h1>
                <p>We are happy to help you. Reach us anytime!</p>
            </div>
        </section>
        <section>
            <div class="touch">
                <h2>Get In Touch</h2>
                <p>We are happy to help you. Reach us anytime!</p>
                
                <div class="boxes">
                    <div class="row">
                        <div class="box">
                            <div><i class="fas fa-map-marker-alt icon"></i></div>
                            <h4>Our Location</h4>
                            <p>259, Tower B1, Spaze IT Park, Sector-49, Gurgaon</p>
                        </div>
                        <div class="box">
                            <div><i class="fas fa-phone icon"></i></div>
                            <h4>Call Us On</h4>
                            <p>+91-8826439673</p>
                            <p>+91-8826439673</p>
                        </div>
                        <div class="box">
                            <div><i class="fas fa-map-marker-alt icon"></i></div>
                            <h4>Email us</h4>
                            <p>contactus@knockonbrain.com</p>
                            <p>reachus@knockonbrain.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="message">
                <div class="row">
                    <div class="map">
                        <div id="googleMap"></div>
                        <script>
                        function myMap() {
                        var mapProp= {
                          center:new google.maps.LatLng(51.508742,-0.120850),
                          zoom:5,
                        };
                        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                        }
                        </script>

                        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
                    </div>
                    <div class="tform">
                        <h3>Send Us A Message</h3>
                        <div class="form">
                            <div class="row">
                                <div class="bn">
                                    <div class="label"><label for="Name" class="">Name</label></div>
                                    <div class=""><input type="text" class="text" id="Name" required></div>
                                </div>
                                <div class="bn">
                                    <div class="label"><label for="Email" class="">Email</label></div>
                                    <div class=""><input type="text" class="text" id="Email" required></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="bn">
                                    <div class="label"><label for="Number" class="">Contact Number</label></div>
                                    <div class=""><input type="text" class="text" id="Number" required></div>
                                </div>
                                <div class="bn">
                                    <div class="label"><label for="Organization" class="">Organization</label></div>
                                    <div class=""><input type="text" class="text" id="Organization" required></div>
                                </div>
                            </div>
                            <div class="bnn">
                                    <div class="label"><label for="Message" class="">Your Message</label></div>
                                    <div class=""><textarea class="text" rows="2"></textarea>
                            </div>
                            <div class="button">
                                <button class="btn">Send</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
