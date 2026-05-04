<?php include 'DBConn.php'; session_start(); ?>
<form method="POST">
Username: <input type="text" name="username"><br>
Password: <input type="password" name="password"><br>
<button type="submit">Login</button>
</form>

<?php
if($_POST){
$username=$_POST['username'];
$password=md5($_POST['password']);

$result=$conn->query("SELECT * FROM tblUser WHERE username='$username'");
if($row=$result->fetch_assoc()){
if($row['password']==$password){
if($row['status']=="approved"){
$_SESSION['user']=$row['name'];
echo "Welcome ".$row['name'];
echo "<br><a href='items.php'>View Items</a>";
}else{
echo "Waiting for approval";
}
}else{
echo "Wrong password";
}
}else{
echo "User not found";
}
}
?>