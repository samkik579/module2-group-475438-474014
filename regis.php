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

        mkdir("/srv/uploads/%s".$Aname，0777);

        $f = fopen('users.txt','w');
        fwrite($f, "%s\n", htmlentities($Aname));
        fclose($f);
    ?>

    <form action ="regis.php" method = "GET">
        <input type="submit" value="Go back to Login" />
    </form>
</body>
</html>