<?php
    function findNeedle($arr , $find){
        return array_search($find,$arr);
    }

    $arr = ["red", "blue", "yellow", "black", "grey"];
    echo findNeedle($arr, "blue");
?>