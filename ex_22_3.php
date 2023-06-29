<?php
$file = fopen("hello22.txt","w");

$str = "만나서 반갑습니다. 좋은하루~";
fwrite($file, $str);

echo "파일쓰기 완료!";
fclose($file);

?>