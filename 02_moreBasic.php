<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP02</title>
</head>
<body>
<div class="container">More PHP <br>
<?php
echo "hii";
$lag = array("a","b","c");
foreach($lag as $value){
    echo "<br>the char are ";
    echo $value;
}

function print1($num){
    echo "<br> The no is ";
    echo $num;
}
print1(4);
print1(45);

?>
</div>
    
</body>
</html>
