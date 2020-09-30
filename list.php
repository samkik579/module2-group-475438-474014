
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
            if($one !== "."&& $one !== ".."){
            echo "<a href = './display.php?Lname=$one' name = 'filename'> $one </a>";
            echo "<form action = './delete.php?Lname=$one' method = 'POST'> 
             <input type = 'submit' value= 'Delete' name = 'filename' value=$one> </input></form>";
            }
        }
        
?>
    
<form action = "upload.html" method = "post">
    <input type = "submit" value = "Go Back">
</form>

</body>
</html>