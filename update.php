<?php
$bookid = $_POST['bookid'];
$title = $_POST['title'];
$publisher = $_POST['publisher'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$totalbooks = $_POST['totalbooks'];
$issuedbooks = 0;
$remainingbooks=$totalbooks;

if (!empty($bookid) || !empty($title) || !empty($publisher) || !empty($address) || !empty($phone) || !empty($totalbooks) ) {
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "library_cmrit";
//create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if (mysqli_connect_error()) {
die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
} else {
$SELECT = "SELECT bookid From books Where bookid = ? Limit 1";
$INSERT = "INSERT Into books (bookid, title, publisher, totalbooks, remainingbooks) values(?, ?, ?, ?, ?)";
$pubinsert = " insert into publisher values(?,?,?)";
//Prepare statement
$stmt = $conn->prepare($SELECT);
$stmt->bind_param("s", $bookid);
$stmt->execute();
$stmt->bind_result($bookid);
$stmt->store_result();
$rnum = $stmt->num_rows;
if ($rnum==0) {
$stmt->close();
$stmt = $conn->prepare($INSERT);
$stmt->bind_param("sssii", $bookid, $title, $publisher, $totalbooks, $remainingbooks );
$stmt->execute();
echo "New record inserted sucessfulsly";
} else {
echo " Already registered once with this bookid";
}
$stmt->close();
$conn->close();
}
} else {
echo "All field are required";
die();
}
?>