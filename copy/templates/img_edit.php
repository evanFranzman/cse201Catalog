<?php 
include "config.php"; 
include "database.php";
?>

<html>
	<body>
		<title>LVS :: Admin Page (img_edit)</title>
		<h1>LVS :: Admin Page (img_edit)</h1>

		<h2>Edit/Delete Painting</h2>
		<?php
		$method = $_SERVER['REQUEST_METHOD'];
		$paintings = get_all_paintings($con);
		$cats = get_categories($con);

		if ($method == 'POST'){
			$paint_id = $_POST["paint_id"];
			if (array_key_exists("delete", $_POST)){
				$qry_d1 = "DELETE FROM painting WHERE paint_id=?";
				$qry_q1 = "UPDATE painting SET paint_name=?, tags=?, easel_type=?, dimensions=?, buy_status=?, paint_desc=?, paint_price=?"; 
				//delqueries
				$del_1 = $con->prepare("DELETE FROM painting WHERE paint_id=?");
				$del_2 = $con->prepare("DELETE FROM painting_meta WHERE paint_id=?");
				$del_1->bind_param("i", $paint_id);
				$del_2->bind_param("i", $paint_id);

				$del_2->execute();
				echo ($del_2->error);
				$del_1->execute();
				echo ($del_1->error);
				?><p style="font-weight:bold">Painting <?php echo($paint_id);?>Removed</p>
				<p><a href="index.php">Home</a></p><?php
			// } else if (array_key_exists("edit", $_POST)){

			// 	$painting_update = $con->prepare("UPDATE painting SET paint_name=?, cat=?, paint_desc=?, filename=? WHERE paint_id=?");
			// 	$meta_update = $con->prepare("UPDATE painting_meta SET displayed=?, info_change=? WHERE paint_id=?");

			// 	$painting_update->bind_param("siss", $_POST["paint_name"], $_POST["cat"], $_POST["paint_desc"], $_POST["filename"], $paint_id);
			// 	$painting_update->execute();
			// 	echo ($painting_update->error);

			// 	$meta_update->bind_param("iiisi", $displayed, $status, $info_change, $easel_type, $paint_size, $paint_id);
			// 	$meta = $_POST["paint"];
			// 	foreach (array_keys($meta) as $paint_id) {
			// 		$displayed = array_key_exists("displayed", $meta[$paint_id]) ? 1 : 0;
			// 		$info_change = array_key_exists("info_change", $meta[$paint_id]) ? 1 : 0;
			// 		$meta_update->execute();
			// 		echo($meta_update->error);
			// 	}
			// 	
			// <p>Painting Updated: <?php echo($_POST["paint_id"]);</p><?php

			 } 

			
		}
?>

