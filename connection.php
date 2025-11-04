<?php
$name=$_POST["name"];
$rollno=$_POST["rollno"];
$age=$_POST["age"];
$Gender=$_POST["Gender"];
$mark1=$_POST["mark1"];
$mark2=$_POST["mark2"];
$mark3=$_POST["mark3"];
$total=$mark1+$mark2+$mark3;
$con=mysqli_connect('localhost','root','','student');
if($con)
    echo"success\n";
else
     echo"connection failed";

$sq="INSERT INTO stud values($rollno,'$name',$age,'$Gender',$mark1,$mark2,$mark3,$total)";
if(mysqli_query($con,$sq)){
    echo"<script>alert('inserted succesfully');
    document.location='sql.php';</script>";
   }
   else{
    echo"<script>alert('roll no already exist');
    document.location='sql.php';</script>";

   }
   

   

    ?>
