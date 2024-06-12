$servername="localhost";
$username="root";
$password="";
$database_name="contactus";

$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn)
{
    die("connection_failed:",. mysqli_connect_error());
}
	<?php
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$age = $_POST['age'];
	$phonenum = $_POST['phonenum'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$comment = $_POST['comment'];

	$conn= new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('connection Failed:' .$conn->connect_error);
    }else{
        $stmt=$conn->prepare("insert into registration(fname,lname,age,phonenum,email,gender,comment) values(?,?,?,?,?,?,?)");
        $stmt->bind_param("ssiisss",$fname,$lname,$age,$phonenum,$email,$gender,$comment);
        $stmt->execute();
        echo "registration successfull";
        $stmt->close();
        $conn->close();



        


    }
    