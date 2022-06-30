<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignment";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE TABLE Miniproject (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
fname CHAR(20) NOT NULL,
email VARCHAR(30) NOT NULL,
pwd VARCHAR(8) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE 
CURRENT_TIMESTAMP
)";
if (mysqli_query($conn, $sql))
{
echo "Table Miniproject created successfully";
} else
{
echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);
?>