<?php
$servername="localhost";
$username="root";
$password="";
$dbname="web_design";

//create connection

$conn=mysqli_connect($servername,$username,$password,$dbname);

//check the connection

if(!isset($_POST['submit'])){
    if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['mobile_number'])){
        $full_name=$_POST['full_name'];
        $email=$_POST['email'];
        $mobile_number=$_POST['mobile_number'];

        $query="INSERT INTO customer_register(full_name,email,mobile_number) VALUES('$full_name','$email','$mobile_number')";


        $run=mysqli_query($conn,$query) or die(mysqli_error());

        if($run){
            echo"form submitted successfully";
        }
        else {
            echo"form is not submitted";
        }

    }
    else{
        echo"all fields are required";
    }
}
















?>