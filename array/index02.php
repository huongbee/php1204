<?php

// $arr = [1,2,3,5,5,8,"Hello Array"];


// //print_r($arr);

// for($i=0; $i < count($arr); $i++){
//     echo $arr[$i] . " ";
// }


$arrSubject = [
    "PHP & MySQL",
    "NodeJS",
    'MEAN',
    "Android",
    "iOS",
    "React"
];
for($i=0; $i < count($arrSubject); $i++){
    echo $arrSubject[$i] . ' ' ;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <select>
        <?php 
        for($i = 0; $i<count($arrSubject); $i++){
            echo "<option class='class-a'>$arrSubject[$i]</option>";
        }
        ?>
        

    </select>
    <hr>

    <select>
        <?php 
        for($i = 0; $i<count($arrSubject); $i++){?>
            <option><?=$arrSubject[$i]?></option>
        <?php }?>

    </select>

    <hr>
    <select>
        <?php for($i = 0; $i<count($arrSubject); $i++):?>
            <option><?=$arrSubject[$i]?></option>
        <?php endfor?>

    </select>
</body>
</html>