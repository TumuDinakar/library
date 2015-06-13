<?php

//$conn establishs connection to database which is store in phpmyadmin

$conn = @mysql_connect('localhost','root','');
if (!$conn) {
	die('Could not connect: ' . mysql_error());
}

//echo "Success";
mysql_select_db('library', $conn);


?>
<!DOCTYPE html>
<html>

	<!-- in head tag we place css and javascript or refereneces to css and javascript files -->
	<head>
		<!-- <link rel="stylesheet" href="style.css" type="text/css"> -->
		<style>
		
			*{
				margin:0;
			}

			body{
				margin: 0 auto;
				font-family: 'Roboto Slab';
			}

			a{
				text-decoration: none;
				color: black;
			}

			#container{
			     position:absolute;
			     z-index:15;
			     top:50%;
			     left:50%;
			     margin:-100px 0 0 -200px;
			     background:#f1f1f1;
			     padding: 20px;
			}
			
			input{
				height:30px;
				width:250px;
				margin:5px 0 5px 0;
			}
			.button{
				-webkit-box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
				-moz-box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
				box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
				color:#ffffff;
				background-color:#4b8efc;
				border-radius:2px;
				-moz-border-radius:2px;
				-webkit-border-radius:2px;
				border:none;
				font-family:'Helvetica Neue',Arial,sans-serif;
				font-size:13px;
				font-weight:700;
				height:32px;
				cursor:pointer;
				width: 100%;
			}

			td{
				width:60px;
				text-align: center;
			}
			
			label.error {
				color: red;
			}

			</style>
	</head>

	<!-- in body tag we have to write the code which will be displayed in browser -->
	<body>

		<!--  in many websites we will divide the website in many div's where we will place the contenrt of the website. 
		id="container" is used in style.css to apply styles to the div. -->
		<div id="container" style="width:400px;">
			
			<!--  forms are best used when we are creating the page that requires the user to enter the data.
			in this form the user enters the id and we will send that id number to loginchecking.php to check whether that id is correct or wrong. 
			if the id is correct, then we will redirect to page which is mention in loginchecking.php or he will redirected to this page with message by showing the wrong id number.
			method = "post" is used to hide the id number in url that user enters in input label when we are sending the id number to loginchecking.php page -->

			<form method="post" action="loginchecking.php">
				<table>
					<tr>
						<strong id="email_label">Enter Your ID</strong>
						<input id="reader_id" name="reader_id" style="position:static">
					</tr>

					<tr>		
						<input type="submit" class="button" onclick="return Validation()" value="Log In" style="widyh:100%">	
					</tr>
			<!-- when user clicks this button, the user will be directed to addreader.php page. -->		
					<tr>				
						<input type="button" class="button" onclick="window.location.href = 'addreader.php'" value="New Registration">
					</tr>
				</table>
			</form>
				
		</div>
		
	</body>
</html>