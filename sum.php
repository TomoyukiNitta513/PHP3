<?php
// 課題１
    function sum($i) {
        $i *= 2;
        echo $i;
    }
    sum(6);
    
// 課題２
    function f($a, $b) {
        $c = $a + $b;
        echo $c;
    }
    f(9,97);
    
// 課題３
   function ary() {
       $arr = [1,3,5,7,9];
       $array = 1;
       foreach ($arr as $value) {
           $array *= $value;
       }
       echo $array;
   }
    ary();
        
// 課題４
    function max_array(){
// とりあえず配列の最初の要素を一番大きい値とする
    $arr = [10,7,5,3,12];
    $max_number = 0;
     foreach ($arr as $a) {
 //どうしたらいいかわからない・・・・
        if ($max_number < $a) {
        $max_number = $a;
        }
     }
     echo $max_number;
     }
     max_array();
 
// 課題５
    $text = '<p>テストです</p><!-- Comment --> <a href="#fragment">テスト</a>';
    echo strip_tags($text);
    
    $fruits = ['apple', 'orange', 'banana'];
    array_push($fruits, 'lemon', 'peach');
    print_r($fruits);
    
    $fruit1 = ['apple', 'orange'];
    $fruit2 = ['banana', 'lemon'];
    $fruit3 = ['peach', 'pineapple'];
    $fruit4 = array_merge($fruit1, $fruit2, $fruit3);
    print_r($fruit4);
    
    echo date('y,m,d', time());
    $timestamp = mktime(0, 0, 0, 3, 0, 2019);
    echo date('y,m,d',$timestamp);
    
?>