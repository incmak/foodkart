


<marquee>Manager Signup Disabled for now</marquee>


<html>

  <head>
    <title> Home | FoodKart </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">

  <link rel="stylesheet" type = "text/css" href ="index.css">
   <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>
      	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" class="filterwrapper">
        <defs>
            <svg id="glitchmask-r" width="100%" height="100%" viewbox="0 0 100 100" preserveAspectRatio="none">
                <line class="top-r" x1="0" y1="0" x2="100%" y2="0"> </line>
                <line class="bot-r" x1="0" y1="100%" x2="100%" y2="100%"></line>
            </svg>
            <svg id="glitchmask-g" width="100%" height="100%" viewbox="0 0 100 100" preserveAspectRatio="none">
                <line class="top-g" x1="0" y1="0" x2="100%" y2="0"></line>
                <line class="bot-g" x1="0" y1="100%" x2="100%" y2="100%"></line>
            </svg>

            <filter color-interpolation-filters="sRGB" id="filter" width="100%" heigth="100%" x="0" y="0">
                <feFlood flood-color="black" result="black" />

                <!-- red text start -->
                <feFlood flood-color="red" result="REDTXT_FLOOD_10" />
                <feComposite operator="in" in="REDTXT_FLOOD_10" in2="SourceAlpha" result="REDTXT_COMP_20" />
                <feOffset in="SourceGraphic" dx="-2" dy="0" result="REDTXT_OFFSET_30" />
                <feMerge result="REDTXT_MERGE_40">
                    <feMergeNode in="black" />
                    <feMergeNode in="REDTXT_COMP_20" />
                    <feMergeNode in="REDTXT_OFFSET_30" />
                </feMerge>
                <feImage preserveAspectRatio="none" id="mask-r" result="REDTXT_IMG_50" xlink:href="#glitchmask-r" />
                <feComposite in2="REDTXT_IMG_50" in="REDTXT_MERGE_40" operator="out" result="REDTXT_COMP_60" />
                <!-- red text end -->

                <!-- green text start -->
                <feFlood flood-color="limegreen" result="GREENTXT_FLOOD_10" />
                <feComposite operator="in" in="GREENTXT_FLOOD_10" in2="SourceAlpha" result="GREENTXT_COMP_20" />
                <feOffset in="SourceGraphic" dx="2" dy="0" result="GREENTXT_OFFSET_30" />
                <feMerge result="GREENTXT_MERGE_40">
                    <feMergeNode in="black" />
                    <feMergeNode in="GREENTXT_COMP_20" />
                    <feMergeNode in="GREENTXT_OFFSET_30" />
                </feMerge>
                <feImage preserveAspectRatio="none" id="mask-g" result="GREENTXT_IMG_50" xlink:href="#glitchmask-g" />
                <feComposite in2="GREENTXT_IMG_50" in="GREENTXT_MERGE_40" operator="out" result="GREENTXT_COMP_60" />
                <!-- green text end -->

                <feMerge result="MERGE_10">
                    <feMergeNode in="SourceGraphic" />
                    <feMergeNode in="REDTXT_COMP_60" />
                    <feMergeNode in="GREENTXT_COMP_60" />
                </feMerge>
            </filter>
        </defs>
    </svg>
    
    
   
    
    <figure class="glitch-filter-example">
        <h1 class="glitch-filter-example__filtered-text">Disabled<br><a href="foodlist.php"> </a>
        <script>
    document.write('<a href="' + document.referrer + '">RETURN BACK</a>');
</script> <br> OR 
       <a href="index.php">Return home</a>
        </h1>
  </figure>
  
      <figure class="glitch-filter-example">
  <p class="glitch-filter-example__filtered-text">STAY HOME </p>
  </figure>

  <svg class="glitch-filter-example__demo" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%">
        <text class="glitch-filter-example__filtered-text" y="50" text-anchor="middle" x="50%" transform="translate(0 34)">STAY SAFE</text>
        
    </svg>

      
  
</body>

  <footer class="container-fluid bg-4 text-center">
  <br>
  <p> <!-- copuright --></p>
  <br>
  </footer>
</html>




<?php
/*
<html>

  <head>
    <title> Manager Signup | FoodKart </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/managersignup.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>

  <!--Back to top button..................................................................................-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  <!--Javacript for back to top button....................................................................-->
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">FoodKart</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li  ><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
           
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
            
            </ul>
            </li>
          </ul>
        </div>

      </div>
    </nav>

    <div class="container">
    <div class="jumbotron">
     <h1>Hi Manager, <br> Welcome to <span class="edit"> FoodKart </span></h1>
     <br>
   <p>Get started by creating your account</p>
    </div>
    </div>



    <div class="container" style="margin-top: 4%; margin-bottom: 2%;">
      <div class="col-md-5 col-md-offset-4">
      <div class="panel panel-primary">
        <div class="panel-heading"> Create Account </div>
        <div class="panel-body">
          
        <form role="form" action="manager_registered_success.php" method="POST">
         
          <div class="row">
          <div class="form-group col-xs-12">
            <label for="fullname"><span class="text-danger" style="margin-right: 5px;">*</span> Full Name: </label>
            <div class="input-group">
              <input class="form-control" id="fullname" type="text" name="fullname" placeholder="Your Full Name" required="" autofocus="">
              <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
            </span>
              </span>
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Username: </label>
            <div class="input-group">
              <input class="form-control" id="username" type="text" name="username" placeholder="Your Username" required="">
              <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
            </span>
              </span>
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="email"><span class="text-danger" style="margin-right: 5px;">*</span> Email: </label>
            <div class="input-group">
              <input class="form-control" id="email" type="email" name="email" placeholder="Email" required="">
              <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></label>
            </span>
              </span>
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="contact"><span class="text-danger" style="margin-right: 5px;">*</span> Contact: </label>
            <div class="input-group">
              <input class="form-control" id="contact" type="text" name="contact" placeholder="Contact" required="">
              <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span></label>
            </span>
              
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="address"><span class="text-danger" style="margin-right: 5px;">*</span> Address: </label>
            <div class="input-group">
              <input class="form-control" id="address" type="text" name="address" placeholder="Address" required="">
              <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-home" aria-hidden="true"></label>
            </span>
              </span>
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="password"><span class="text-danger" style="margin-right: 5px;">*</span> Password: </label>
            <div class="input-group">
              <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">
              <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label>
            </span>
              
            </div>           
          </div>
        </div>

        

        <div class="row">
          <div class="form-group col-xs-4">
              <button class="btn btn-primary" type="submit">Submit</button>
          </div>

        </div>
        <label style="margin-left: 5px;">or</label> <br>
       <label style="margin-left: 5px;"><a href="managerlogin.php">Have an account? Login.</a></label>

        </form>

        </div>
        
      </div>
      
    </div>
    </div>
















    </body>

  <footer class="container-fluid bg-4 text-center">
  <br>
  <p> <!-- copuright --> </p>
  <br>
  </footer>
</html>

*/
?>