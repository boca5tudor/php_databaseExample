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
   <h3>The members of De Lucy School are: </h3>

<?php
require "initapp.php";
 
$sql = "SELECT Name, Email FROM Members WHERE SchoolID=3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> Name: ". $row["Name"]. " " . $row["Email"] . "<br>";
     }
} else {
     echo "0 results";
}

$conn->close();
 
?>

</div>

<div id="adduser">
  <h3>To go back press here</h3> <a href="index.php" class="btn btn-default">Go back</a>
</div>

</body>
</html>
