
<!DOCTYPE html>
<html>
    <head>
	    <title>ReadPage</title>
    </head>
    <?php
    session_start();

    $filename = $_Get['Lname'];

    $username = $_SESSION['uname'];

    $full_path = sprintf("/srv/uploads/%s/%s", $username, $filename);

    // Now we need to get the MIME type (e.g., image/jpeg).  PHP provides a neat little interface to do this called finfo.
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $mime = mime_content_type ($filename);

    header("Content-Type: ".$mime);
    header('content-disposition: inline; filename="'.$filename.'";');
    readfile($full_path);

    ?>


    <form action = "list.php" method = "post">
        <input type = "submit" value = "Go Back">
    </form>
</html>