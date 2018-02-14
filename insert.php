<?php
//session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "galaxyhotel";

$conn = new mysqli($servername, $username, $password, $dbname);
  
$sql="SELECT * FROM customer";
$query_run=mysqli_query($conn,$sql);
$number=mysqli_num_rows($query_run);
  
$sql="INSERT INTO customer VALUES ($number+1,'$_POST[name]','$_POST[sname]','$_POST[mno]','$_POST[email]','$_POST[address]','$_POST[checkin]','$_POST[checkout]','$_POST[nop]','$_POST[room]')";
$query_run=mysqli_query($conn,$sql);
?>

<html>
<head><h1>Galaxy Hotel</h1>
<link rel="stylesheet" type="text/css" href="Header.css" title="Header">
<script type ='text/javascript' src='script.js' ></script>     
</head>
<body onload='document.form1.text1.focus()'> 
<body class="bg">

<?php

session_start();

//Set session variables
$_SESSION["name"] = $_POST["name"];

echo "Hi " . $_SESSION["name"] . ", your stay details have been recorded. Please proceed to pay!";

?>

<div class ="form1">
<form name="form1" action="insertp.php" method="post"> 
CREDIT/DEBIT<br> <br>
Name<input type ="text" name="pname">
<BR>
<BR>
Card-Number<input type ="number" name ="cno">
<br>
<br>
CVV <input type ="text" name="cvv">
<br><br>
Expiry <input type="date" name="exp"><br><br>
<center><input type ="submit" value ="SUBMIT" onclick="ValidateName(document.form1.text1);"  style="background-color: #191970;
    border: none;
	font-family: Georgia;
	font-size: 30px; color:white"> </center>
</form>
</div>

</body>
</html>