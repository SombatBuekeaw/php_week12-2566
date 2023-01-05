<?php
    $sum = function($a,$b){
        return array($a,$b);
    };
    [$a,$b] = $sum(10,5);
    print($a+$b . "<br />");

    //2. Arrow function
    $resule = fn($a,$b)=> $a+$b;
    $total = $result(10,5);
    print($total . "<br />");

    //2.Arrow function
    $division = fn($a,$b)=>array($a,$b);
    [$a,$b] = $division(50,5);
    print($a/$b . "<br />");

    //4.Arrow function with multple
    $division = fn($a,$b)=>array($a,$b);
    [$a,$b] = $multiply(100,2);
    print($a*$b);

