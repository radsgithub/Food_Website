<?php
session_start();
?>

<html>

  <head>
    <title> About | Le Cafe' </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/aboutus.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,600,800&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">


  <body>


  
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

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation"style="color:'black'; background-color: #6b5b95; ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
<a class="navbar-brand"  style="color: oldlace;" href="index.php" onmouseover="this.style.backgroundColor='#d64161'" onmouseout="this.style.backgroundColor='#6b5b95'">Cafeteria</a>        </div>

<div class="collapse navbar-collapse " id="myNavbar" style="background-color: #6b5b95; ";>
          <ul class="nav navbar-nav">
            <li class="active"  ><a href="index.php" style="background-color: #6b5b95;" onmouseover="this.style.backgroundColor='black' " onmouseout="this.style.backgroundColor='#6b5b95'">Home</a></li>
            <li><a href="aboutus.php" style="background-color: black; color:white" onmouseover="this.style.backgroundColor='grey'" onmouseout="this.style.backgroundColor='black'">About</a></li>
            <li><a href="contactus.php" style="color: oldlace;" onmouseover="this.style.backgroundColor='black'" onmouseout="this.style.backgroundColor='#6b5b95'">Contact Us</a></li>

          </ul>

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
            <li class="active"  style="color: white;"><a href="foodlist.php" ><span class="#"></span> Food Zone </a></li>
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

    <div class="wide" style="background-image: url('https://png.pngtree.com/background/20210709/original/pngtree-food-menu-fare-meal-background-picture-image_869492.jpg');height:558px ; position:absolute; font-family: '#', cursive; ">

    <div class="#"><center> <h1> <font color="white"> It's not our </font><font color="red"><strong>work life</strong></font><font color="white">, it's our </font><font color="green"><strong><em>life's work</em>.</strong></font></h1></div> <br>
       <center> <h1 style="text-shadow: 0 0 3px red, 0 0 5px white">About the food culture in Fra'ly</h1>
<h3></h3></center>
        <br>
        <h3 style="color: rgb(240, 240, 240); font-size:30px ">Order food & beverages online from restaurants near & around you. With love and support from consumers, Fra'ly expanded far and wide, first through the entire city of Bengaluru and then across the entire country. Today, Fra'ly is the leading food ordering and delivery platform in India. We deliver food from your neighborhood local joints, your favorite cafes, luxurious & elite restaurants in your area, and also from chains like Dominos, KFC, Burger King, Pizza Hut, FreshMenu, Mc Donald's, Subway, Faasos, Cafe Coffee Day, Taco Bell, and more. Exciting bit? We place no minimum order restrictions! Order in as little (or as much) as you'd like. We'll Fra'ly it to you!</center>
    </div>

      
         </body>
</html>
