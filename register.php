<?php include 'DBConn.php'; ?>
<form method="POST">
Name: <input type="text" name="name" required><br>
Email: <input type="email" name="email" required><br>
Username: <input type="text" name="username" required><br>
Password: <input type="password" name="password" required><br>
<button type="submit">Register</button>
</form>

<?php
if($_POST){
$name=$_POST['name'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=md5($_POST['password']);

$conn->query("INSERT INTO tblUser (name,email,username,password,status)
VALUES ('$name','$email','$username','$password','pending')");
echo "Registered! Wait for admin approval.";
}
?>