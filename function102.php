<?php
    function multiple($a,$b){
        $sum = $a + $b;
        print("$sum = " . $sum . "<br />");
    }
    multiple(10,20);

    function add($a,$b){
        return array ($a + $b);
    }
    [$a,$b] =  add(100,200);
    print("Sum = " . ($a+$b));
?>