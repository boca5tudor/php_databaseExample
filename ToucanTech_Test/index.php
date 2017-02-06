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
</div>
   <section id="members">
       <h3>Add new member</h3>
                    
                    <form action="adduser.php" method="post">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name here" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>                                                           
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email here" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="school">
                                Select School</label>
                            <select id="school" name="school" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="1">St Paul's Academy</option>
                                <option value="2">Deptford Green School</option>
                                <option value="3">De Lucy School</option>
                            </select>
                        </div>
                        <br>
                        <input type="submit" name="mbrsubmit" value="Add member" id="mbrBtn"> 

                        </form>
                  <div id="result">
                 
                  </div>      
   </section>

     <br>
     <div id="selectschool">
<h2> Select a school to view it's members:</h2>
<div class="list-group">
  <a href="school1.php" class="list-group-item">St Paul's Academy</a>
  <a href="school2.php" class="list-group-item">Deptford Green School</a>
  <a href="school3.php" class="list-group-item">De Lucy School</a>
</div>
    
</div>
     <br>

        <footer>
        <div class="container text-left">
            <p>Copyright &copy; Tudor Boca 2017</p>
        </div>
    </footer>

</body>
</html>