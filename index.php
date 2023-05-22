<?php
$insert = false;
if(isset($_POST['name'])){
    error_reporting(0);
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password);

   
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $interest = $_POST['interest'];
    $password = $_POST['password'];
  
    $sql = "INSERT INTO `music`.`form` (`name`, `email`, `age`, `interest`, `password`) VALUES ('$name', '$email','$age','$interest', '$password');";
    echo "Welcome to SoundWave";
    echo " $name ";

    if($con->query($sql) == true){
        
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
}
?>