<html>	
	<head>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:100' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="style.css" type="text/css">
	</head>
	<body>
		<?php 
		include "connection.php";
		$reader_id   = $_REQUEST['reader_id'];
		echo "$reader_id";
		
		 ?>
		<div id="container" style="margin-left:-300px">
			<?php
		echo "<form method='post' action='getdata.php?reader_id=$reader_id'>"
			?>
				<table>
					<tr>
						<td>Enter Book ID or Name</td>
						<td><input type="text" name="search"></td>
						<td><input type="submit" name='search_button' class="button" value="Search"></td>
					</tr>
				</form>	
					<tr>
						
					<?php echo "<td> <a href='checkout.php?reader_id=$reader_id' class='button'>Book CheckOut</a></td>" ?>
					<?php echo "<td> <a href='return.php?reader_id=$reader_id' class='button'>Book Return</a></td>" ?>
					<!--<td><input type="submit" name='search_button' class="button" value="Book Reserve"></td>!-->
					</tr>
				</table>
			
		</div>
	</body>
	
</html>