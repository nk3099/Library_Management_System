<!DOCTYPE html>
<html>
<head>
<title>Books Available</title>
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
<th>Book Id</th>
<th>Book Title</th>
<th> Author Name </th>
<th> Total Books </th>
<th> Issued Books </th>
<th> Remainig Books </th>  
<th> Book Publisher</th> 
<th> Phone_no</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "library_cmrit");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
 
$sql = "call find()";    //stored procedure
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["bookid"]. "</td><td>" . $row["title"] . "</td><td>" . $row["author_name"] . "</td> <td>" . $row["totalbooks"]. "</td><td>" . $row["issuedbooks"]. "</td><td>" . $row["remainingbooks"]. "</td><td>"
. $row["publisher"]. "</td><td>" . $row["phone"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
