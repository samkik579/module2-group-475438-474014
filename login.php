<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<?php
$h = fopen("users.txt", "r");
$user = $_POST['username'];
echo "Hello";
while( !feof($h) ){
	if(trim(fgets($h)) == $user){

	}
	else{
		$linenum++;
	}
}
echo "ERROR";
fclose($h);
?>

</body>
</html>