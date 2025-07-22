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
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file" id="file"><br>
    <input type="submit" value="submit" name="submit"> <br>
</form>
<?php
if (isset($_POST["submit"])) {
    $file = $_FILES['file'];
    // echo $file['name'];
    foreach($file as $key => $value){
        echo "{$key} = {$value} <br>";
    }
    
}

?>

