<?php
session_start();
include_once '../Login/includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<title>Series | E-TOON</title>
		<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans&amp;display=swap" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		<link rel="stylesheet" href="css/style_Genres.css">
		<link href="img/Logo/favicon.ico" rel="icon" type="image/x-icon" />

	</head>
	
	<body translate="no" data-gr-c-s-loaded="true">
		<div class="wrapper">
			<?php
				$sql = "SELECT COUNT(cartoon_id) FROM cartoon";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_array($result);
				echo "<h2><strong>All genres<span>( ".$row['COUNT(cartoon_id)']." )</span></strong></h2>";
			?>
			<div class="cards">
				<?php
					$sql = "SELECT * FROM cartoon";
					$result = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_array($result)){
							echo "<figure class='card'>";
							echo "<a href = '#'><img src='img/".$row['img']."' height = '270' width= '180'></a>";
							echo "<a href = '".$row['linkEP']."'><figcaption>".$row['cartoon_name']."</figcaption></a>";
						echo "</figure>";
					}
				?>

			</div>
			<h2><strong>What's new?</strong></h2>
			<div class="news">
				<figure class="article">
					<img src="img\Toriko_Update.jpg" height = "238" width= "350">
					<a href = "#"><figcaption>
						<h3>Update new</h3>
						<p>
							Update today,Toriko.
						</p>
					</figcaption></a>
				</figure>
				<figure class="article">
					<img src="img\Parasyte.png" height = "238" width= "350">
					<figcaption>
						<h3>Coming Soon</h3>
							<p>
								Parasyte is a Japanese science fiction horror manga series written and illustrated by Hitoshi Iwaaki and published in Kodansha's Morning Open Zōkan and Afternoon magazine from 1988 to 1995. The manga was published in North America by first Tokyopop, then Del Rey, and finally Kodansha Comics.
							</p>
					</figcaption>
				</figure>
				<figure class="article">
					<img src="img\Yu-Gi-Oh.jpg" height = "238" width= "350">
					<figcaption>
						<h3>Coming Soon</h3>
							<p>
								Yu-Gi-Oh! is a Japanese manga series about gaming written and illustrated by Kazuki Takahashi. It was serialized in Shueisha's Weekly Shōnen Jump magazine between September 30, 1996 and March 8, 2004. The plot follows the story of a boy named Yugi Mutou, who solves the ancient Millennium Puzzle.
							</p>
					</figcaption>
				</figure>
			</div>
		</div>
	</body>
</html>
