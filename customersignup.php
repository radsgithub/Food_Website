<html>

<head>
  <title> Guest Signup | Le Cafe' </title>
</head>

<link rel="stylesheet" type="text/css" href="css/managersignup.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<body style="background-image: url('https://wallpapercave.com/wp/wp1874157.jpg');height:558px ; position:relative;">


  <button onclick="topFunction()" id="myBtn" title="Go to top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </button>


  <script type="text/javascript">
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
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
  <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation" style="color:'black'; background-color: #6b5b95; ">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" style="color: oldlace;" href="index.php" onmouseover="this.style.backgroundColor='#d64161'" onmouseout="this.style.backgroundColor='#6b5b95'">Fra'ly</a>
      </div>

      <div class="collapse navbar-collapse " id="myNavbar" style="background-color: #6b5b95; " ;>
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php" style="background-color: #6b5b95; color:white" onmouseover="this.style.backgroundColor='black'" onmouseout="this.style.backgroundColor='#6b5b95'">Home</a></li>
          <li><a href="aboutus.php" style="color: oldlace;" onmouseover="this.style.backgroundColor='black'" onmouseout="this.style.backgroundColor='#6b5b95'">About</a></li>
          <li><a href="contactus.php" style="color: oldlace;" onmouseover="this.style.backgroundColor='black'" onmouseout="this.style.backgroundColor='#6b5b95'">Contact Us</a></li>

        </ul>
        <!-- </li> -->
        <ul class="nav navbar-nav navbar-right">
            <li><a style="color: oldlace; background-color:black" onmouseover="this.style.backgroundColor='grey'" onmouseout="this.style.backgroundColor='black'" href="customersignup.php" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="#"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <!-- <li> <a href="managersignup.php"> Manager Sign-up</a></li> -->
              
            </ul>
            </li>

            <li><a href="customerlogin.php" style="color: oldlace;" onmouseover="this.style.backgroundColor='#d64161'" onmouseout="this.style.backgroundColor='#6b5b95'" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="#"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <!-- <li> <a href="managerlogin.php"> Manager Login</a></li> -->
             
            </ul>
            </li>
          </ul>
      </div>

    </div>
  </nav>

  <div class="container">
    <!-- <div class="jumbotron"> --> <center>
      <h1> <br> <span class="edit" style=" Color: #6b5b95; text-shadow:white" > Create Your Account</span></h1>
      <br></center>
      <!-- <p>Get started by creating your account</p> -->
    </div>
  </div>



  <div class="container" style="margin-top: 4%; margin-bottom: 2%;">
    <div class="col-md-5 col-md-offset-4">
      <div class="panel panel-primary">
        <div class="panel-heading" style=" background-Color: #6b5b95;">  Create Account </div>
        <div class="panel-body">

          <form role="form" action="customer_registered_success.php" method="POST">

            <div class="row">
              <div class="form-group col-xs-12">
                <label for="fullname"><span class="text-danger" style="margin-right: 5px;">*</span> Full Name: </label>
                <div class="input-group">
                <input class="form-control" id="username" type="text" name="Full Name" placeholder="Full Name" required="" autofocus="" style="width: 410px; box-shadow:indigo 1px 2px 8px; ">
                  <!-- <span class="input-group-btn"> -->
                    <!-- <label class="#"><span class="#" aria-hidden="true"></label> -->
                  </span>
                  </span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-xs-12">
                <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Username: </label>
                <div class="input-group">
                <input class="form-control" id="username" type="text" name="username" placeholder="Username" required="" autofocus="" style="width: 410px; box-shadow:indigo 1px 2px 8px; ">
                  <!-- <span class="input-group-btn">
                    <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label> -->
                  </span>
                  </span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-xs-12">
                <label for="email"><span class="text-danger" style="margin-right: 5px;">*</span> Email: </label>
                <div class="input-group">
                <input class="form-control" id="username" type="text" name="Email" placeholder="Email" required="" autofocus="" style="width: 410px; box-shadow:indigo 1px 2px 8px; ">
                  <!-- <span class="input-group-btn">
                    <label class="btn btn-primary"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></label> -->
                  </span>
                  </span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-xs-12">
                <label for="contact"><span class="text-danger" style="margin-right: 5px;">*</span> Contact: </label>
                <div class="input-group">
                <input class="form-control" id="username" type="text" name="Contact" placeholder="Contact" required="" autofocus="" style="width: 410px; box-shadow:indigo 1px 2px 8px; ">
                  <!-- <span class="input-group-btn">
                    <label class="btn btn-primary"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span></label> -->
                  </span>

                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-xs-12">
                <label for="address"><span class="text-danger" style="margin-right: 5px;">*</span> Address: </label>
                <div class="input-group">
                <input class="form-control" id="username" type="text" name="Address" placeholder="Address" required="" autofocus="" style="width: 410px; box-shadow:indigo 1px 2px 8px; ">
                  <!-- <span class="input-group-btn">
                    <label class="btn btn-primary"><span class="glyphicon glyphicon-home" aria-hidden="true"></label> -->
                  </span>
                  </span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-xs-12">
                <label for="password"><span class="text-danger" style="margin-right: 5px;">*</span> Password: </label>
                <div class="input-group">
                <input class="form-control" id="username" type="text" name="Password" placeholder="Password" required="" autofocus="" style="width: 410px; box-shadow:indigo 1px 2px 8px; ">
                  <!-- <span class="input-group-btn">
                    <label class="btn btn-primary"><span class="#" aria-hidden="true"></span></label>
                  </span> -->

                </div>
              </div>
            </div>



            <div class="row" style="color: #6b5b95">
            <div class="form-group col-xs-4">
              <button style="background-color: #6b5b95; box-shadow:indigo 1px 2px 8px" class="btn btn-primary" name="submit" type="submit" value=" Login ">Submit</button>
              </div>

            </div>
            <label style="margin-left: 5px; color: #6b5b95">or</label> <br>Have an account? 
            <label style="margin-left: 5px; color: #6b5b95"><a href="customerlogin.php">
            <button style="background-color: #6b5b95; box-shadow:indigo 1px 2px 8px" class="btn btn-primary" name="submit" type="login" value=" Login ">Login</button> </a></label>

          </form>

        </div>

      </div>


    </div>
  </div>
</body>

</html>
