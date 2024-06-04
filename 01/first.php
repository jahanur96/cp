<?php
// Given a list of integers, find the minimum of their absolute values.
$data = [10, 12, 15, 189, 22, 2, 34];
$cnt = count($data);
if($cnt>0){
    $smallNumber = abs($data[0]);
    for($i = 1; $i<$cnt; $i++){
        if($smallNumber > abs($data[$i]))
        $smallNumber=abs($data[$i]);
    }
    echo "Small number is ".$smallNumber;
}else{
    echo "This is an empty array";
}

?>


<?php
$myfile = fopen("file.txt", "r") or die("Unable to open file!");
$str = fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);

$data = explode(" ",$str);
$wordCnt = count($data);
echo $wordCnt;
?>


<?php
$str = "I love programming";
$data = explode(" ",$str);
$cnt = count($data);
$revStr = '';
if($cnt>0){
    for($i=0; $i<$cnt; $i++){
    $revStr .= strrev($data[$i])." ";
    }
    echo rtrim($revStr);
}else{
    echo "No string found";
}

?>