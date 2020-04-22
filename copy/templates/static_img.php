<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="/LVS/css/static_img.css" type="text/css"/>
	</head>
	<header>
		<div id="logo">
			<img src="http://localhost/lexie_van_selow.png" width="300px" height="200px"/>
		</div>
		<div id="nav_bar">
			<ul id="menu">
				<li id="nav_home"><a href="http://localhost/index.php">Home</a></li>
					<li id="nav_paintings" class="dropdown">
					<a href="http://localhost/LVS/php/img_gallery.php" class="dropbtn">Paintings</a>
						<div class="dropdown-content">
							<a href="#">Commissions</a>
							<a href="#">Sold</a>
							<a href="#">For Sale</a>
						</div> 
					</li>
					<li id="nav_about"><a href="#">About</a></li>
					<li id="nav_contact"><a href="#">Contact</a></li>
				</ul>
		</div>
	</header>
	<div class="divider"></div><br>

	<body>
		<?php

			$test = $_GET["paint_id"];

			$qry = sprintf("SELECT * FROM painting WHERE paint_id='%d'", mysql_real_escape_string($test));
			$res = mysql_query($qry);

			if (!$res){
				$message = 'Invalid query: ' . mysql_error() . "\n";
				$message .= 'Query: ' . $qry;
			}

			while ($row=mysql_fetch_assoc($res)){
				// echo $row['paint_id'];
				// echo $row['paint_name'];
				echo "<div id=\"image_div\">";
				echo "<img src=http://localhost/LVS/uploads/".$row["filename"].">";
				echo "<div id=\"info\">";
				echo "<h1><strong>".$row['paint_name']." - ".$row['dimensions']."</strong></h1>";
				echo "<div class=\"divider\"></div>";
				echo "<div id=\"price\">";
				echo "<p>$".$row['paint_price']." - ".$row['buy_status']."</p>";
				echo "</div>";
				echo "<div id=\"category\">";
				echo "<p><strong>Tags: </strong>".$row['tags']."</p>";
				echo "</div>";
				echo "<div id=\"desc\">";
				echo "<p><strong>Painting Description:</strong> ".$row['paint_desc']."</p>";
				echo "</div>";
				echo "<div class=\"divider\"></div><br>";
				echo "</div>";
			}

			mysql_free_result($res);

		?>
	</body>
</html>
