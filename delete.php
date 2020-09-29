
<!DOCTYPE html>
<html>
<head>
	<title>listPage</title>
</head>
<?php
        session_start();
        $username = $_SESSION['uname'];
        $filename = $_GET['filename'];
        echo $filename;
        $full_path = sprintf("/srv/uploads/%s/%s", $username,$filename);
        if(unlink($full_path)){
            echo "Success";
        }
        else{
            echo "Fail";
        }
        
?>
<form action = "upload.html" method = "post">
    <input type = "submit" value = "Go Back">
</form>

</body>
</html>