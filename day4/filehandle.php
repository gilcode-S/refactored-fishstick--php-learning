<?php
echo "day 4 of php series <br>";
// read and write files

// $file = 'extras/user.txt';
// if(file_exists($file)){
//     $handle = fopen($file, 'r');
//     $contents = fread($handle, filesize($file));
//     fclose($handle);

//     echo $contents;
// };


if(isset($_POST['submit'])){

    $allowed_ext = array('png', 'jpeg', 'jpg', 'gif');

    if(!empty($_FILES['upload']['name'])){
        //print_r($_FILES);
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $target_dir = "uploads/${file_name}";

        // get file extension
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        // validate file extension
        if(in_array($file_ext, $allowed_ext)){
            if($file_size <= 8000000) {
                move_uploaded_file($file_tmp, $target_dir);
                $message = '<p style="color: green;"> file uploaded</p>';
            } else {
                $message = '<p style="color: red;"> The file is to large</p>';
            }
        } else {
            $message = '<p style="color: red;"> Invalid file type</p>';
        }
    } else {
        $message = '<p style="color: red;"> Please choose a file</p>';
    }
}

?>



<!-- file upload -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $message ?? null; ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    Select image to upload
    <input type="file" name="upload">
    <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>