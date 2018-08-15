<!DOCTYPE html>
<html>
<title>IPRO3D-ABOUT_US-Authentic</title>
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
      <div class="container" align="left" style="margin:0px 300px">
           <div class="row">
           </br>
		   </br>
           <h1><b>Authentic</b></h1>
           </div>
      </div>
      <div class="container" align="left" style="margin:0px 50px">
           <div class="row">
           </br>
		   </br>
           <h4><b>Authentic</b></h4>
           </div>
      </div>
      <div class="container" align="left" style="margin:0px 50px">
           <div class="row">
           <p>Technology has made everything simple and easy to understand. Explore the new standerds in 3d printing industry. If you want to make an actual prototype (3d physical object/part) of your 3d CAD model file, IPRO3D is the right place which offers authentic materials and processes for 3d printing models/designs. We make sure that everything you get is of excellent quality</p>
           </div>
      </div>
	  <div class="container" align="left" style="margin:0px 50px">
           <div class="row">
           </br>
		   </br>
           <h4><b>Material Used</b></h4>
           </div>
      </div>
      <div class="container" align="left" style="margin:0px 50px">
           <div class="row">
           <p>IPRO3d offers a wide variety of high quality 3d Printing materials. Making your ideas become real 3d physical object/part in different materials like photopolymer resins, plastics and polymers, metals, alloys, high temperature resistant materials, tough materials, castable materials, etc. Our material have the highest level of dimensional accuracy and material properties. Whether you want to develop unique jewelry designs, scale models for architecture projects or landscapes, prototypes of toys, industrial parts, end use parts or medical devices, IPRO3D assures the premium quality materials for all prototypes according to product requirements. We offer different alternatives of materials like detailed, durable and multicolor also. You can choose the perfect materials alternative for your products.
</br>If you are not very good technically in choosing materials we are always there and can also help you choose it.

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
