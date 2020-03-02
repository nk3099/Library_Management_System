<!DOCTYPE html>
<html>
<head>
<title>Student Details</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Usn</th>
<th>Username</th>
<th>Gender</th>
<th>Phone</th>
<th>Email</th>
<th>password</th>

</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "library_cmrit");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
 
$sql = "SELECT * FROM student";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["usn"]. "</td><td>" . $row["name"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["phone"] . "</td><td>"
. $row["email"]. "</td><td>". $row["password"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
