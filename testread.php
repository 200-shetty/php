<?php
$servername="localhost";
$username="root";
$password="";
$dbname="myDB";


$conn=new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error)
{
	die("connection failed" . $conn->connect_error);
}
if(isset($_POST["id"])&&isset($_POST["ad_num"])&&isset($_POST["name"]))
{

$stmt = $conn->prepare("INSERT INTO admission(ad_num,name) VALUES (?, ?)");
$stmt->bind_param("ss", $ad_num, $name);
//$id=$_POST["id"];
$sql1 = "SELECT * FROM admission ORDER BY ad_num DESC LIMIT 1";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   $ad_num= $row["ad_num"];
  }
} else {
  echo "0 results";
}
$adnum_int=substr($ad_num,9);
echo $adnum_int;
$adnum_int+=1;
$ad_num="TECH-SHV-".$adnum_int;
$name=$_POST["name"];

$stmt->execute();
//$last_id = $stmt->insert_ad_num;

/*if ($conn->query($stmt) === TRUE) 
{
  echo "New record created successfully";
} 
else 
{
  echo "Error: ". $stmt  . $conn->error;
}*/

echo "inserted";
$stmt->close();
$conn->close();
}
?>
<form action="testread.php" method="POST">
id: <input type="text" name="id">
name: <input type="text" name="name">
<input type ="submit" value="submit">
</form>