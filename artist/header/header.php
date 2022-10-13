<?php
include("../connection.php");
  session_start(); // Start the session

  $aid = $_SESSION[ "artistid" ];

  ?>

<!doctype html>

<html lang="en">

  <head>

   <title>Artist - <?php echo $_SESSION["name"]; ?> - Rosioly Artwork & Fine Art</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
<link rel="icon" href="../img/favicon.ico" type="image/x-icon">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../boots/css/bootstrap.css">

    <!-- jQuery library -->



    <!-- Latest compiled JavaScript -->

    <script src="../boots/js/bootstrap.js"></script>

    <link rel="stylesheet" href="../css/style.css">

	

	<link rel="stylesheet" href="../assets/css/main.css" />



<!-- Latest compiled JavaScript -->

<script src="../boots/js/jquery.js"></script>

<!-- Scripts -->

			<script src="../assets/js/jquery.min.js"></script>

			<script src="../assets/js/jquery.scrollex.min.js"></script>

			<script src="../assets/js/skel.min.js"></script>

			<script src="../assets/js/util.js"></script>

			<script src="../assets/js/main.js"></script>



 </head>



    

<header>

<nav class="#header" >



  <!-- Header -->

			<header id="header" class="alt" >

				<div class="logo"><a href="index.php">Rosioly <span>Artwork & Fine Art</span></a></div>

			
 <a href="javascript:;" style="padding: 0px 0;color:#000;margin-right: 3em;">

                  <form class="navbar-form navbar-left" action="artistwelcome.php" method="post">

                    <div class="input-group" >

                      <input list="browsers" name="proname" type="text" class="form-control" style="
    color: white; max-height: 35px;
" placeholder="Search Product" required>

                      <datalist id="browsers">

                        <option value="Art Deco">

                        <option value="Fine Art">

                        <option value="Folk">

                        <option value="Pop Art">

                        <option value="Street Art">

                      </datalist>

                      <div class="input-group-btn">

                      <button class="btn btn-default" type="submit" style="
    max-height: 35px; margin-bottom: 10px;
" name="search">

                      <i class="glyphicon glyphicon-search"></i>

                      </button>

                      </div>

                    </div>

                  </form>

                </a>

   				</a> 
				<a href="#menu"><p class="custom-para">Action</p></a>

			</header>



		<!-- Nav -->

			<nav id="menu">

				<ul class="links">

					<li><a href="index.php">Home</a>

					</li>

					<li><a href="addproduct.php?id2=<?php echo $aid;?>">Add Arts</a>

					</li>

					<li><a href="manage_feedback.php?id=<?php echo $aid;?>">View Feedback</a>

					</li>

					<li><a href="view_booking_detail.php?id=<?php echo $aid;?>">View Orders</a>

          </li>
<li><a href="add_exhibitionevents.php">Add Exhibition & Events
</a>

          </li>

					<li><a class="a button special" href="artist_logout.php?id=<?php echo $aid;?>">Logout</a>

					</li>

					

			</nav>

 

</nav>

</header>

  <body >