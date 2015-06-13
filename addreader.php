<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:100' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="style.css" type="text/css">
		<script src="js/jquery1.9.2.js" type="text/javascript"></script>			
		<script src="js/jquery.validate.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/validation.js" type="text/javascript" charset="utf-8">
	</script>
	</head>
	<body>
		<h2><a href="admin.php">Home</a></h2>
			<div id="container">
			<form method="post" action="registerreader.php" id="myform">
			
					<table>
						<caption>ADD NEW READER</caption>
						<tr>
							<td>Reader ID</td>
							<td><input type="text" name="reader_id"></td>
						</tr>
						<tr>
							<td>Name</td>
							<td><input type="text" name="name"></td>
						</tr>
						<tr>
							<td>Address</td>
							<td><input type="text" name="address"></td>
						</tr>
						<tr>	
							<td>Phone</td>
							<td><input type="number" name="phone"></td>
						</tr>
						<tr>
							<td colspan="2"><input type="submit" name="submit_button" class="button" value="Submit"/>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</body>
</html>