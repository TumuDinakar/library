<html>
	<?php 
		include "connection.php";
		$book_id=$_REQUEST['book_id'];
		$title=$_REQUEST['title'];
		$isbn=$_REQUEST['isbn'];
		$authorid=$_REQUEST['author_id'];
		$publisherid=$_REQUEST['publisher_id'];

		echo "$title";

		$check=false;
	
			$result=mysql_query("select * from book_details where Title='$title'"); //and Status='a'");
			$num_rows = mysql_num_rows($result);
			
			if( $num_rows > 0 ) 
			{
				$check=true;	
			}
			
			if($check==true)
			{
				
				echo ("<script>alert('Email already exists'); window.location.href='addbook.php';</script>");
				
				
			}
			else
			{
				$sql = mysql_query("insert into book_details(book_id,Title,ISBN,author_id,publisher_id) values('$book_id','$title','$isbn','$authorid','$publisherid')");
				echo ("<script>alert('Book is added to database'); window.location.href='addreader.php';</script>");
				
			}
	 ?>
</html>