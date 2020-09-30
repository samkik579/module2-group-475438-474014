<!DOCTYPE html>
<html>
<head>
	<title> Upload</title>
</head>
<body>
    <?php
        session_start();
        //find the path to storage folder
        $filename = basename($_FILES['uploadedfile']['name']);
        $username = $_SESSION['uname'];
        $full_path = sprintf("/srv/uploads/%s/%s", $username, $filename);
        // retirn success page if file moved and stored successfully
        if( move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $full_path) ){
           echo "Success";
        }else{
           echo "False";
        }
    ?>

    <form action ="upload.html" method = "GET">
        <br><br>
        <input type="submit" value="Go back" />
    </form>
</body>
</html>