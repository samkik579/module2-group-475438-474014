<!DOCTYPE html>
<html>
<head>
	<title> create</title>
</head>
<body>
    <?php
        // add the new username to the users.txt
        $Aname = $_GET['new'];
        $h = fopen("/srv/usersName/users.txt", "r");
        $log = 0;
        // create user's folder to store files
        mkdir("/srv/uploads/".$Aname，0777);

        $f = fopen('users.txt','w');
        fwrite($f, "%s\n", htmlentities($Aname));
       // check if username already exist if yes to the already exist page
        while( !feof($h) ){
		    if(trim(fgets($h)) == $Aname){
                $log = 1;
            }
        }
        if($log == 1){
           echo "The username has alredy exist!";
           
        }
        // if new username created successfuly, return to the login page
        else{
            $path = "/srv/uploads/$Aname";
            mkdir($path, 0777, true);
            $f = fopen('/srv/usersName/users.txt','a+');
            fputs($f,$Aname."\n");
        }
        fclose($h);
        fclose($f);

    ?>

    <form action ="login.html" method = "GET">
        <br><br>
        <input type="submit" value="Go back to Login" />
    </form>
</body>
</html>