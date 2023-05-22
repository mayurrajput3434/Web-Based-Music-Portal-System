<?php

$insert = false;
if(isset($_POST['id'])){
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
    $id= $_POST['id'];
    $sql = "UPDATE `music`.`form` SET name = '$_POST[name]', email = '$_POST[email]', age = '$_POST[age]', interest = '$_POST[interest]', password= '$_POST[password]' WHERE id='$_POST[id]'";
    
    echo '<script type="text/javascript" >alert("Data Updated Successfully")</script>';
  
    if($con->query($sql) == true){
        
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
}
?>
