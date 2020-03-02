<?php
$usn = $_POST['usn'];
$bookid = $_POST['bookid'];

if (!empty($usn) || !empty($bookid)) {
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "library_cmrit";
//create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if (mysqli_connect_error()) {
die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
} else {
$INSERT = "Delete from booklending where  usn=? and bookid= ? ";
$stmt = $conn->prepare($INSERT);
$stmt->bind_param("ss", $usn, $bookid );
$stmt->execute();
$stmt->close();
$trigger = "update book_copies set issuedbooks=issuedbooks-1 where bookid = ?";
$stmt = $conn->prepare($trigger);
$stmt->bind_param("s", $bookid);
$stmt->execute();
echo "New record inserted sucessfulsly";
$conn->close();
}
} else {
echo "All field are required";
die();
}
?>