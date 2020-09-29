
<!DOCTYPE html>
<html>
<head>
	<title>listPage</title>
</head>
<?php
        session_start();
        $username = $_SESSION['uname'];
        $full_path = sprintf("/srv/uploads/%s", $username);
        $files = scandir($full_path);


        foreach($files as $one){
            // $_SESSION['f'] = $one;
            echo "<a href = 'display.php' name = 'filename'> $one </a>";
            echo "<form action = 'delete.php' method = 'POST'>  <input type = 'submit' value= 'Delete' name = 'filename'> </input></form>";
        }
        
?>
    
<form action = "upload.html" method = "post">
    <input type = "submit" value = "Go Back">
</form>

</body>
</html>