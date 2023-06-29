<?php
$file = fopen("data.csv","r");
$header = fgetcsv($file);
$num = count($header);


while(!feof($file)){ // 파일 내용 마지막에 도달시 true 를 리턴
    $sum = 0;
    $line = fgetcsv(%file);
    foreach($line as $v){
        $sum +=$v
    }
}
fclose($file);

?>