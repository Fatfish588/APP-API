<?php
header("Content-Type: text/html;charset=utf-8");
$name=$_POST["name"];                           //获取姓名
$num=$_POST["num"];                              //获取学号
$file=$num.'/'.$num.".txt";                       //签到日志位置
if(date("Y/m/d")!=date("Y/m/d",filemtime($file)))                               //判断今天是否已经签过到
{
        file_put_contents($file, date("Y/m/d H:i:s")."\n", FILE_APPEND | LOCK_EX);                              //写入签到日志
        echo "签到成功<br>"; echo $name."<br>";
        echo "你的学号是："; echo $num."<br>";
        echo date("Y/m/d H:i:s");
}
else
        echo "签到失败";
?>
