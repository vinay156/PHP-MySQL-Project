<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP03</title>
</head>
<body>
    <div class="container">We work on string <br>
    <?php
    $val = "this is vinay";
    echo $val . "<br>";
    echo strlen($val) . "<br>";
    echo strrev($val) . "<br>";
    echo str_word_count($val) . "<br>";
    echo strpos($val, "is") . "<br>";
    echo str_replace("is", "at",$val) . "<br>";

    ?>

    </div>
    
</body>
</html>