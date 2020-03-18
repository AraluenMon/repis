<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $n=8;
    
$r=1;

for($i=$n;$i>=1;$i--)
{
    $r*=$i;
echo "$i";
echo ($i==1)? " =":" * ";
}
echo"$r";
?>


</body>
</html>