<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $amount=$_POST['amount'];
    $conn=mysqli_connect("localhost","root","","banking") or die("query unsucessfull");
    $sql="INSERT INTO visitor(name,email,phone,amount) VALUES('$name','$email','$phone','$amount')";
    $result=mysqli_query($conn,$sql) or die("query unsucessfull");
    header("Location:http://localhost/proj/show.php");
    
}
?>