<?php include 'DBConn.php';
$conn->query("DROP TABLE IF EXISTS tblUser");

$conn->query("CREATE TABLE tblUser(
userID INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
email VARCHAR(100),
username VARCHAR(50),
password VARCHAR(255),
status VARCHAR(20)
)");

$file=fopen("userData.txt","r");
while(($line=fgetcsv($file))!==FALSE){
$conn->query("INSERT INTO tblUser(name,email,username,password,status)
VALUES('$line[0]','$line[1]','$line[2]','$line[3]','approved')");
}
fclose($file);
echo "Loaded";
?>