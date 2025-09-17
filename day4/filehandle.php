<?php
echo "day 4 of php series <br>";
// read and write files

$file = 'extras/user.txt';
if(file_exists($file)){
    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);

    echo $contents;
}

?

// file upload
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
    
    </form>
</body>
</html>