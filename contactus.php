<?php
session_start();
?>

<html>

  <head>
    <title> Contact | Fra'ly' </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/contactus.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <body style="background-image: url('https://wallpapercave.com/wp/wp1874157.jpg');height:558px ;width:auto; position:relative;">



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
          <a class="navbar-brand"  style="color: oldlace;" href="index.php" onmouseover="this.style.backgroundColor='#d64161'" onmouseout="this.style.backgroundColor='#6b5b95'">Fra'ly</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar" style="background-color: #6b5b95; ";>
          <ul class="nav navbar-nav">
            <li class="active"  ><a href="index.php" style="background-color: #6b5b95;" onmouseover="this.style.backgroundColor='black' " onmouseout="this.style.backgroundColor='#6b5b95'">Home</a></li>
            <li><a href="aboutus.php" style="color: oldlace;" onmouseover="this.style.backgroundColor='black'" onmouseout="this.style.backgroundColor='#6b5b95'">About</a></li>
            <li><a href="contactus.php" style="background-color: black; color:white" onmouseover="this.style.backgroundColor='grey'" onmouseout="this.style.backgroundColor='black'">Contact Us</a></li>

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
            <li class="active"  style="color: white; background-color:#6b5b95"><a href="foodlist.php" ><span class="#"></span> Food Zone </a></li>
            <li><a href="cart.php" style="color: white;" onmouseover="this.style.backgroundColor='black' " onmouseout="this.style.backgroundColor='#6b5b95'"><span class=""></span> Cart  (<?php
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
<li><a style="color: oldlace;" onmouseover="this.style.backgroundColor='#d64161'" onmouseout="this.style.backgroundColor='#6b5b95'" href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="#"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <!-- <li> <a href="managersignup.php"> Manager Sign-up</a></li> -->
            
            </ul>
            </li>

            <li><a href="#" style="color: oldlace;" onmouseover="this.style.backgroundColor='#d64161'" onmouseout="this.style.backgroundColor='#6b5b95'" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="#"></span> Login <span class="caret"></span></a>
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
    <br>

    <!-- <div class="heading"> -->
     <center style="font-size:60; color:white" >Want to contact <span class="edit" style="color: #6b5b95; text-shadow: 2px 2px 5px #6b5b95;"> Fra'ly </span>?</strong></center>
     
     
    <!-- <div class="col-xs-12 line"><hr></div> -->

    <div class="container" >
    <div class="col-md-5" style="float: none; margin: 0 auto;">
      <div class="form-area">
        <form method="post" action="">
        <br style="clear: both">
         <b><h3 style="margin-bottom: 25px; text-align: center; font-size: 40px;  color:#6b5b95"> Contact Form</h3></b> 

          <div class="form-group">
            <input type="text" class="form-control" style="box-shadow:indigo 1px 2px 8px; " id="name" name="name" placeholder="Name" required autofocus="">
          </div>

          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required style="box-shadow:indigo 1px 2px 8px; ">
          </div>     

          <div class="form-group">
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required style="box-shadow:indigo 1px 2px 8px; ">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required style="box-shadow:indigo 1px 2px 8px; ">
          </div>

          <div class="form-group">
           <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Message" maxlength="140" rows="7" style="box-shadow:indigo 1px 2px 8px; "></textarea>
           <span class="help-block"><p id="characterLeft" class="help-block">Max Character length : 140 </p></span>
          </div> 
          <button style="color:#6b5b95"><a href="submitted.php">Submit</button>  </a>  
        </form>

        
      </div>
    </div>
      
    </div>

    <?php
if (isset($_POST['submit'])){
require 'connection.php';
$conn = Connect();

$Name = $conn->real_escape_string($_POST['name']);
$Email_Id = $conn->real_escape_string($_POST['email']);
$Mobile_No = $conn->real_escape_string($_POST['mobile']);
$Subject = $conn->real_escape_string($_POST['subject']);
$Message = $conn->real_escape_string($_POST['message']);

$query = "INSERT into contact(Name,Email,Mobile,Subject,Message) VALUES('$Name','$Email_Id','$Mobile_No','$Subject','$Message')";
$success = $conn->query($query);

if (!$success){
  die("Couldnt enter data: ".$conn->error);
}

$conn->close();
}
?>

     </body>

  
</html>
