<?php
// file upload in php
// file details in php uploaded using the input:file method are stored using the $_FILES Super Global Var
// the SGV stores the following info bout the file, in key/value pairs:
#name - name of the file
#type - file type
#tmp_name - temporary storage location
#error - BOOL - indicates whether there was an error trying to get the file
#size [in bytes]


?>
<form action="" method="post" enctype="multipart/form-data"> <!--IMPORTANT BIT - TAKE NOTE!-->
    <input type="file" name="file" id="file" accept=".png, .jpg, .jpeg"><br> <!--IMPORTANT BIT - TAKE NOTE!-->
    <input type="submit" value="submit" name="submit"> <br>
</form>
<?php
if (isset($_POST["submit"])) {
    $file = $_FILES['file'];
    
    // ensure file is of the correct extension
    $fileName = $file['name']; // get array name
    $fileNameParts = explode('.',$fileName); // explode the name on '.' to make the name part and the extension part
    $fileExt = strtolower(end($fileNameParts)); // get the last element of the above array (ext part) and store in lowercase
    
    $accepted_extensions = array("png", "jpeg", "jpg"); // have an array of acceptable extensions
    
    if (in_array($fileExt, $accepted_extensions)) {
        if ($file['error']) { // ensure no error
            echo "There was an error uploading this file, please try again later!";
        } else{
            if ($file['size'] < 5 * 1000000 + 1) { // restrict the file size for efficiency in storage
                $current_file_location = $file['tmp_name'];
                $new_file_location = "27_files_upload/" . rand(1000, 10000) . "." . $fileExt; // giving a random custom name to the file
                move_uploaded_file($current_file_location, $new_file_location); // moving the file to desdired storage location
                // alert the user that the file has been uploaded successfully
                echo "File upload successful!";
                echo "<script>alert('File Upload Successful!')</script>";
                header("Location: {$_SERVER['PHP_SELF']}?uploadsuccessful");
            } else {
                echo "The file is too large! Can't be aploaded:(";
            }
        }
    } else {
        echo "Invalid file type!";
    }
}

?>

