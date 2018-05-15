<?php


$arrSubject = [
    "php" => "PHP & MySQL",
    "node" => "NodeJS",
    'mean' => 'MEAN',
    "Android",
    "iOS",
    "React"
];

foreach($arrSubject as $key=>$subject){
    echo $subject .' ';
}

foreach($arrSubject as $key=>$subject):
    echo $subject .' ';
endforeach

?>