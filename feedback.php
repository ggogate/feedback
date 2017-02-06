<html>
<head>
	<title> Feedback </title>
</head>

<body>
<h3>Provide Feedback</h3>
	<?php 
		include_once('dbconnection.php');
		if (isset($_POST['action']))
		{
			if($_POST['action'] == "add")
			{		
				$sql = "insert into comments (comment) values('".$_POST['comment']."')";
				$retval = mysqli_query($dbhandle,$sql);
				if(! $retval)
				{
					die('Could not insert data: ' . mysqli_error());
				}
				echo "Feedback saved successfully.";			
			}
		}
	?>
	<br>
	<form method="post" action="feedback.php">
		<textarea name="comment" rows="24" cols="80" maxlength="1920"></textarea><br/>
		<input type="hidden" name="action" value="add"/>
		<input type="submit" value="Save"/>
	</form>
		
</body>

</html>