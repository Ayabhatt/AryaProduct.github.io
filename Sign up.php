<!DOCTYPE html>
<html>
<head>
<title>Sign in</title>
<style>
 h2{text-align: center;}
 body{background-color:orange;
text-align:center;
}
 </style>
<script>
 function validateForm() {
 let k = document.forms["myForm"]["email"].value;
 if (k == "") {
 alert("User Name must be filled out");
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
<form name="myForm" onsubmit="return validateForm()" method="post" >
<h2> Sign in </h2>
<label for="email"> Username :</label>
<input type="email" id="email" name="email"><br><br>
<label for="password">Password : </label>
<input type="password" id="pwd" name="pwd"> <br><br>
<input type="submit" value="Sign in">

</form>
<?php
 if($_POST)
{
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "assignment";
 $x=$_POST['pwd'];
 $y=$_POST['email'];
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 if (!$conn)
 {
 die("Connection failed: " . mysqli_connect_error());
 }
 $sql = "SELECT fname FROM miniproject WHERE pwd= '$x' AND email='$y' ";
 $result=mysqli_query($conn,$sql);
 if (mysqli_num_rows($result)>0)
 {
 while($row=mysqli_fetch_assoc($result))
 {
 echo "Welcome ".$row["fname"] ." ! "."<br>";
 }
 }
 else
 {
 echo "Invalid Username or Password";
 }
 mysqli_close($conn);
 }
?>
</body>
</html>
