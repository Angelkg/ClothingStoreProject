<?php include 'DBConn.php'; session_start(); ?>
<form method="POST">
Email: <input type="email" name="email"><br>
Password: <input type="password" name="password"><br>
<button type="submit">Admin Login</button>
</form>

<?php
if($_POST){
$email=$_POST['email'];
$password=md5($_POST['password']);

$res=$conn->query("SELECT * FROM tblAdmin WHERE email='$email' AND password='$password'");
if($res->num_rows>0){
$_SESSION['admin']=$email;
header("Location: dashboard.php");
}else{
echo "Invalid admin";
}
}
?>