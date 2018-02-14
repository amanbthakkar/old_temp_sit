<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "galaxyhotel";

$conn = new mysqli($servername, $username, $password, $dbname);
?>
<html>
<head><h1>Galaxy Hotel</h1>
<link rel="stylesheet" type="text/css" href="Header.css" title="Header">

<script type ='text/javascript' src='script.js' ></script>     
</head>
<body onload='document.form1.text1.focus()'> 
<body class="bg">
<center><h2>This login is for manager and staff only</h2></center>
<div class ="form1">
<form name="form1" method="post"> 
CODE<input type ="password" name="username" placeholder="Type Here">
<BR>
<BR>

<center><input type ="submit" name='login' value ="SUBMIT" onclick="SubmitForm();" style="background-color: #191970;
    border: none;
	font-family: Georgia;
	font-size: 30px; color:white"> </center>
</form>
<?php
if (isset($_POST['login']))
	{
	$code=$_POST['username'];
	
	if($code=="galaxy")
	{
		header('location:http://localhost/Hotel/Login.php');
	}
	else
	{
		echo '<script type="text/javascript">alert("Incorrect code") </script>';
	}
	
	/*$query="select * from staff WHERE code='$code'";
			$query_run=mysqli_query($conn,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				
				header('location:http://localhost/Hotel/Login.php');
			}
			else
				echo '<script type="text/javascript">alert("Incorrect code") </script>';*/
	}
	?>
</div>

</body>
</html>
