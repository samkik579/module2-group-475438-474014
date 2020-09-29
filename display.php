<?php
session_start();

$filename = $_SESSION['f'];
echo $filename;
$username = $_SESSION['username'];

$full_path = sprintf("/srv/uploads/%s/%s", $username, $filename);

// Now we need to get the MIME type (e.g., image/jpeg).  PHP provides a neat little interface to do this called finfo.
$finfo = new finfo(FILEINFO_MIME_TYPE);
$mime = $finfo->file($full_path);

echo $finfo;
echo "ggg";
echo $mime;

// Finally, set the Content-Type header to the MIME type of the file, and display the file.
header("Content-Type: ".$mime);
header('content-disposition: inline; filename="'.$filename.'";');
readfile($full_path);

?>