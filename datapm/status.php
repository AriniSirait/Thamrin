<?php
	require('include/header.php');
	function statusbintang($pm, $mdone){
		<?php
			//$link=mysqli_connect("localhost","root","","datapm");
			if (!$link) {
				die('Could not connect: ' . mysql_error());
			}
			//echo 'Connected successfully';
			$data = mysql_query("select * from data_atm");
			while($row = mysql_fetch_array($data)) { 
		?>
		$pm=$row['pm_per_year'];
		$mdone
		<?php
			}
			mysql_close();
		?>
	}
?>