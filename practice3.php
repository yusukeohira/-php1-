<?php
$name="大平祐輔";

if($name=="大平祐輔"){
  echo"私は大平祐輔です。";
}else{
  echo"あなたの名前ではありません。";
}

for($i=0;$i<=10000;$i++){
  $total +=$i;
}
echo $total;

$fruits = array("apple","banana","watermelon","strawberry","grape");
foreach($fruits as $fruits){
  echo $fruits;
  echo "\n";
}

$start = 1;
$end = 100;

for($i = $start; $i < $end; $i++){
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
