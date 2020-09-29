    <?php
        session_start();
        
        // Get the filename and make sure it is valid
        $filename = basename($_FILES['uploadedfile']['name']);
        // if( !preg_match('/^[\w_\.\-]+$/', $filename) ){
        //     echo "Invalid filename";
        //     exit;
        // }
        
        // Get the username and make sure it is valid
        $username = $_SESSION['uname'];
        // if( !preg_match('/^[\w_\-]+$/', $username) ){
        //     echo "Invalid username";
        //     exit;
        // }
        
        $full_path = sprintf("/srv/uploads/%s/%s", $username, $filename);
        echo $_FILES['uploadedfile']['tmp_name'];
        echo "  ";
        echo $_FILES['uploadedfile']['name'];
        echo "full_path";
        echo $full_path;
        echo $_FILES['uploadedfile']['error'];
        if( move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $full_path) ){
            //header("Location: upload.html");
           // exit;
           echo "Success";
        }else{
           // header("Location: upload.html");
           // exit;
           echo "False";
        }
?>