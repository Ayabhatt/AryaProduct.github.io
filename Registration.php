<!DOCTYPE html>
<html>
<head>
 <title>form</title>
<style>

 body{background-color: orange;
text-align:center;}
 </style>
 <script>
 function validateForm() {
 let k = document.forms["myForm"]["fname"].value;
 if (k == "") {
 alert("First Name must be filled out");
 return false;
 }
 let z = document.forms["myForm"]["email"].value;
 if (z == "") {
 alert("Email must be filled out");
 return false;
 }
 let u = document.forms["myForm"]["pwd"].value;
 if (u == "") {
 alert("Password must be filled out");
 return false;
 }
 }
 </script>
</head>
<body>
 <h2>Registration form</h2> 
 
 <form name="myForm" onsubmit="return validateForm()" method="post">
 <label for="fname"> Name :</label>
 <input type="textbox" id="fname" name="fname"><br><br>
 <label for="email">E-mail : </label>
 <input type="email" id="email" name="email"><br><br>
 <label for="pwd">Password :</label>
 <input type="password" id="pwd" name="pwd"><br> <br>
 <input type="submit" value="Submit">
 <input type="reset" value="reset">
 </form>
 
<?php
if($_POST)
 {
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "assignment";
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 if (!$conn)
 {
 die("Connection failed: " . mysqli_connect_error());
 }
 $x=$_POST['fname'];
 $e=$_POST['email'];
 $p=$_POST['pwd'];
 $sql = "INSERT INTO miniproject(fname,email,pwd)
 VALUES('$x','$e','$p')";
 if (mysqli_query($conn, $sql))
 {
 echo "Registered successfully";
 }
 else
 {
 echo "Error Inserting values in the table: " . mysqli_error($conn);
 }
 mysqli_close($conn);
 }
?>
</body>
</html>