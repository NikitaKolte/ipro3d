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
      <a href="#" class="w3-bar-item w3-button">Overview</a>
	  <a href="#" class="w3-bar-item w3-button">Careers</a>
	  <a href="#" class="w3-bar-item w3-button">History</a>
      <a href="#" class="w3-bar-item w3-button">Our Approach</a>
	  <a href="#" class="w3-bar-item w3-button">Our Team</a>
	  <a href="#" class="w3-bar-item w3-button">Authenticate</a>
	  <a href="#" class="w3-bar-item w3-button">Accuracy</a>

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
	<div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
    <h2 class=""><b>CAREERS</b></h2></div>

	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			<p><b>Job openings</b></p>
			<p>If you are passionate about 3d printing and want to work with a technology driven startup IPRO3D is the perfect place for you.</p>
			<p>Currently we do not have no Job openings but who knows where you could fit in so don’t miss on this opportunity and upload your resume here.</p>
			<div class="quoteblock-01">
			<td><tr><h4>Yogesh Pawar</h4>
			<td><tr><p><b>Managing Director</b></p></tr></td>
			<td><tr><p>IPRO3D is a 3D printing additive manufacturing startup. We provide Idea to product design and prototyping service in various 3D printing additive manufacturing technologies. IPRO3D is a recognized startup by DIPP (Department of Industrial Policy and Promotion), Ministry of Commerce and Industries, Government of India.</tr></td></p>
			</tr></td></div>
			<p><h4><b>Internship</b></h4></p>
			<p>Currently we don’t have any openings For internship but if you don’t want to miss any future opportunity working with us as an intern upload your resume here.</p>

		</div>
	</div>
	
    <td><tr><h4 class=""><b>3D PRINTING BASIC</b></h4></div>
    <div class="vc_tta-container" data-vc-action="collapse"><div class="vc_general vc_tta vc_tta-accordion vc_tta-color-grey vc_tta-style-classic vc_tta-shape-rounded vc_tta-o-shape-group vc_tta-controls-align-left vc_custom_1460097827502">
	<div class="vc_tta-panels-container"><div class="vc_tta-panels"><div class="vc_tta-panel vc_active" id="what" data-vc-content=".vc_tta-panel-body"><div class="vc_tta-panel-heading">
	<h4 class="vc_tta-panel-title vc_tta-controls-icon-position-left"><a href="#what" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">What is 3D Printing?</span>
	<i class="vc_tta-controls-icon vc_tta-controls-icon-plus"></i></a></h4></div><div class="vc_tta-panel-body"></tr></td>
	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			<p>3D printing is a prototyping process whereby an real object is created from a 3D design. The digital 3D-model is saved in STL format and then sent to a 3D printer.</p>

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
