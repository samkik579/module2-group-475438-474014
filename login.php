<?php
    session_start();
        $user = $_GET['username'];
        $h = fopen("users.txt", "r");
        $log = 0;
        //echo "<ul>\n";
        while( !feof($h) ){
		    if(trim(fgets($h)) == $user){
                $log = 1;
                $_SESSION['uname'] = $user;
            }
        }
        if($log == 0){
          //  echo "The username does not exist!";
          //  exit;
        }
        fclose($h);
        // echo $log;
        // echo $_SESSION['uname'];
        // echo $user;
        header("location: upload.html");
?>