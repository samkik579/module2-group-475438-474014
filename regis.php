<!DOCTYPE html>
<html>
<head>
	<title> create</title>
</head>
<body>
    <?php
        $Aname = $_GET['new'];

        $h = fopen("/srv/usersName/users.txt", "r");
        $log = 0;

<<<<<<< Updated upstream
        mkdir("/srv/uploads/".$Aname，0777);

        $f = fopen('users.txt','w');
        fwrite($f, "%s\n", htmlentities($Aname));
=======
        while( !feof($h) ){
		    if(trim(fgets($h)) == $Aname){
                $log = 1;
            }
        }
        if($log == 1){
           echo "The username has alredy exist!";
           
        }
        else{
            $path = "/srv/uploads/$Aname";
            mkdir($path, 0777, true);
            $f = fopen('/srv/usersName/users.txt','a+');
            fputs($f,$Aname."\n");
        }
        fclose($h);
>>>>>>> Stashed changes
        fclose($f);
    ?>

    <form action ="login.html" method = "GET">
        <input type="submit" value="Go back to Login" />
    </form>
</body>
</html>