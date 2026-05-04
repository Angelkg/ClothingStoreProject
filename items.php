<?php include 'DBConn.php'; ?>
<h2>Items</h2>
<?php
$res=$conn->query("SELECT * FROM tblClothes");
while($row=$res->fetch_assoc()){
echo "<div>";
echo "<img src='images/sample.jpg' width='100'><br>";
echo $row['itemName']." - R".$row['price']."<br>";
echo "<button>Add to Cart</button>";
echo "</div><hr>";
}
?>