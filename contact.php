<!-- packages.html page 
Author Name: Mahmood Qureshi
Creation Date: November 5th, 2014
Course: OOSD Fall 2014
Description: Displaying static information for packages.
//-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
        <title>Welcome to The Travel Experts | Contact</title>
        <meta name="description" content="SAIT Fall 2014 Object-Oriented Software Development Project #1 (HTML, CSS, JavaScript, PHP & MySQL)">
        <meta name="author" content="John Nguyen, Megha Patel, Brian Pang, Mahmood Qureshi">
        
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        
        <!-- JavaScript -->
        <script language="javascript" type="text/javascript" src="js/default.js"></script>
        
        <!-- Stylesheets -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome-4.2.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
        <link rel="stylesheet" type="text/css" href="css/transitions.css">
        
        <!-- Google Font Code -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400|Ek+Mukta:400,600,700' rel='stylesheet' type='text/css'>
        
		<!--Google Map Style-->
	<!--	<style>
        #map-canvas {
                     height: 300px;
                     width:300px;
                     }
        </style>
		
		<!--define Google map for agencies position --
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script>
           function initialize() {
              var myLatlng = new google.maps.LatLng(-25.363882,131.044922);
              var myLatlng1 = new google.maps.LatLng(20.363882,100.086612);
              var mapOptions = {
              zoom: 1,
              center: myLatlng
              }
              var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

              var marker = new google.maps.Marker({
                 position: myLatlng,
                 map: map,
                 title: 'Agency 1587968'
              });
  
              var marker1 = new google.maps.Marker({
                 position: myLatlng1,
                 map: map,
                 title: 'Agency 2'
              });
            }

            google.maps.event.addDomListener(window, 'load', initialize);

        </script> //-->
    </head>
    <body>
        <div class="header_wrap">
            <div class="header">
            <div class="logo"><a href="index.html"><img src="img/logo.png" class="img-responsive"></a></div>
            <div class="nav" id="dropmenu">
                <ul>
                    <a href="registration.php"><li>Account <i class="fa fa-chevron-circle-right"></i></li></a>
                    <a href="packages.php"><li>Packages <i class="fa fa-chevron-circle-right"></i></li></a>
                    <a href="#"><li>Support <i class="fa fa-chevron-circle-right"></i></li></a>
                    <a href="contact.php"><li>Contact <i class="fa fa-chevron-circle-right"></i></li></a>
                </ul>
                <!-- <span><i class="fa fa-phone"></i> 1-888-123-4567</span> -->
            </div>
            <div class="nav_mobile" onclick="dropMenu('dropmenu');">
               <i class="fa fa-bars fa-2x"></i>
            </div>
        </div>
        </div>
        <div class="slider" style="background-image:url(img/slider04.jpg);"> <!-- Slider Image -->
             <div class="welcome">
                 <h1>Contact</h1>
            </div>      
        </div>
        <div>
            <a href="#" class="help"><i class="fa fa-question-circle fa-lg"></i></a>
        </div>
                <div>
            <a href="#" class="lang" onclick="dropMenu('flags');"><img src="img/flags/Canada.png" style="margin-right: 10px;"><i class="fa fa-caret-down"></i></a>
        </div>
        <div class="lang_menu" id="flags" onClick="document.getElementById('flags').style.display='none';">
            <ul>
                <li><img src="img/flags/Canada.png"> <strong>EN</strong></li>
                <li><img src="img/flags/France.png"> <strong>FR</strong></li>
                <li><img src="img/flags/Germany.png"> <strong>GE</strong></li>
                <li><img src="img/flags/Japan.png"> <strong>JA</strong></li>
                <li><img src="img/flags/China.png"> <strong>CN</strong></li>
                <li><img src="img/flags/Brazil.png"> <strong>BP</strong></li>
                <li><img src="img/flags/Italy.png"> <strong>IT</strong></li>
                <li><img src="img/flags/Russia.png"> <strong>RU</strong></li>
            </ul>
        </div>
        <div class="container-fluid"> <!-- Start of Container -->
            <!-- Main body begins here -->
            <div id="body">

                <!---display Google Map-->
            <!--    <div id="map-canvas"></div>  //-->
                   <!--- Main Contact information begins here --->
                   <table cellspacing="0" cellpadding="1" border="1" width="300" >
                     <thead>
                        <tr>
                          <th>Agencies</th>
                          <th>Agents</th>
                        </tr>
                     </thead>
                     <tbody style="height:48px; overflow:auto;">
                       <tr>
                         <td rowspan="4">AgencyAddress <br>AgencyCity<br>AgencyProv<br>AgncyPostal<br>AgncyCountry><br>AgtPosition</td>
                         <td >Tom TH. Smith<br> (587)9686733<br>tom@gmail.com<br>junior</td>
                       </tr>
                       <tr>

                         <td >Anny  Wood<br> (587)96865555<br>anny@gmail.com<br>senior</td>
                       </tr>
                       <tr>

                         <td >Tom TH. Smith<br> (587)9686733<br>tom@gmail.com<br>junior</td>
                       </tr>
                       <tr>

                         <td >Tom TH. Smith<br> (587)9686733<br>tom@gmail.com<br>junior</td>
                       </tr>
                       <tr>
                         <td rowspan="2">24 39 street <br>AgencyCity<br>AgencyProv<br>AgncyPostal<br>AgncyCountry><br>AgtPosition</td>
                         <td >Tom TH. Smith<br> (587)9686733<br>tom@gmail.com<br>junior</td>
                       </tr>
                       <tr>

                         <td >Tom TH. Smith<br> (587)9686733<br>tom@gmail.com<br>junior</td>
                       </tr>
                     </tbody>
                   </table>
                
                
            </div> <!-- End of body -->
        </div> <!-- End of Container -->
        <div id="footer">
            <br><p>Copyright &copy; 2014 Travel Experts Inc. All rights reserved.</p>
        </div>
        <a href="#top" class="top"><i class="fa fa-arrow-up fa-lg"></i></a>
    </body>
</html>