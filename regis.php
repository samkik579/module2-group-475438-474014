<!DOCTYPE html>
<html>
<head>
	<title> create</title>
</head>
<body>
    <?php
        $Aname = $_GET['new'];

        $path = sprintf("/srv/uploads/%s",htmlentities($Aname));
        echo $path;
        mkdir($path);
        $f = fopen('users.txt','w');
        fwrite($f, "%s\n", htmlentities($Aname));
        fclose($f);
    ?>

    <form action ="regis.php" method = "GET">
        <input type="submit" value="create an account" />
    </form>
</body>
</html>