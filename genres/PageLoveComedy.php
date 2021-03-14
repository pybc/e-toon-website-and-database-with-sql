
<?php
  session_start();
  include_once '../Login/includes/dbh.inc.php';
  if(!isset($_SESSION['userId'])){
    header("Location: Login/login.php");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="zxx">
<head>

    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    
    <title>Lovecomedy | E-Toon</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAA6OgwALfnLwDnxTAAv9owAOfQLwDU5i8A19MwAJ3nMAB3rSQA1tAvAOfnMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAC7EAAAAAAAu7u7AAAAAAC7u7tTAAAAALu7VVMzAAAAuydXMzMAAABiJ3dzMwAAAIgnd6MzAAAAiCeqozMAAACIiKqjMwAAAIiIhKMAAAAAiIiIAAAAAAAAiJAAAAAAAAAAAAAAAAAAAAAAAAAAD//wAA//8AAPj/AADgfwAA4B8AAOAHAADgBwAA4AcAAOAHAADgBwAA4AcAAOAfAADgfwAA+P8AAP//AAD//wAA" rel="icon" type="image/x-icon" />
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="css/style_Genres.css">
	<style>

#navbar {
  overflow: hidden;
  background-color: #333;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: #4CAF50;
  color: white;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}

* {
  box-sizing: border-box;
}


/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
}

/* Left and right column */
.column.side {
  width: 18%;
}

/* Middle column */
.column.middle {

  width: 82%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
  }
}


</style>
</head>


    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

     <!-- Header Section Begin -->
     <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-right">
                <?php
                      if(isset($_SESSION['userId'])){
                        echo '<a href="../Login/includes/logout.inc.php" class="login-panel"><i class="fa fa-user"></i>Logout</a>';
                        echo '<a href="../profile.php" class="login-panel">';
                        echo '<i class="fa fa-user"></i>';
                        echo $_SESSION['uName'];
                        echo '&nbsp; &nbsp; &nbsp; &nbsp;';
                        echo '</a>';
                        if($_SESSION['type'] == 'admin'){
                          echo '<a href="../admin.php" class="login-panel">';
                          echo '<i class="fa fa-user"></i>';
                          echo 'Admin';
                          echo '&nbsp; &nbsp; &nbsp; &nbsp;';
                          echo '</a>';
                        }
                      }
                      else {
                        echo '<a href="Login/login.php" class="login-panel"><i class="fa fa-user"></i>Login</a>';
                      }
                    ?>
                    <div class="top-social">
                        <a href="https://www.facebook.com/"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <form action="../genres/Search.php" method="POST">
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                      <div class="logo">
                          <a href="/e-toon">
                              <img src="img/Logo_E-Toon.png" alt="">
                          </a>
                      </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                                <div class="input-group">
                                <input type="text" placeholder="Find something?" name = "find">
                                <button type="submit"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </form>
      </header>
    <div class="nav-item">
            <div class="container">
                <div class="nav-menu mobile-menu dropdown">
                    <ul>
						<li><a href="../index.php">Home</a></li>
                        <li><a href="../genres/PageFantasy.php">Fantasy</a></li>
                        <li><a href="../genres/PageSport.php">Sport</a></li>
                        <li><a href="../genres/PageSchool.php">School</a></li>
					    <li><a href="../genres/PageAction.php">Action</a></li>
					    <li><a href="../genres/PageLoveComedy.php">LoveComedy</a></li>
						<li><a href="../genres/PageAdult.php">Adult</a></li>
                    </ul>
                </div>
				<br>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    <!-- Header End -->
   
    <body translate="no" data-gr-c-s-loaded="true">
		<div class="wrapper">
		<?php
				$sql = "SELECT COUNT(cartoon_id) FROM cartoon INNER JOIN typecartoon ON type_id = type WHERE type_cartoon = 'Lovecomady'";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_array($result);
				echo "<h2><strong>Genres of LoveComedy<span>( ".$row['COUNT(cartoon_id)']." )</span></strong></h2>";
			?>
			<div class="cards">
				<?php
					$sql = "SELECT * FROM cartoon INNER JOIN typecartoon ON type_id = type WHERE type_cartoon = 'Lovecomady'";
					$result = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_array($result)){
							echo "<figure class='card'>";
              echo "<a href = '".$row['linkEP']."'><img src='img/".$row['img']."' height = '270' width= '180'></a>";
							echo "<a href = '".$row['linkEP']."'><x><figcaption>".$row['cartoon_name']."</figcaption></x></a>";
						echo "</figure>";
					}
				?>

			</div>
			<h2><strong>What's new?</strong></h2>
			<div class="news">
				<figure class="article">
          <img src="img\Fairy Tail.png" height = "238" width= "350">
					<figcaption>
          <x>
          <h3>Coming Soon</h3>
            Fairy Tail is a Japanese manga series written and illustrated by Hiro Mashima. It was serialized in Kodansha's Weekly Shōnen Magazine from August 2, 2006 to July 26, 2017, with the individual chapters collected and published into 63 tankōbon volumes.
        </x>
					</figcaption></a>
				</figure>
				<figure class="article">
					<img src="img\Bleach.jpg" height = "238" width= "350">
					<figcaption>
          <x>
						<h3>Coming Soon</h3>
            Bleach follows the adventures of the hotheaded teenager Ichigo Kurosaki, who inherits his parents' destiny after he obtains the powers of a Soul Reaper a death personification similar to the Grim Reaper—from another Soul Reaper, Rukia Kuchiki.
          </x>
					</figcaption>
				</figure>
        <figure class="article">
					<img src="img\Attack on titan_Update2.jpg" height = "238" width= "350">
					<figcaption>
          <x>
						<h3>Coming Soon</h3>
            Attack on Titan is a Japanese manga series both written and illustrated by Hajime Isayama. It is set in a fantasy world where humanity lives within territories surrounded by three enormous walls that protect them from gigantic man-eating humanoids referred to as Titans.
          </x>
					</figcaption>
				</figure>
			</div>
		</div>




  <!-- Footer Section Begin -->
  <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <ul>
                          <li>Contact</li>
                          <li>Instagram: E-TOON-TH</li>
                          <li>Fanpage: E-TOON TH</li>
                          <li>Fanpage: EToon! TH</li>
                          <li>Email: E_TOON@etoon.co.th</li>
                        </ul>
                        <div class="footer-social">
                          <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                          <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                          <a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Genres<i class="fa fa-heart-o" aria-hidden="true"></i></h5>
                        <ul>
                            <li><a href="../genres/PageAllgenres.php">All genres</a></li>
                            <li><a href="../genres/PageAction.php">Action</a></li>
                            <li><a href="../genres/PageAdult.php">Adult</a></li>
                            <li><a href="../genres/PageFantasy.php">Fantasy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>Genres<i class="fa fa-heart-o" aria-hidden="true"></i></h5>
                        <ul>
                          <li><a href="../genres/PageLoveComedy.php">LoveComedy</a></li>
                          <li><a href="../genres/PageSchool.php">School</a></li>
                          <li><a href="../genres/PageSport.php">Sport</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>My Account</h5>
                        <div class="footer-widget">
                            <ul>
                                <li><a href="../profile.php">Profile</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
   Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by Silpakorn
   <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->


    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

        </x>
</html>
