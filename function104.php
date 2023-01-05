<?php
    //PHP Closures
    $anony = function(){
        return "lambda";

    };
    //Closures
    print(get_class($anony));
    //object
    print(gettype($anony));
?>