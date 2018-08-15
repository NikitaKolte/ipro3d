<!DOCTYPE html>
<html>
<title>IPRO3D-ABOUT_US-CompanyEthics</title>
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
           <h1><span style="padding-left:300px"></span><b>Company Ethics</b></h1>
           </div>
      </div>
      <div class="container" align="left" style="margin:0px 50px">
           <div class="row">
		   </br>
		   </br>
           <h4><b>Company Ethics</b></h4>
           </div>
      </div>
      <div class="container" align="left" style="margin:0px 50px">
           <div class="row">
           <p>Every business has its risks and security associated with it. IPRO3D is a leading 3d Printing and 3D CAD modeling company. Whether you are establishing a 3D Model or getting printing services with us, security is our prime concern and responsibility. We understand the importance of valuable designs made by invelsting a lot of time, efforts and creative thinking. You can upload designs with confidence as we take care that no one could download / hack the design. Similarly, all our transmissionas are safe with transcripted environment. Your designs are safe with us and never misused or published without your permission.</p>
           </div>
      </div>
      <div class="container" align="left" style="margin:0px 50px">
           <div class="row">
		   </br>
		   </br>
           <h4><b>1.What Assignments are prohibited at IPRO3D?</b></h4>
           </div>
      </div>
	  <div class="container" align="left" style="margin:0px 50px">
           <div class="row">
           <p>IPRO3D has established its business ethics and policies. We do not accept assignments which conflict with our mission and our business ethics. For example, models devised for weapon industry or models like skimming devices do not qualify at IPRO3D.</p>
           </div>
      </div>
	  <div class="container" align="left" style="margin:0px 50px">
           <div class="row">
		   </br>
		   </br>
           <h4><b>2.Mutual Non-Disclosure Agreements</b></h4>
           </div>
      </div>
      <div class="container" align="left" style="margin:0px 50px">
           <div class="row">
           <p>Mutual Non-disclosure Agreements assures all the confidentiality of the designs, parts, design files, etc. concerns between IPRO3D and consumer/other party.</p>
           </div>
      </div>
	  <div class="container" align="left" style="margin:0px 50px">
           <div class="row">
		   </br>
		   </br>
           <h4><b>3. Our Promise</b></h4>
           </div>
      </div>
      <div class="container" align="left" style="margin:0px 50px">
           <div class="row">
           <p>At IPRO3D we follow all legal and mutual confidentiality agreements at priority because we don’t want our customers worry about it. We assure and promises our customers that their designs, ideas and files safe with us as its security is our prime concern. The files are copyrighted once they are safely uploaded to our secure server by you.
</br>We believe in new collaborations, mututal co-operation and trust. We have consistent business policies and strong business ethics in this concern.

</p>
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
