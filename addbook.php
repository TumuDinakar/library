<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:100' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="style.css" type="text/css">
		<script src="js/jquery1.9.2.js" type="text/javascript">
	</script>			
	<script src="js/jquery.validate.min.js" type="text/javascript" charset="utf-8">
	</script>

	<script src="js/validation.js" type="text/javascript" charset="utf-8">
	</script>
	</head>
	<body>
		<h2><a href="admin.php">Home</a></h2>
			<div id="container">
				<form method="post" action="registerbook.php" id="addBook">
					<table>
						<caption>ADD NEW BOOK</caption>
						<tr>
							<td>Book ID</td>
							<td><input type="text" name="book_id"></td>
						</tr>
						<tr>
							<td>Title</td>
							<td><input type="text" name="title"></td>
						</tr>
						<tr>	
							<td>ISBN</td>
							<td><input type="number" name="isbn"></td>
						</tr>
						<tr>
							<td>Author ID</td>
							<td><input type="text" name="author_id"></td>
						</tr>
						<tr>
							<td>Publisher ID</td>
							<td><input type="text" name="publisher_id"></td>
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