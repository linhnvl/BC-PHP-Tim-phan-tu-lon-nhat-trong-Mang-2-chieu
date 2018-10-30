<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="array" placeholder="input array">
    <input type="submit" value="Find Max">
</form>
<?php

    $a = [
            [1,2,3],
            [9,8,2],
            [0,2,15]
        ];
    $max = $a[0][0];
    $index1 = 0;
    $index2 = 0;
    for ($i = 0; $i < count($a); $i++) {
        for ($j = 0; $j < count($a); $j++) {
            if ($max < $a[$i][$j]) {
                $max = $a[$i][$j];
                $index1 = $i;
                $index2 = $j;
            }
        }
    }
    echo $max . '<br>';
    echo $index1 . '<br>';
    echo $index2;

?>
</body>
</html>