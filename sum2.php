<?php
//課題1

function f($i){{
  $result = 2*$i;
  }
  return $result;
  }
echo f(5)."\n";

//課題2
function f2($a,$b){{
  $result = $a+$b;
  }
  return $result;
  }
echo f2(2,3)."\n";


//課題3
function f3($arr){
  $result=1;
  foreach($arr as $i){
    $result *=$i;
  }
  return $result;
}
echo f3($arr=array(1,3,5,7,9))."\n";


//課題4
function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){
    $max_number = max($arr);
  }
  return $max_number;
}
echo max_array($arr=array(1,3,5,7,9))."\n";

//課題5
// strip_tags関数
$str = "<h1>tech boost<h1>"
."<p>テックブースト<p>";
echo strip_tags($str)."\n";

//array push関数
$fruits =["apple","orange","melon"];
array_push($fruits,"strawberry","banana");
print_r($fruits);

//array_merge関数
$fruits = ["apple","orange","melon"];
$fruits2 = ["lemon","grape"];
$fruits3 = ["cherry","watermelon"];

$fruits_merge = array_merge($fruits,$fruits2,$fruits3);
print_r($fruits_merge);

//time mktime関数
$date=time();
echo date("y/m/d/h:i:s",$date)."\n";

$date=mktime(12,0,0,12,31,2009);
echo date("y/m/d/h:i:s",$date);
