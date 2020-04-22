<?php
	$conn = mysql_connect('localhost','root','root');
   	mysql_select_db("LVS");	
	if(!conn){
		echo "Failed";
	} else {
		echo "Succeeded";
		$qry = "SELECT * FROM painting";
		$res = mysql_query($qry);
		while($row=mysql_fetch_array($res)){
			echo "<p>".$row["paint_name"]."</p>";
		}
	}
	
?>
