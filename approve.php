<?php include 'DBConn.php';
$id=$_GET['id'];
$conn->query("UPDATE tblUser SET status='approved' WHERE userID=$id");
header("Location: dashboard.php");
?>