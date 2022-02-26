<?php


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message =$_POST['message'];
// 1st we have to create connection
 if(isset($_POST['save']))
 {
    $server_name="localhost";
    $username="root";
    $password="";
    $database_name="test";
    $conn=mysqli_connect($server_name,$username,$password,$database_name);
 if(!$conn)
 {
     die("Connection failed:" .mysqli_connect_error());
 }
 
     $sql_query="insert into  nagi(name,email,phone,message) 
     values('$name','$email','$phone','$message')";
     
     if(mysqli_query($conn,$sql_query))
     {
         echo "new details inserted successfully !";
       // $sql_query ="select * from form.data";
     }
     else
     {
         echo "Error:" . $sql . "" . mysqli_error($conn);
     }
     mysqli_close($conn);

    }
?>
