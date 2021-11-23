<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}

unset($_SESSION["cart"]);
?>

<html>

  <head>
    <title> Cart | Le Cafe' </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/COD.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body style="background-image: linear-gradient(to bottom right, pink, purple);">

  
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
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

<nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation" style="color:'black'; background-color: #6b5b95; ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand"  style="color: oldlace;" href="index.php" onmouseover="this.style.backgroundColor='#d64161'" onmouseout="this.style.backgroundColor='#6b5b95'">Fra'ly</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar" style="background-color: #6b5b95; ";>
          <ul class="nav navbar-nav">
            <li class="active"  ><a href="index.php" style="background-color: black; color:white" onmouseover="this.style.backgroundColor='#6b5b95'" onmouseout="this.style.backgroundColor='#6b5b95'">Home</a></li>
            <li><a href="aboutus.php" style="color: oldlace;" onmouseover="this.style.backgroundColor='black'" onmouseout="this.style.backgroundColor='#6b5b95'">About</a></li>
            <li><a href="contactus.php" style="color: oldlace;" onmouseover="this.style.backgroundColor='black'" onmouseout="this.style.backgroundColor='#6b5b95'">Contact Us</a></li>

          </ul>


        <!-- <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>

          </ul> -->

<?php
if(isset($_SESSION['login_user1'])){

?>


<ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#" style="color: white;" onmouseover="this.style.backgroundColor='#d64161'" onmouseout="this.style.backgroundColor='#6b5b95'"><span class="#"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li class="active"  style="background-color:'#6b5b95' ;color: white"><a href="foodlist.php" onmouseover="this.style.backgroundColor='#6b5b95'"  onmouseout="this.style.backgroundColor='#6b5b95'" ><span class="#"></span> Food Zone </a></li>
            <li><a href="cart.php" style="color: white;" onmouseover="this.style.backgroundColor='black' " onmouseout="this.style.backgroundColor='#6b5b95'"><span class="#"></span> Cart  (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>) </a></li>
            <li><a href="logout_u.php" style="color: white;" onmouseover="this.style.backgroundColor='black' " onmouseout="this.style.backgroundColor='#6b5b95'"><span class="#"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a style="color: oldlace;" onmouseover="this.style.backgroundColor='#d64161'" onmouseout="this.style.backgroundColor='#6b5b95'" href="customersignup.php" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="#"></span> Sign Up <span class="caret"></span> </a>
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


<?php
}
?>


        </div>

      </div>
    </nav>



        <div class="container"> <br><br><br>
          <!-- <div class="jumbotron"> -->
            <h1 class="text-center" style="color: green;"><span class="glyphicon glyphicon-ok-circle" style="color: white;"></<span style="color: white;"> Order Placed Successfully.</h1>
          </div>
        </div>
        <br>

<h2 class="text-center" style="color: white;"> Thank you for Ordering at Fra'ly! The ordering process is now complete.</h2>

<?php 
  $num1 = rand(100000,999999); 
  $num2 = rand(100000,999999); 
  $num3 = rand(100000,999999);
  $number = $num1.$num2.$num3;
?>

<h3 class="text-center" style="color: white;"> <strong>Your Order Number:</strong> <span style="color: blue;"><?php echo "$number"; ?></span> </h3>

        </body>

</html>
