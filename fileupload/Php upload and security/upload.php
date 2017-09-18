<?php

if(isset($_POST['submit'])) {
    if ($_FILES['fileToUpload']['type'] == 'image/jpeg' || $_FILES['fileToUpload']['type'] == 'image/png') {
        $name = $_FILES['fileToUpload']['name'];
        $ext = pathinfo($name, PATHINFO_EXTENSION);
        $target_file = "uploads/".basename(md5(time())).'.'.$ext;
        if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file )) {
            echo "success";
        } else {
            echo "fail";
        }    
    }
    // print_r($_FILES['fileToUpload']);
    
    // echo $ext;
    
}
?>
<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>

