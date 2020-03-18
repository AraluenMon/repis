<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$palabra='corona';
$mez =(strlen ($palabra)+1)/2;
$x=0;
$y=1;
for($i=0; $i<$mez;$i++){
    for($k=$mez-$i;$k>0;$k--){
        echo "&nbsp;&nbsp; ";
        echo "&nbsp;&nbsp; ";
    }
    echo substr($palabra, ((strlen($palabra)/2)+$x)  ,$y)."<br>";
    $y+=2;
    $x--;
}
?>
</body>
</html>
