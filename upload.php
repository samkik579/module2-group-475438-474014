<!DOCTYPE html>
<html>
<head>
	<title> create</title>
</head>
<body>
    <?php
        session_start();
        
        $filename = basename($_FILES['uploadedfile']['name']);
        $username = $_SESSION['uname'];
        
        $full_path = sprintf("/srv/uploads/%s/%s", $username, $filename);
      //  echo $_FILES['uploadedfile']['tmp_name'];
      //  echo "  ";
      //  echo $_FILES['uploadedfile']['name'];
      //   echo "full_path";
      //  echo $full_path;
       // echo $_FILES['uploadedfile']['error'];
        if( move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $full_path) ){
 
           echo "Success";
        }else{
           // header("Location: upload.html");
           // exit;
           echo "False";
        }
    ?>

    <form action ="upload.html" method = "GET">
        <input type="submit" value="Go back" />
    </form>
</body>
</html>