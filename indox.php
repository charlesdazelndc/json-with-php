<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
if (isset($_POST['submit'])) {
	

if (file_exists("new.json")) {
	$result=json_decode(file_get_contents("new.json"),true);
	$externale=array(
          'name'=>$_POST['name'],
          'skill'=>$_POST['skill'],
          'salary'=>$_POST['salary']
           
	);

	$result[]=$externale;
	$final_data=json_encode($result);
	if (file_put_contents("new.json",$final_data)) {
		echo "data put in json file";
	}
}
else{
	echo "no";
}
}


 ?>

<form action=" " method="post">


	<input type="text" name="name" placeholder="name">
	<br>
	<input type="text" name="skill" placeholder="skill">
	<br>
	<input type="text" name="salary" placeholder="salary">
	<br>
	<input type="submit" name="submit" value="submit">
	

</form>


</body>
</html>