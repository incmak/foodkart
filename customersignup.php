<html>

  <head>
    <title> User Signup | FoodKart </title>
    
       <link rel="stylesheet" type = "text/css" href ="css/managerlogin.css">
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
      
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/managersignup.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>
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
<!--
    <div class="container">
    <div class="jumbotron">
   <p align="center">Get started by creating your account<span class="edit"> FoodKart </span></p>
    </div>
    </div> -->




      <div class="col-md-5 col-md-offset-4">
      <div class="panel panel-primary">
       
       
		<div class="container-login100">
			<div class="wrap-login100">
        
        
        <div class="panel-body">
          
        <form "login100-form validate-form p-b-33 p-t-5" role="form" action="customer_registered_success.php" method="POST">
         
    <span class="login100-form-avatar">
					<a href ="login.php">	<img src="images/avatar-01.png" alt="AVATAR"> </a>
					</span>

         <div class="wrap-input100 validate-input m-b-50" data-validate="Enter Contact">
             <input class="input100" id="fulname" type="text" name="fullname" placeholder="Full Name" required="" autofocus="">
                  
        </div>
        

        <div class="wrap-input100 validate-input m-b-50" data-validate="Enter Username">
             <input class="input100" id="username" type="text" name="username" placeholder="username" required="">
                  
        </div>

         <div class="wrap-input100 validate-input m-b-50" data-validate="Enter Email">
             <input class="input100" id="email" type="text" name="email" placeholder="Email" required="">
                  
        </div>
         
         
          <div class="wrap-input100 validate-input m-b-50" data-validate="Enter Contact">
             <input class="input100" id="contact" type="text" name="contact" placeholder="contact" required="">
                  
        </div>



            <div class="wrap-input100 validate-input m-b-50" data-validate="Enter Address">
             <input class="input100" id="address" type="text" name="address" placeholder="Address" required="">
                  
        </div>

       
					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" id="password" type="password" name="password" placeholder="Password" required="">
           
            </div>

          
          <div class="container-login100-form-btn">
              <button class="login100-form-btn" name="submit" type="submit" value=" Login ">Register</button>
          </div>
          
          
        <ul class="login-more p-t-30">
						<li class="m-b-8">
							<span class="txt1">
								Have an account?
							</span>

							<a href="customerlogin.php" class="txt2">
								Login
							</a>
						</li>
        
            </ul>

        </div>
        

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