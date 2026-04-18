<?php
echo "<style type = 'text/css'>";
include "styles.css";
echo "</style>";
echo "<h1> Added to stack </h1>";
$servername = "localhost";
$username = "user62";
$password = "62hoax";
$dbname = "db62";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
 die("Connection failed: " . $conn->connect_error);
}

$firstname = $_GET['apiFirst'];
echo "<p><strong>$firstname</strong> has been added.</p>";
$lastname = $_GET['apiLast'];
echo "<p><strong>$lastname</strong> has been added.</p>";
$countrylocation = $_GET['apiCountry'];
echo "<p><strong>$countrylocation</strong> has been added.</p>";

$sql = "INSERT INTO randuser (first, last, country) VALUES ('$firstname','$lastname','$countrylocation')";
$result = $conn->query($sql);
if($result->num_rows > 0){
echo "<table>";
echo    "<thead>";
echo            "<tr>";
echo                    "<th> First Name </th>";
echo                    "<th> Last Name </th>";
echo                    "<th> Country </th>";
echo            "</tr>";
echo    "</thead>";
while($row = $result->fetch_assoc()){
echo "<tr>";
echo "<td> . $row['first'] . </td>";
echo "<td> . $row['last'] . </td>";
echo "<td> . $row['country'] . </td>";
echo "</tr>";
}
echo "</table>";
}

$conn->close();
echo "</div>";
?>
