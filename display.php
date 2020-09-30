
<!DOCTYPE html>
<html>
    <head>
	    <title>FilePage</title>
    </head>
    <?php
    session_start();
    // find the path to the file
    $filename = $_GET['newf'];
    $username = $_SESSION['uname'];
    $full_path = sprintf("/srv/uploads/%s/%s", $username, $filename);
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $mime = mime_content_type ($filename);
    // display the file content
    header("Content-Type: ".$mime);
    header('content-disposition: inline; filename="'.$filename.'";');
    readfile($full_path);
    ?>

    <form action = "list.php" method = "post">
        <br><br>
        <input type = "submit" value = "Go Back">
    </form>
</html>

