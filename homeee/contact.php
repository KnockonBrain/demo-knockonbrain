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
                <li><a href="index.php">Home</a></li>
                <li><a href="disclaimer.php">Disclaimer</a></li>
                <li><a class="active" href="contact.php">Contact</a></li>
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
                        
                        
                        
                        <script>
      // Initialize and add the map
      function initMap() {
        // The location of Uluru
        const uluru = { lat: -25.344, lng: 131.036 };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 4,
          center: uluru,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
          position: uluru,
          map: map,
        });
      }
    </script>
    <div id="map"></div>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCAhXHzk8k3AgeBw7j0l_UVMmHumNxT5U&callback=initMap&libraries=&v=weekly"
      async
    ></script>              
                      </div>
                        
                    <div class="tform">
                        <h3>Send Us A Message</h3>
                        <p>We would love to hear from you!</p>
                        <div class="sform">
                            <h4>Thanks for contacting us, we will revert you soon!</h4>
                        </div>
                        <div class="dform">
                            <h4>"Error! Try Again"</h4>
                        </div>
                        <form id="myForm" method="POST">
                        <div class="form">
                            <div class="row">
                                <div class="bn">
                                    <div class="label"><label for="Name" class="">Name</label></div>
                                    <div class=""><input type="text" class="text" id="name" required></div>
                                </div>
                                <div class="bn">
                                    <div class="label"><label for="Email" class="">Email</label></div>
                                    <div class=""><input type="text" class="text" id="email" required></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="bn">
                                    <div class="label"><label for="Number" class="">Contact Number</label></div>
                                    <div class=""><input type="text" class="text" id="number" required></div>
                                </div>
                                <div class="bn">
                                    <div class="label"><label for="Organization" class="">Organization</label></div>
                                    <div class=""><input type="text" class="text" id="organization" required></div>
                                </div>
                            </div>
                            <div class="bnn">
                                    <div class="label"><label for="Message" class="">Your Message</label></div>
                                    <div class=""><textarea class="text" rows="2" id="message"></textarea></div>
                            </div>
                            <div class="button">
                                <button class="btn">Send</button>
                            </div>
                        </div>
                        </form>
                    </div>
            
                </div>
            </div>
        </section>
        
        
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">
        //function sendEmail() {
            
           $(document).ready(function() {

        $('.btn').click(function(e) {
      e.preventDefault();
            
            
            var name = $("#name");
            var email = $("#email");
            var number = $("#number");
            var organization = $("#organization");
            var message = $("#message");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(number) && isNotEmpty(organization) && isNotEmpty(message)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       number:number.val(),
                       organization: organization.val(),
                       message: message.val()
                   }, success: function (respons) 
                   {
                        if(respons.status=="success")
                        {
                            $('#myForm')[0].reset();
                            $('.form').css('display','none');
                            $('.sform').css('display','block');
                            $('.dform').css('display',' none');
                            
                        }
                        else if(respons.status=="failed")
                        {
                            $('.dform').css('display','block');
                            $('.sform').css('display','none');
                        }
                   }
                });
            }
        });

      });

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>
    
    
    </body>
</html>
