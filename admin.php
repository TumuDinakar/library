<html>	
	<head>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:100' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="style.css" type="text/css">
	</head>
	<body>
		<div id="container" style="margin-left:-300px">
			<table>
				<form action="adminsearch.php">
				<tr>
					<td colspan="2">Enter Book ID or Name</td>
					<td colspan="2"><input type="text" id="book_id" name="book_id"></td>
				</tr>
			
				<tr>
					<td><input type="submit" id='search_button' class="button" value="Search"></td>
				</form>
					<td><input type="button" id='addbook' class="button" value="Add Book" onclick="window.location.href = 'addbook.php'"></td>
					<td><input type="button" id='addnewreader' class="button" value="Add New Reader" onclick="window.location.href = 'addreader.php'"></td>
					<td><input type="button" id='mostfrequentborrowers' class="button" value="Most Frequent Borrowers"></td>
					<td><input type="button" id='branchinformation' class="button" value="Branch Information"></td>
					<td><input type="button" id='fine' class="button" value="Fine"></td>
				</tr>
			</table>	
		</div>
	</body>
	
</html>