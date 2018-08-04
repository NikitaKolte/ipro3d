<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .dropbtn {
            background-color: white;
            color: black;
            padding: 16px;
            font-size: 16px;
            border: none;
        }
        .menu_btn {
            background-color:white;
            color: black;
            padding: 16px;
            font-size: 16px;
            border: none;
        }
        .menu_btn a{
            background-color: white;
            color: black;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .menu_btn a:hover{
            background-color: #6B2054;
            color: black;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .menu_btn a:visited{
            background-color: white;
            color: black;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #6B2054;}

        .dropdown:hover .dropdown-content {display: block;}

        .dropdown:hover .dropbtn {background-color: #6B2054;}

     #img{
         text-align: center;
     }


        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu .dropdown-menu{
            top: 0;
            left: 100%;
            margin-top: -1px;
        }






        .buttonb {
            background-color: #004A7F;
            -webkit-border-radius: 10px;
            border-radius: 10px;
            border: none;
            color: #FFFFFF;
            cursor: pointer;
            display: inline-block;
            font-family: Arial;
            font-size: 20px;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            -webkit-animation: glowing 1500ms infinite;
            -moz-animation: glowing 1500ms infinite;
            -o-animation: glowing 1500ms infinite;
            animation: glowing 1500ms infinite;
        }
        @-webkit-keyframes glowing {
            0% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
            50% { background-color: #FF0000; -webkit-box-shadow: 0 0 40px #FF0000; }
            100% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
        }

        @-moz-keyframes glowing {
            0% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
            50% { background-color: #FF0000; -moz-box-shadow: 0 0 40px #FF0000; }
            100% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
        }

        @-o-keyframes glowing {
            0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
            50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
            100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
        }

        @keyframes glowing {
            0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
            50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
            100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse"  style="background-color: white;border-style: none;" >

    <div class="container-fluid">
        <div class="navbar-header">
            <img src="img/logo%20(2).JPG" height="100px;">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background-color: #6B2054;">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <br><br>

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li ><button class="menu_btn"><a href="index.php" >Home</a></button></li>
             <li>
                <div class="dropdown">
                    <button class="dropbtn">Projects</button>
                    <div class="dropdown-content">
                        <a href="#">Project1</a>
                        <a href="#">Project2</a>
                        <a href="#">Project3</a>
                    </div>
                </div>
                </li>
                <li ><button class="menu_btn"><a href="#" >About us</a></button></li>
                <li><button class="menu_btn" id="btncontact">Contact Us.</button></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" class="btn btn-default btn-lg" id="myBtn" style="background-color: #6B2054;"><span class="glyphicon glyphicon-log-in"></span>Enquiry</a></li>
            </ul>
        </div>
    </div>

</nav>
<script>
    $(document).ready(function(){
        $('.dropdown-submenu a.test').on("click", function(e){
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });
</script>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background-color: #6B2054;" style="padding:35px 50px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 style="background-color: #6B2054;"><span class="glyphicon glyphicon-user" ></span> Enquiry Form</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
                <form role="form" method="post" action="index.php">
                    <div class="form-group">
                        <label for="usrname"><span ></span> First Full Name</label>
                        <input type="text" class="form-control" name="name"id="usrname" placeholder="Enter First Name">
                    </div>
                    <div class="form-group">
                        <label for="psw"><span ></span> Mobile Number</label>
                        <input type="text" class="form-control" name="mobile" id="psw" placeholder="Enter Mobile Number">
                    </div>
                    <div class="form-group">
                        <label for="psw"><span ></span> Email</label>
                        <input type="text" class="form-control" name="email" id="psw" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="psw"><span ></span> Enquiry For</label>
                        <textarea type="text" class="form-control" name="course" id="psw" > </textarea>
                    </div>
                    <button type="submit" name="enquire" class="btn btn-block"><span ></span> Enquire</button>
                </form>
            </div>
            <div class="modal-footer" style="background-color: #6B2054;">
                <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
            </div>
        </div>

    </div>
</div>



<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content text-center">
            <div class="modal-header" style="background-color: #6B2054;;" style="padding:35px 50px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 style="background-color: #6B2054;"><span class="glyphicon glyphicon-user" ></span> Contact Us</h4>
            </div>


                    <label class="label label-success" style="font-size: larger;font-weight: bolder;">कृष्णसुंदर</label><br><br>
                    <h3> Kamlesh : 7330681177</h3>
                    <h3>Dnyaneshwar:7030682277</h3>
                    <h3>Email : welhomeabd@gmail.com</h3>
                 <div class="modal-footer" style="background-color: #6B2054;">
                    <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                </div>
            </div>
        </div>

</div>


<script>
    $(document).ready(function(){
        $("#myBtn").click(function(){
            $("#myModal").modal();
        });
    });
</script>

<script>
    $(document).ready(function(){
        $("#btncontact").click(function(){
            $("#myModal2").modal();
        });
    });
</script>
<nav>

</body>

</html>