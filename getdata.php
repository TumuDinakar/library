<html>
	<head>
		<link rel="stylesheet" href="style.css" type="text/css">
	</head>
	<body>
		<div id="container" style="margin-left:-350px">
	<?php 
		include "connection.php";
	
		$search_button=$_REQUEST['search'];
		$reader_id=$_REQUEST['reader_id'];
		
		
			$result=mysql_query("select * from 
				book_details b, authors a, publishes p, library_status bs
				where b.author_id=a.author_id and b.publisher_id=p.publisher_id and bs.book_id=b.book_id and b.book_id='$search_button' and bs.status='a'");
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
					$copy_no=$row['copy_no'];
					$status=$row['status'];
			
				echo "<form action='reservebook.php?book_id=$book_id&branch_id=$branch_id&copies_no=$copy_no&reader_id=$reader_id' method='post'>";
				
				echo "<td>".$book_id."</td>";
				echo "<td>".$title."</td>";
				echo "<td>".$isbn."</td>";
				echo "<td>".$authorid."</td>";
				echo "<td>".$publisherid."</td>";
				echo "<td>".$branch_id."</td>";
				echo "<td>".$copy_no."</td>";
				echo "<td>".$status."</td>";
				echo "<td><input type='submit' name='search_button' class='button' value='Reserve'></td></tr>";
				echo "</form>";	
				
		
			}	
			echo "</table>";
	 ?>
	 </div>
	</body>
</html>