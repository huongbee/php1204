<?php

$file = fopen('note.txt',"r");
$file2 = fopen('note02.txt',"w+");

if($file && $file2){
    while($line = fgets($file)){ 
        //fgets :line
        //fgetc : character
        // echo $line;
        // echo "<br>";
        fwrite($file2,$line);
    }
    fclose($file);
    fclose($file2);
}
else{
    echo "can not open";
}


?>