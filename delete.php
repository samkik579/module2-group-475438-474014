
<!DOCTYPE html>
<html>
<head>
	<title>DeletePage</title>
</head>
<?php
        session_start();
        $username = $_SESSION['uname'];
        $filename = $_GET['Lname'];
        $full_path = sprintf("/srv/uploads/%s/%s", $username,$filename);
    // return success page if success
        if(unlink($full_path)){
            echo "Success";
        }
        else{
            echo "Fail";
        }
        
?>
<form action = "upload.html" method = "post">
    <br><br>
    <input type = "submit" value = "Go Back">
</form>

</body>
</html>