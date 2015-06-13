<html>
	<head>
		<link rel="stylesheet" href="style.css" type="text/css">
	</head>
	<body>
		<h2><a href="admin.php">Home</a></h2>
		<div id="container" style="margin-left:-350px">
	<?php 
		include "connection.php";
	
		$book_id=$_REQUEST['book_id'];
		
		
			$result=mysql_query("select count(b.book_id) as numn, b.book_id, b.Title, b.ISBN, p.publisher_Name, a.Author_Name, bs.branch_id from 
				book_details b, authors a, publishes p, library_status bs
				where b.author_id=a.author_id and b.publisher_id=p.publisher_id and bs.book_id=b.book_id and b.book_id='$book_id'");
			$num_rows = mysql_num_rows($result);
			
			echo "<table>";
				
				echo "<tr>
						<th>Book ID</th>
					  	<th>Title</th>
					  	<th>ISBN</th>
					  	<th>Author Name</th> 
					  	<th>Publisher Name</th>
					  	<th>Library Name</th> 
					  	<th>Copy No</th>
				   	</tr>"	;
				while($row=mysql_fetch_array($result))
				{
					$book_id=$row['book_id'];
					$title=$row['Title'];
					$isbn=$row['ISBN'];
					$publisherid=$row['publisher_Name'];
					$authorid=$row['Author_Name'];
					$branch_id=$row['branch_id'];
					$noofcopies=$row['numn'];
			

				echo "<td>".$book_id."</td>";
				echo "<td>".$title."</td>";
				echo "<td>".$isbn."</td>";
				echo "<td>".$authorid."</td>";
				echo "<td>".$publisherid."</td>";
				echo "<td>".$branch_id."</td>";
				echo "<td>".$noofcopies."</td></tr>";
		
				
		
			}	
			echo "</table>";
	 ?>
	 </div>
	</body>
</html>