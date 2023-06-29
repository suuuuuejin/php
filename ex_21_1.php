<?php
$today = date("Y년 m월 d일");
echo "오늘은 ".$today." 입니다.<br>"; //오늘은 2023년 06월 02일 입니다.
echo date("Y-m-d")."<br>";  //2023-06-02
echo date("Y.m.d")."<br>";  //2023.06.02
echo date("Y-m-d H:i:s");  //2023-06-02 03:41:43
echo "<br>";

$today1 = time();
echo "현재 시간 타임스탬프 : ".$today1."<br>";  //현재 시간 타임스탬프 : 1685670103
echo "현재 시간 : ".date("Y-m-d H:i:s",$today1);  //현재 시간 : 2023-06-02 03:41:43
echo "<br>";
echo mktime(0,0,0,1,1,2000);  //946681200
echo "<br>";
#getdate(): 타임스탬프에 해당하는 정보를 연관배열의 형태로 반환
$today2 = getdate(); //Array ( [seconds] => 43 [minutes] => 41 [hours] => 3 
         //[mday] => 2 [wday] => 5 [mon] => 6 [year] => 2023 [yday] => 152 
         //[weekday] => Friday [month] => June [0] => 1685670103 )
print_r($today2);
echo "<br>";

$current_time = time();
$time_diff = 2 * 24 * 60 * 60;  //초단위로 2일의 기간
$before_2day = $current_time - $time_diff;
$after_2day = $current_time + $time_diff;
echo "현재시간 : ".date("Y-m-s H:i:s",$current_time)."<br>";  //현재시간 : 2023-06-11 03:49:11
echo "2일 전 시간 : ".date("Y-m-s H:i:s",$before_2day)."<br>";  //2일 전 시간 : 2023-05-11 03:49:11
echo "2일 후 시간 : ".date("Y-m-s H:i:s",$after_2day)."<br>";  //2일 후 시간 : 2023-06-11 03:49:11


?>  