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
           <h1><b>Accuracy</b></h1>
           </div>
      </div>
      <div class="container" align="left" style="margin:0px 50px">
           <div class="row">
           </br>
		   </br>
           <h4><b>Accuracy</b></h4>
           </div>
      </div>
	  <div class="container" align="left" style="margin:0px 50px">
           <div class="row">
           <p>You are in the era of technology which has changed the world in an innovative way. Now, it is possible to change the 2D designs into a 3d physical object/part with advanced technological equipment and software solutions. Accuracy, quality and lead time are the key points in 3d printing processes. We at IPRO3D use high end software solutions and equipment which assure greater accuracy and fine quality in the final 3d printed product.</p>
           </div>
      </div>
	  <div class="container" align="left" style="margin:0px 50px">
           <div class="row">
           </br>
           <h4><b>Engineering Specifications</b></h4>
           </div>
      </div>
	  <div class="container" align="left" style="margin:0px 50px">
           <div class="row">
            It is essential to study the engineering specifications of the part before the 3D printing process starts. IPRO3D follows simple steps to achieve perfection in 3d printing process.
</br>Basic steps we follow before we 3d print any part/design/idea.
<ul>
<li>Analysis and detail study of the part for 3d printing.</li>
<li>Study of Prelimanary requirements and developments.</li>
<li>Evaluation and prototyping</li>
</ul>
The accuracy of the 3d printed part is reflected from its 3D design/model.
           </div>
      </div>
	  <div class="container" align="left" style="margin:0px 50px">
           <div class="row">
           </br>
           <h4><b>Authentic Appearance</b></h4>
           </div>
      </div>
	  <div class="container" align="left" style="margin:0px 50px">
           <div class="row">
           <p>The appearance and scale of object are important in 3d printing industry. The carefull analysis, design and rendering of the CAD file with 3D software and tools ensure the authentic appearance of objects. Selection of 3d printing materials also contributes to the appearance and mechanical properties of the part/model/object.
</br></br>Design experts at IPRO3D identify and ensure the printability of the STL file of 3d CAD model to assure the authentic appearance of the models.
</br></br>The process of mapping of drawing form 3d CAD model file to actual 3d printing process is totally taken care by machine and its software’s.
</br></br>The process of mapping the drawing to model is the actual 3d printing process which is totally handeled by the machine. There are several processes associated with 3d printing. However, the basic principle of 3d printing layer by layer remains the same.</p>
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
