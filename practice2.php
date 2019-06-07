<?php 
// 課題１
 $name = '智之';
 if ($name = '智之') {
     echo "私は ".$name."です";
     
 } else {
     echo "あなたの名前ではありません。";
 }
 
 // 課題２
 $total = 0;
 
 for ($i = 0;$i <= 10000; $i++) {
     $total += $i;
 }
 echo $total;
 
 // 課題３
 $fruits = array('grape', 'melon', 'apple', 'peach', 'orange');
 foreach ($fruits as $value) {
     echo $value;
     echo "<br>";
 }
 
 // 課題４
 $i = 1;
 for ($i = 1;$i <= 100; $i ++) {
     if ($i % 5 == 0) {
     echo $i;
     echo "<br>";   
     }
 }
?>