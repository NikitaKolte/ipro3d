<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="vGraphic.css" rel="stylesheet" type="text/css">
<link href="whatsApp.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
    body, html {
        height: 100%;
        line-height: 1.8;
    }
    /* Full height image header */
    .bgimg-1 {
        background-position: center;
        background-size: cover;
        background-image: url("img/jk-001 copy.png");
        min-height: 100%;
    }
    .w3-bar .w3-button {
        padding: 16px;
    }




         /* Remove the navbar's default margin-bottom and rounded borders */
     .navbar {
         margin-bottom: 0;
         border-radius: 0;
     }

    /* Add a gray background color and some padding to the footer */
    footer {
        background-color: #f2f2f2;
        padding: 25px;
    }

    .carousel-inner img {
        width: 100%; /* Set width to 100% */
        margin: auto;
        min-height:200px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
        .carousel-caption {
            display: none;
        }
    }

</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
        <a href="#home" class="" style="margin-left: 2px;"><img src="img/logo.png"></a>
        <!-- Right-sided navbar links -->
        <div class="w3-right w3-hide-small">
            <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
            <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
            <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
            <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> PRICING</a>
            <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
        </div>
        <!-- Hide right-floated links on small screens and replace them with a menu icon -->

        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
    <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
    <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
    <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<!-- Header with full-height image -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

        <div class="item active">
            <img src="img/banner1.jpg" alt="Image">
            <div class="carousel-caption">
               <!-- <h1>MAHARASHTRA VOCATIONAL TRAINING CENTER</h1>
                <p> Affiliated to Maharashtra State Board of Vocational Education Examination, Mumbai </p>
                <h3>Institute Code: 170523</h3> -->
            </div>
        </div>

        <div class="item">
            <img src="img/banner2.jpg" alt="Image">
            <div class="carousel-caption">
                <!--<h1>MAHARASHTRA VOCATIONAL TRAINING CENTER</h1>
                <p> Affiliated to Maharashtra State Board of Vocational Education Examination, Mumbai </p>
                <h3>Institute Code: 170523</h3> -->
            </div>
        </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
    <!-- How we work  -->
    <div class="container text-center">
        <h1>How We Work</h1>
        <div class="row">
            <div class="col-sm-2">
              <img src="img/logo/idea.png">
                <h3>
                    IDEA
                </h3>
            </div>
            <div class="col-sm-2">
                <img src="img/logo/3dCAD.png">
                <h3>3D CAD<br>
                    Model in<br>
                    STL Format</h3>
            </div>
            <div class="col-sm-2">
                <img src="img/logo/stlUPload.png">
                <h3>
                    Upload<br>
                    Design STL<br>
                    Files on<br>
                    website or<br>
                    email it to us
                </h3>
            </div>
            <div class="col-sm-2">
                <img src="img/logo/getQUta.png">
                <h3>
                    Get Quotation
                </h3>
            </div>
            <div class="col-sm-2">
                <img src="img/logo/3dadative.png">
                <h3>
                    3D Printing<br>
                    Additive<br>
                    manufacturing<br>
                    your product
                </h3>
            </div>
            <div class="col-sm-2">
                <img src="img/logo/delivery.png">
                <h3>
                    Delivery
                </h3>
            </div>

        </div>

    </div>

    <!--  -->

    <!-- PRODUCTIOn  -->
    <div class="container text-center">
        <h1>Prototype Your Product</h1>
        <div class="row">
            <div class="col-sm-2">
                <img src="img/New%20folder/material.png">
                <h1>Material</h1>
                <h3>
                    Select materials<br>
                    from a wide<br>
                    variety in plastics,<br>
                    metals, metal<br>
                    alloys and plastic<br>
                    composites
                </h3>
            </div>
            <div class="col-sm-2">
                <img src="img/New%20folder/quality.png">
                <h1>Quality</h1>
                <h3>We don’t<br>
                    compromise on<br>
                    part / product<br>
                    quality</h3>
            </div>
            <div class="col-sm-2">
                <img src="img/New%20folder/price.png">
                <h1>Price </h1>
                <h3>
                    We provide the<br>
                    best competitive<Br>
                    price compared<br>
                    to any other<br>
                    competitor in<BR>
                    India and world<br>
                    3D printing<Br>
                    market.
                </h3>
            </div>
            <div class="col-sm-2">
                <img src="img/New%20folder/profuction.png">
                <h1>Production</h1>
                <h3>
                    We manufacture all<br>
                    products at a time<br>
                    and help reduce the<br>
                    manufacturing time<br>
                    and cost while<br>
                    maintaining the<br>
                    optimum part quality<br>
                </h3>
            </div>
            <div class="col-sm-2">
                <img src="img/New%20folder/delivery.png">
                <h1>Delivery all<br>
                    over India </h1>
                <h3>

                </h3>
            </div>
            <div class="col-sm-2">
                <img src="img/New%20folder/world.png">
                <h1>World wide
                    delivery</h1>
                <h3>

                </h3>
            </div>

        </div>

    </div>

    <!--  -->

    <!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
    <h3 class="w3-center">ABOUT THE COMPANY</h3>
    <p class="w3-center w3-large">Key features of our company</p>
    <div class="w3-row-padding w3-center" style="margin-top:64px">
        <div class="w3-quarter">
            <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
            <p class="w3-large">Responsive</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
        </div>
        <div class="w3-quarter">
            <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
            <p class="w3-large">Passion</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
        </div>
        <div class="w3-quarter">
            <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
            <p class="w3-large">Design</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
        </div>
        <div class="w3-quarter">
            <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
            <p class="w3-large">Support</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
        </div>
    </div>
</div>

<!-- Promo Section - "We know design" -->
<div class="w3-container w3-light-grey" style="padding:128px 16px">
    <div class="w3-row-padding">
        <div class="w3-col m6">
            <h3>We know design.</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore.</p>
            <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Works</a></p>
        </div>
        <div class="w3-col m6">
            <img class="w3-image w3-round-large" src="img/1%20BHK%20CUT%20SECTION.png" alt="Buildings" width="700" height="394">
        </div>
    </div>
</div>

<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
    <h3 class="w3-center">THE TEAM</h3>
    <p class="w3-center w3-large">The ones who runs this company</p>
    <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-card">
                <img src="img/team/mem1.jpg" alt="Dan" style="width:100%">
                <div class="w3-container">
                    <h3>John Doe</h3>
                    <p class="w3-opacity">CEO & Founder</p>
                    <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                    <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
                </div>
            </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-card">
                <img src="img/team/mem1.jpg" alt="Dan" style="width:100%">
                <div class="w3-container">
                    <h3>Anja Doe</h3>
                    <p class="w3-opacity">Art Director</p>
                    <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                    <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
                </div>
            </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-card">
                <img src="img/team/mem1.jpg" alt="Dan" style="width:100%">
                <div class="w3-container">
                    <h3>Mike Ross</h3>
                    <p class="w3-opacity">Web Designer</p>
                    <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                    <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
                </div>
            </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-card">
                <img src="img/team/mem1.jpg" alt="Dan" style="width:100%">
                <div class="w3-container">
                    <h3>Dan Star</h3>
                    <p class="w3-opacity">Designer</p>
                    <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                    <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
    <div class="w3-quarter">
        <span class="w3-xxlarge">14+</span>
        <br>Partners
    </div>
    <div class="w3-quarter">
        <span class="w3-xxlarge">55+</span>
        <br>Projects Done
    </div>
    <div class="w3-quarter">
        <span class="w3-xxlarge">89+</span>
        <br>Happy Clients
    </div>
    <div class="w3-quarter">
        <span class="w3-xxlarge">150+</span>
        <br>Meetings
    </div>
</div>

<!-- Work Section -->
<div class="w3-container" style="padding:128px 16px" id="work">
    <h3 class="w3-center">OUR WORK</h3>
    <p class="w3-center w3-large">What we've done for people</p>

    <div class="w3-row-padding" style="margin-top:64px">
        <div class="w3-col l3 m6">
            <img src="img/ourwork/wor1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A microphone">
        </div>
        <div class="w3-col l3 m6">
            <img src="img/ourwork/wor2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A microphone">
        </div>
        <div class="w3-col l3 m6">
            <img src="img/ourwork/wor3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A microphone">
        </div>
        <div class="w3-col l3 m6">
            <img src="img/ourwork/wor4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A microphone">
        </div>
    </div>

    <div class="w3-row-padding w3-section">
        <div class="w3-col l3 m6">
            <img src="img/ourwork/wor1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A microphone">
        </div>
        <div class="w3-col l3 m6">
            <img src="img/ourwork/wor2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A microphone">
        </div>
        <div class="w3-col l3 m6">
            <img src="img/ourwork/wor3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A microphone">
        </div>
        <div class="w3-col l3 m6">
            <img src="img/ourwork/wor4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A microphone">
        </div>
    </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
    <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
        <img id="img01" class="w3-image">
        <p id="caption" class="w3-opacity w3-large"></p>
    </div>
</div>

<!-- Skills Section -->
<div class="w3-container w3-light-grey w3-padding-64">
    <div class="w3-row-padding">
        <div class="w3-col m6">
            <h3>Our Skills.</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
                tempor incididunt ut labore et dolore.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
                tempor incididunt ut labore et dolore.</p>
        </div>
        <div class="w3-col m6">
            <p class="w3-wide"><i class="fa fa-camera w3-margin-right"></i>Photography</p>
            <div class="w3-grey">
                <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
            </div>
            <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Web Design</p>
            <div class="w3-grey">
                <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
            </div>
            <p class="w3-wide"><i class="fa fa-photo w3-margin-right"></i>Photoshop</p>
            <div class="w3-grey">
                <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
    <h3 class="w3-center">CONTACT</h3>
    <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
    <div class="w3-row-padding" style="margin-top:64px">
        <div class="w3-half">

            <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i>
                <br>
                IPRO3D TECHNOLOGIES LLP<br>
                Incubation Office<br>
                IPRO3D TECHNOLOGIES LLP,<br>
                C/O Er. Yogesh Pawar,<br>
                Workstation-1, MAGIC, CMIA office,<br>
                Bajaj Bhavan, Near MIDC office,<br>
                Railway Station Road, Aurangabad,<br>
                Maharashtra, India.</p>

            <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i>
                <br>
                Corporate office Manufacturing Facility<br>
                Address:<br>
                IPRO3D TECHNOLOGIES LLP,<br>
                C/O Er. Yogesh Pawar,<br>
                Meridian Status-B, F-7,<br>
                Near Youth Hostel, Kesarsingpura,<br>
                Aurangabad-431005, Maharashtra,<br>
                India.<br>
            </p>
            <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Mobile : +91 9821413663 </p>
            <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: hello@ipro3d.io</p>
            <br>

        </div>
        <div class="w3-half">
            <!-- Add Google Maps -->
            <div id="googleMap" class="w3-greyscale-max" style="width:100%;height:510px;"></div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black">
    <div class="container-fluid">
        <div class="row">
       <div class="col-sm-6">
       <h1>Our Services</h1>
       <h5>3D Printing</h5>
       <h5>3D Scanning</h5>
       <h5>Vacuum resin casting</h5>
       <h5>Soft tooling manufacturing</h5>
       <h5>2D & 3D design services</h5>
       <h5>Design for 3D Printing</h5>
       <h5>Design topology optimization</h5>
       <h5>X-ray tomography</h5>
       <h5>Small Batch production</h5>
       <h5>CNC machining</h5>
       <h5>Many more services…..</h5>

   </div>

    <div class="col-sm-6">
        <div class="w3-xxlarge w3-section">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>


    </div>


        </div>


    </div>
<!--

    <p>Powered by <a href="https://www.mit.asia" title="W3.CSS" target="_blank" class="w3-hover-text-green">MIT COllege,Aurangabad</a></p>
    -->
</footer>

<!-- Add Google Maps -->
<script>
    function myMap()
    {
        myCenter=new google.maps.LatLng(41.878114, -87.629798);
        var mapOptions= {
            center:myCenter,
            zoom:12, scrollwheel: false, draggable: false,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

        var marker = new google.maps.Marker({
            position: myCenter,
        });
        marker.setMap(map);
    }

    // Modal Image Gallery
    function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
        var captionText = document.getElementById("caption");
        captionText.innerHTML = element.alt;
    }


    // Toggle between showing and hiding the sidebar when clicking the menu icon
    var mySidebar = document.getElementById("mySidebar");

    function w3_open() {
        if (mySidebar.style.display === 'block') {
            mySidebar.style.display = 'none';
        } else {
            mySidebar.style.display = 'block';
        }
    }

    // Close the sidebar with the close button
    function w3_close() {
        mySidebar.style.display = "none";
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
