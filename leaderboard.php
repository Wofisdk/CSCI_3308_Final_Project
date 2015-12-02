<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
     border: 2px solid black;
     font-family:sans-serif;
     vertical-align:center;
     text-align:center;
     font-size:20pt;
}
</style>
</head>
<body>

<?php
$servername = "45.55.26.125:3306";
$username = "HTML";
$password = "website3308!";
$dbname = "Game_Data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT DISTINCT userName, scores FROM Scores ORDER BY scores DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table align='center' width='40%' cellpadding='3' cellspacing='3'><tr><th colspan='2'><h2><br>The Big Bad Game</h3></th></tr>";
     echo "<tr><th>Player Name</th><th>Score</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["userName"]. "</td><td>" . $row["scores"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>  

</body>
</html>