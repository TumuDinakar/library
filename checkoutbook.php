<html>
	<head>
		
	</head>
	<body>
		<?php 
		include "connection.php";

		$reader_id=$_REQUEST['reader_id'];
		$book_id=$_REQUEST['book_id'];
		$branch_id=$_REQUEST['branch_id'];
		$copy_no=$_REQUEST['copies_no'];
		echo "$copy_no";
		echo "$reader_id";
		echo "$book_id";
		echo "$branch_id";
		$check=false;
		$result=mysql_query("select * from borrowers_details bd
			where book_id='$book_id' and branch_id='$branch_id' and copy_no='$copy_no' and reader_id='$reader_id'");
		
		$num_rows = mysql_num_rows($result);

			
			if( $num_rows > 0 ) 
			{
				$check=true;
			}
			
			
			if($check==true)
			{

				
				$sql = mysql_query("update borrowers_details set taken='checkouted' 
					where book_id='$book_id' and branch_id='$branch_id' and copy_no='$copy_no' and reader_id='$reader_id'");
				echo("<script>alert('Successfully reserved the book'); window.location.href='index.php';</script>");
				
			}
			else
			{
				echo("<script>alert('you already have this book'); window.location.href='reader.php';</script>");
			}
		 ?>
	</body>
</html>