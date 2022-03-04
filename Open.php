<?php 



$conn = mysqli_connect("127.0.0.1","root","","crud") or die("Connection Failed");


$sql = "SELECT * FROM student JOIN  studentclass WHERE student.sclass = studentclass.cid";



$result = mysqli_query($conn,$sql) or die("query unsuccessful");

?>