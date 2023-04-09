<?php
$insert=false;
if(isset($_POST['name'])){

    $server = "localhost";

    $username = "root";

    $password = "";


    $con = mysqli_connect($server, $username, $password);

    if(!$con){echo "Success connecting to the db";}

    $name=$_POST['name'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $sql="INSERT INTO `trips`. `trips`(`name`, `usn`, `email`, `phone`, `dt`) 
    VALUES ('$name', '$age', '$email', '$phone', current_timestamp());";

    // echo $sql;

    if($con->query($sql)==true){
        // echo "succssfully inserted";
        $insert=true;
    }

    else{
        echo "ERROR:$sql <br> $con->error";
    }
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
      <h1>Welcome to Jain University Industrial Visit Trip form</h1>
      <p>Enter your details and submit this form to confirm your participation in the trip</p>
     <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
        }
    ?> 
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your USN">
            
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <button class="btn">Submit</button> 
        </form>
    </div>
    <script src="index.js"></script>
    
</body>
</html>    