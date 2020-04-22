<?php include "/config/config.php"; ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="./css/static.css" type="text/css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="./css/img_gallery.css" type="text/css"
	</head>
	<body>
		<header>
		<div id="user">
		</div>
		</header>
		<div id="user_flyout">
			<div class="top">
				<div id="icon" class="fa fa-user fa-4x"></div>
				</div>
				<ul>
					<li class="signed"><a href="http://localhost/LVS/php/login.php"><span class="fa fa-key"></span> Login</span></a></li>
					<li><a href="\"><span class="fa fa-user-circle"></span>My Page</a></li>
					<li><a href=\"/settings\"><span class=\"fa fa-cog\"></span>Settings</a></li>
					<li><a href=\"http://localhost/LVS/php/user.php\"><span class=\"fa fa-exclamation\"> Admin Page</span></a></li>
					<li><a href="http://localhost/LVS/php/logout.php"><span class="fa fa-sign-out"> Logout</span></a></li>
				</ul>
			</div>
		</div>
			<img class="logo" src="/assets/lexie_van_selow.png" width="300px" height="200px">
			<script>
			$("#user").click(function(e) {
			$("#user_flyout").toggle('medium');
		});
	 		</script>
			<div id="nav_bar">
				<ul id="menu">
					<li id="nav_home"><a href="/index"><strong>Home</strong></a></li>
					<li id="nav_paintings" class="dropdown">
					<a href="/img_gallery" class="dropbtn">Paintings</a>
						<div class="dropdown-content">
							<a href="#">Commissions</a>
							<a href="#">Sold</a>
							<a href="#">For Sale</a>
						</div> 
					</li>
					<li id="nav_about"><a href="http://localhost/LVS/php/about.php">About</a></li>
					<li id="nav_contact"><a href="#">Contact</a></li>
				</ul>
			</div>
		<div class="divider"></div><br>
		<h1>Gallery <i class="fa fa-paint-brush"></i></h1> 

			<label class="heading" id="filter">Filter Options <span class="fa fa-plus"></span></label>
		 	<div class="filter">
	 			<input class="checkbox" type="checkbox" value="Oil"><label>Oil</label>
	 			<input class="checkbox" type="checkbox" value="Portrait"><label>Portrait</label>
	 			<input class="checkbox" type="checkbox" value="Mixed Media"><label>Mixed Media</label>
	 		</div>

		<main class="container">
		<?php
			$qry = "SELECT * FROM painting";
			$res = mysql_query($qry);
			while($row=mysql_fetch_array($res)){
				echo "<div class=\"cell\">";
				echo "<img src=uploads/".$row["filename"]."></a>";
				if ($row['buy_status'] == "Sold"){
					echo "<p><strong>".$row["paint_name"]."</strong></p>";
					echo "<span style=\"color:red; text-transform:uppercase;\"><strong>".$row['buy_status']."</strong></span>";
				}else {
					echo "<p><strong>".$row["paint_name"]."</strong></p>";
					echo "<p><strong>".$row['buy_status']."</strong></p>";
					}
					echo "<p>$".$row["paint_price"]."</p>";
					echo "<div class=\"divider\"></div>";
					echo "</div>";
			}
		?>
		<script>
				$(".filter").click(
					function() {
						var selected = $(".filter input:checkbox:checked").map(function(){
								return $(this).val();
							}).get();	// array of values of ticked boxes

						// formulate GET query string
						var q = "filter.php?tag=";
						for (var i = 0; i < selected.length; i++) {
							q+=selected[i] + '&';
						}

						$.get(q, function(data) {
							$(".container").animate(500).html(data);
						});
					}
				);
				</script> 	
		<script>
			$(document).ready(function(){
				$("#filter").click(function(){
				        $(".filter").slideDown();
				    });
			});
		</script>	
		</main>
		<div class="divider"></div>
	</body>
</html>

<!--
//<?php
//	$filter = SELECT * WHERE   
//?>
-->
