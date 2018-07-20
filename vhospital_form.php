
<!DOCTYPE html>
<html>
<style>
input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin:  0 25%;
    display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    text-align: center;
    position:relative;

}

input[type=button] {
    width: 50%;
    background-color: #508abb;
    color: white;
    padding: 14px 20px;
    margin: 0 25%;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-align: center;
    position:relative;

}

input[type=button]:hover {
    background-color: red;
}




</style>
<style type="text/css">
table.space {
  border:1px solid black;
  border-spacing: 25px 15px;
  background-color:red;
  }
td {
  border:1px solid black;
  }
</style>
<!--
	<head>
		<title>Nearest Hospitals</title>
		<link rel="stylesheet" type="text/css" href="user.css"/>					<!-- Links the css file -->
		<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">		 For fitting in all devices 
		<meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	</head>
	<body>
		<div id="container" style="white-space:nowrap">
      <div>
		    <div class="inline-block">
		        <img class="home1" src="homeimg1.jpg" alt="Blood is Life"/>
		    </div>

		    <div class="inline-block"> 
		        <h1 style="text-align:right;color:red;"><em>Nearest Hospitals</em></h1>
		    </div>
      </div>
		</div> 
-->
    <head>
        <link rel="stylesheet" href="vhomepage.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title> Update Information</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    </head>
  <body>

    <!-- Header -->
    <header id="header" class="transparent-nav">
      <div class="container">

        <div class="navbar-header">
          <!-- Logo -->
          <div class="navbar-brand">
          <div>
                <div class="inline-block">
                    <a class="logo" href="homepage.php">
              <img src="./img/homeimg1.jpg" alt="Blood is life">
            </a>
                </div>
              </div>
            
          </div>
          <!-- /Logo -->

          <!-- Mobile toggle -->
          <button class="navbar-toggle">
            <span></span>
          </button>
          <!-- /Mobile toggle -->
        </div>

        <!-- Navigation -->
        <nav id="nav">
          <ul class="main-menu nav navbar-nav navbar-right">        
            <li><a href="hos_homepage.php">Hello </a></li>
            <li><a href="hos_homepage.php">HOME</a></li>
            <li><a href="">Update Data</a></li>
            <li><a href="vhospitalFixed.php">Show Fixed Appointments</a></li>
            <li><a href="vhospital_appointment.php">Check Appointments</a></li>
            <li><a href="hcontact.php">Contact Us</a></li>
            <li><a href="logout.php">SignOut</a></li>
        </ul>
        </nav>
        <!-- /Navigation -->

      </div>
    </header>
    <!-- /Header -->

    <!-- Hero-area -->
    <div class="hero-area">

      <!-- Backgound Image -->
      <div class="bg-image bg-parallax overlay" style="background-image:url(./img/hospital2.jpg)"></div>
      <!-- /Backgound Image -->

      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 text-center">
            <h1 class="white-text">Blood Availability Info</h1>
         </div>
        </div>
      </div>

    </div>
    <!-- /Hero-area -->


    <div>
      <br><br><br><br>
    <div class="w3-row w3-center w3-display-container w3-row-padding">
        <div class="container w3-center" style="margin 0 auto">
            <form method="POST" action="">
            <div class="container w3-center" style="margin: 0 38% ;width :50%">
                <h2 style="text-align: center;margin-right: 45%">Availability</h2>
               <table class = \"w3-center\"id = \"AppTable\" width=50% bgcolor=\"#f0ffff\" cellpadding=\"10\" cellspacing=\"20\"  style=\"empty-cells: hide ;\">
                   <!-- <tr>
                        <th></th>
                        <th><b>Availability</b></th>
                        <br>
<!--                        <th><b>Scarcity</b></th>
                    </tr>-->
                    <tr>
                        <th><b>A+</b></th>
                        <td><input type="number" placeholder="units"name="APA" required></td> <!--in placeholder show previous value using php-->
  <!--                      <td><input type="number" placeholder="units" name="APS" required></td>
      -->              </tr>

                    <tr>
                        <th><b>A-</b></th>
                        <td><input type="number" placeholder="units" name="ANA" required></td>
  <!--                      <td><input type="number" placeholder="units" name="ANS" required></td>
      -->              </tr>
                    <tr>
                        <th><b>B+</b></th>
                        <td><input type="number" placeholder="units" name="BPA" required></td>
  <!--                      <td><input type="number" placeholder="units" name="BPS" required></td>
      -->              </tr>
                    <tr>
                        <th><b>B-</b></th>
                        <td><input type="number" placeholder="units" name="BNA" required></td>
   <!--                     <td><input type="number" placeholder="units" name="BNS" required></td>
       -->             </tr>
                    <tr>
                        <th><b>O+</b></th>
                        <td><input type="number" placeholder="units" name="OPA" required></td>
    <!--                    <td><input type="number" placeholder="units" name="OPS" required></td>
        -->            </tr>
                    <tr>
                        <th><b>O-</b></th>
                        <td><input type="number" placeholder="units" name="ONA" required></td>
    <!--                    <td><input type="number" placeholder="units" name="ONS" required></td>
        -->            </tr>
                    <tr>
                        <th><b>AB+</b></th>
                        <td><input type="number" placeholder="units" name="ABPA" required></td>
    <!--                    <td><input type="number" placeholder="units" name="ABPS" required></td>
        -->            </tr>
                    <tr>
                        <th><b>AB-</b></th>
                        <td><input type="number" placeholder="units" name="ABNA" required></td>
    <!--                    <td><input type="number" placeholder="units" name="ABNS" required></td>
        -->            </tr>
                </table>
                </div>
                    <br>
                    <input  type="submit" name="submit" value="Update" style="margin-left: 5%"> 
                
            </form>
        </div>
    </div>


    </div>

    


	<br><br><br><br><br>	
		<!-- Footer -->

		<div id="footer">
  		<div id="footer_content">
  			<div class="footer_item">
  				<p class="footer_heading">
  					Donate Blood				<!-- Footer Item We can add any link here-->
  				</p>
  				<ul class="footer_list">
  					<li>
  						<a href="https://en.wikipedia.org/wiki/Blood_donation" target = "_blank">Blood Donation</a>		<!-- Have to add any link here-->
  					</li>
  					<li>
  						<a href="https://www.mayoclinic.org/patient-visitor-guide/minnesota/blood-donor-program/faq" target = "_blank">Blood Donation FAQs</a>	<!-- Have to add any link here-->
  					</li>
  					<li>
  						<a href="http://www.cbcc.us/donate-blood/types-of-blood-donation" target = "_blank">Types of Blood Donations</a>		<!-- Have to add any link here-->
  					</li>
  				</ul>
  				<p class="footer_heading">
  					About Blood
  				</p>
  				<ul class="footer_list">
  					<li>
  						<a href="https://www.oneblood.org/about-donating/blood-donor-basics/what-is-blood/" target = "_blank">What is Blood?</a>			<!--Have to add the wipedia link -->
  					</li>
  					<li>
  						<a href="https://www.sandiegobloodbank.org/why-blood-donors-are-always-needed" target = "_blank">Blood is Always Needed</a>	<!-- Have to add any link here-->
  					</li>
  					<li>
  						<a href="http://blog.stridehealth.com/post/save-3-lives-with-1-blood-donation" target = "_blank">How Blood Saves Life</a>		<!-- Have to add any link here-->
  					</li>
  					<li>
  						<a href="https://www.oneindia.com/india/world-blood-donor-day-2017-every-year-india-requires-5-crore-units-of-blood-2464097.html" target = "_blank">Facts & Figures</a>			<!-- Have to add any link here-->
  					</li>
  				</ul>
  			</div>
  			<div class="footer_item">
  				<p class="footer_heading">
  				Get Involved
  				</p>
  				<ul class="footer_list">
  					<li>
  						<a href="http://www.americasblood.org/get-involved/plan-a-blood-drive.aspx" target = "_blank">Plan a Blood Drive</a>		<!-- Have to add any link here-->
  					</li>
  					<li>
  						<a href="https://www.facebook.com/events/499975100119550" target = "_blank">Blood Donation Programs</a>	<!-- Have to add any link here-->
  					</li>
  					<li>
  					<br/>
  					</li>
  				</ul>
  				<p class="footer_heading">
  					About Us
  				</p>
  				<ul class="footer_list">
  					<li>
  						<a href="http://www.iitrpr.ac.in/blood-donation-camp" target = "_blank">What We Do</a>				<!-- Have to add any link here-->
  					</li>
  					<li>
  						<a href="http://www.iitrpr.ac.in/blood-donation-camp" target = "_blank">Our Programmes</a>			<!-- Have to add any link here-->
  					</li>
  				</ul>
  			</div>
  			<div class="footer_item">
  			<p class="footer_heading">
  				Tools & Resources
  			</p>
  			<ul class="footer_list">
  				<li>
  					<a href="https://bloodconnect.wordpress.com/" target = "_blank">Publications</a>					<!-- Have to add any link here-->
  				</li>
  				<li>
  					<a href="https://bloodconnect.wordpress.com/" target = "_blank">Blog</a>							<!-- Have to add any link here-->
  				</li>
  				<li>
  					<a href="contact.php">Contact Us</a>					<!-- Have to add any link here-->
  				</li>
  			</ul>
  			</div>
  			<div class="footer_item">
  				<p class="footer_heading1">   </p>
  			</div>
  			<div class="footer_item_info">
  				<h3>Online blood bank</h3>
  				<ul class="footer_list">
  					<li>Developed and maintained by:</li>
  					<li>Vivek Verma</li>
  					<li>Komal Chugh</li>
  					<li>Ram Krishna</li>
            <li>Prasad Kshirsagar</li>
  				</ul>
  			</div>
  		</div>
  		<div id="bottom-footer" class="row">

					<!-- social -->
					<div class="col-md-4 col-md-push-8">
						<ul class="footer-social">
							<li><a href="https://www.facebook.com/prasad.kshirsagar.33449" class="facebook"target = "_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/Apple/status/989802699465089024" class="twitter"target = "_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://plus.google.com/u/1/115258054141875614692" class="google-plus"target = "_blank"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="https://www.instagram.com/kshirsagar_prasad/" class="instagram"target = "_blank"><i class="fa fa-instagram"></i></a></li>
							<li><a href="https://www.youtube.com/user/narendramodi" class="youtube" target = "_blank"><i class="fa fa-youtube"></i></a></li>
							<li><a href="https://www.linkedin.com/feed/?trk=" class="linkedin" target = "_blank"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
		<div class="clear"></div>
			<div id="footer_bottom">
				<div class="wrapper">
					<p>This site has been made under CSP203 Project</p>
				</div>
			</div>
		</div>
	</div>			
		<!-- preloader -->
		<div id='preloader'><div class='preloader'></div></div>
		<!-- /preloader -->


		<!-- jQuery Plugins -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
		<script type="text/javascript" src="js/google-map.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
   
	</body>
</html>
