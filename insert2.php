<?php
$usn = $_POST['usn'];
$username = $_POST['username'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($usn) || !empty($username) || !empty($gender) || !empty($phone) || !empty($email) || !empty($password)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "library_cmrit";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From faculty Where email = ? Limit 1";
     $INSERT = "INSERT Into faculty (usn, username, gender, phone,  email, password) values(?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssiss", $usn, $username, $gender, $phone, $email, $password );
      $stmt->execute();
      echo "New record inserted sucessfulsly";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>
