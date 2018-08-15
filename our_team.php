<!DOCTYPE html>
<html>
<title>IPRO3D-ABOUT_US-OurTeam</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .w3-sidebar a {font-family: "Roboto", sans-serif}
    body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<body class="w3-content" style="max-width:1200px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
    <div class="w3-container w3-display-container w3-padding-16">
        <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
        <h3 class="w3-wide"><b><img src="img/logo.png"></b></h3>
    </div>
    <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
       <?php include 'template_link.php';?>
     </div>

</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
    <div class="w3-bar-item w3-padding-24 w3-wide"><img src="img/logo.png"></div>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

    <!-- Push down content on small screens -->
    <div class="w3-hide-large" style="margin-top:83px"></div>

    <!-- Top header -->
      <div class="container">
           <div class="row">
		   </br>
		   </br>
		   <h1><span style="padding-left:350px"></span><b>Our Team</b></h1>
           </br>
		   
           </div>
      </div>
	  <div class="container" align="left" style="margin:0px 50px">
	    <div class="row">
		<div>
		<span style="padding-left:25px"></span>
		 </br>
		 </br>
		 <h4><b>PRINT YOUR OWN IDEA…</b><img src="img/ourwork/wor21.jpg"  align="right" style="margin:0px 0px"></h4>
		 <p>We give you the power to take your custom<br>designs and make them real. <br>Let’s make ideas materialize….</p>
         </br></br></br></br></br></br></br>
		 </div>
		</div>
	  </div>
    <!--  Our Team -->
	  <div class="container">
	    <div class="row">
		<div>
		  <h4 style="margin:0px 50px"><b>Our Team Members</b></h4>
		 <p><img src="img/team/t1.jpg"  align="left" style="margin:0px 50px"><h5><b>Yogesh Pawar</b></h5>Founder and Managing Director</br></br>
             He is a Mechanical Engineer. He heads Business Operations and Business Development.</p>
         </br></br></br></br></br></br></br>
	    </div>
		</div>
	  </div>
      <div class="container">
	    <div class="row">
		<div>
		 <p><img src="img/team/t2.png"  align="left" style="margin:0px 50px"><h5><b>Chandrakant Pawar</b></h5>Co-Founder and Director Finance</br></br></br></br></br></br>
         </p> </br></br></br></br></br>
	    </div>
		</div>
	  </div>
      <div class="container">
	    <div class="row">
		<div>
		 <p><img src="img/team/t3.jpg"  align="left" style="margin:0px 50px"><h5><b>Vivek Mugdal</b></h5>Engineer</p>
		 </br></br></br></br></br></br></br></br></br></br>
	    </div>
		</div>
	  </div>
      <div class="container">
	    <div class="row">
		<div>
		 <p><img src="img/team/t4.jpg"  align="left" style="margin:0px 50px"><h5><b>Yash Pawar</b></h5>Intern</p>
	    </div>
		</div>
	  </div>

    <!-- Footer -->
    <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">



    </footer>



    <!-- End page content -->
</div>

<!-- Newsletter Modal -->

<script>
    // Accordion
    function myAccFunc() {
        var x = document.getElementById("demoAcc");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }

    // Click on the "Jeans" link on page load to open the accordion for demo purposes
    document.getElementById("myBtn").click();


    // Script to open and close sidebar
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }
</script>

</body>
</html>
