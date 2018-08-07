<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
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
      <a href="#" class="w3-bar-item w3-button">Home</a>
	  <a href="#" class="w3-bar-item w3-button">About Us</a>
	  <a href="#" class="w3-bar-item w3-button">Services</a>
      <a href="#" class="w3-bar-item w3-button">Portfolios</a>
	  <a href="#" class="w3-bar-item w3-button">Marketplace</a>
	  <a href="#" class="w3-bar-item w3-button">Blog</a>
	  <a href="#" class="w3-bar-item w3-button">Materials</a>
	  <a href="#" class="w3-bar-item w3-button">Contact</a>
	  

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
		   

           </div>

      </div
	  

    <!-- Footer -->
    <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">



    </footer>
	          <h3 class="western" lang="en-US"><strong>Mutation</strong></h3>
<p class="western" lang="en-US">IPRO3D mutation program is for students to develop their creative ideas/products and prototype them using the hi-tech 3d printing technology. The mutation program helps students to fabricate their ideas to product and get expert help if needed by the students. Students can also discuss their problems with the 3d printing community forums and get help from people working in 3d printing, 3d designing, etc.</p>
<p class="western" lang="en-US">Prototyping the innovative ideas and testing them in the real word are the basic need to the time. Being a student, it is not possible for them to get access individually to these hi-tech technologies to make a presentable prototype of their ideas but don’t you worry the mutation program helps students to get access to these hi-tech technologies and use it for prototyping their innovative and creative ideas.</p>
<p class="western" lang="en-US">Students just have to do a free registration in mutation program and access to hi-tech 3d printing latest technology.</p>
<p class="western" lang="en-US">Students registered in mutation program get special privileges of educational pricing and student discounts.</p>

		</div>
	
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
