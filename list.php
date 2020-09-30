
<!DOCTYPE html>
<html>
<head>
	<title>My Files</title>
</head>
<body>
<center>
<?php
    // list all the file on the page each with a url direct to display file page
    session_start();
    $username = $_SESSION['uname'];
    $full_path = sprintf("/srv/uploads/%s", $username);
    $files = scandir($full_path);

    //enable the delete function
        foreach($files as $one){
            if($one !== "."&& $one !== ".."){
            echo "<a href = './display.php?Lname=$one' name = 'filename'> $one </a>";
            echo "<form action = './delete.php?Lname=$one' method = 'POST'> 
             <input type = 'submit' value= 'Delete' name = 'filename' value=$one> </input></form>";
            }
        }
        
?>
    
<form action = "upload.html" method = "post">
    <br><br>
    <input type = "submit" value = "Go Back">
    
</form>
</center>
</body>
</html>