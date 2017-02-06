<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tudor Boca test">
    <meta name="author" content="Tudor Boca">

	<title>ToucanTech_Test</title>


    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

  
     <!-- Custom Fonts -->
  
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">


	  <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
   
         	<!-- My CSS -->
    <link href="css/style.css" rel="stylesheet" type="text/css" >



</head>
<body id="page-top">
<div id="intro">
   <h1> ToucanTech Test by Tudor Boca</h1>
   <br>

<?php
require "initapp.php";
 
$Name=$_POST["name"];
$Email=$_POST["email"];
$SchoolID=$_POST["school"];
 
$sql="INSERT INTO MEMBERS (Name, Email, SchoolID) values('$Name','$Email','$SchoolID');";
if(mysqli_query($conn,$sql))
{
/*	$schlName="";
	if ($SchoolID=1) {
		$schlName="St Paul's Academy";
	}
	else {
		if ($SchoolID=2) {
			$schlName="Deptford Green School";
		}
		else{
			$schlName="De Lucy School";
		} 
	} */
print $lastusr="The last user added was: $Name";
}
else{
echo"Connection Error".mysqli_error($conn);
}
 
?>

</div>
<br>
<div id="adduser">
	<h3>To go back and add another member press here</h3> <a href="index.php" class="btn btn-default">Go back</a>
</div>

<div id="selectschool">
<h2> Select a school to view it's members:</h2>
<div class="list-group">
  <a href="school1.php" class="list-group-item">St Paul's Academy</a>
  <a href="school2.php" class="list-group-item">Deptford Green School</a>
  <a href="school3.php" class="list-group-item">De Lucy School</a>
</div>
	
</div>

</body>
</html>