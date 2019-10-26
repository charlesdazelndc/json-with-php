<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php 

include 'Database.php';
$db=new Database;

$drinks=json_decode(file_get_contents("store.json"),true);
echo "<pre>";
print_r($drinks);
echo "<pre>";

foreach ($drinks as $value) {
	
$sql="insert into tbl_json (name,skill,salary,image,address) values('".$value["name"]."','".$value["skill"]."','".$value["salary"]."','".$value["image"]."','".$value["address"]["village"]."')";

$result=$db->insertdata($sql);
}



 ?>
 <hr>

 <?php 
   

   $query="select * from tbl_user";
   $result=$db->selectdata($query);
   $json_array=array();
   if ($result) {
   	while ($row=$result->fetch_assoc()) {
   		$json_array=$row;
   		echo json_encode($json_array);
   	}
   	
   }



  ?>



</body>
</html>