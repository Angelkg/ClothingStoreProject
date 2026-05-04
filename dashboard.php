<?php include 'DBConn.php'; ?>
<h2>Pending Users</h2>
<?php
$res=$conn->query("SELECT * FROM tblUser WHERE status='pending'");
while($row=$res->fetch_assoc()){
echo $row['name']." - ".$row['email'];
echo " <a href='approve.php?id=".$row['userID']."'>Approve</a><br>";
}
?>