<?php
$insert=false;

if(isset($_POST['name']))
{

$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);

if(!$con)
{
    die("connection to this database failed due to" .mysqli_connect_error());

    
}

//echo "connection to database";
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$desc=$_POST['desc'];

$sql="INSERT INTO `mytrip`.`mytriptable` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

//echo $sql;

if($con->query($sql)==true)
{
   // echo "successfully inserted";
   $insert=true;
}
else{
    echo "ERROR: $sql <br>  $con->error";
}
$con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>travel details form</title>
    
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body >
   <div class="container">

    <h3>welcome to  college trip</h3>
    <p>Enter your details and submit this form to confirm your trip
    
    </p>
    <?php

    if($insert==true)
    
   echo "<p1 class='submitMsg'>thanks for submitting your form.we are happy to see you joining us for the US trip</p1>"

    ?>
    <form action="index.php" method="post">
<input type="text" name="name" id="name" placeholder="enter your name" required>

<input type="text" name="age" id="name" placeholder="enter your age" required>
<input type="text" name="gender" id="name" placeholder="enter your gender" required>
<input type="email" name="email" id="email" placeholder="enter your email" required >
<input type="phone" name="phone" id="phone"  placeholder="enter your phone" required>
<textarea name="desc" id="desc" cols="30" rows="10" placeholder="enter any other information here"required ></textarea>
<button class="btn">submit</button>





    </form>
   </div> 
   <script src="index.js"></script>
    
   
</body>
</html>