<?php
    session_start();
        $user = $_GET['username'];
        $h = fopen("/srv/usersName/users.txt", "r");
        $log = 0;
        //  check if the entered username is in the user list
        while( !feof($h) ){
		    if(trim(fgets($h)) == $user){
                $log = 1;
                $_SESSION['uname'] = $user;
            }
        }
        // exit the site if the user does not exist
        if($log == 0){
           echo "The username does not exist!";
           exit;
        }
        fclose($h);
        header("location: upload.html");
?>