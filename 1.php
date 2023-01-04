<?php
    function narcissistic_number($angka){
        $jumlah     = 0;
        $loop      = str_split($angka);
        $panjang    = count($loop);
      
        foreach($loop as $n){
          $jumlah += pow((int)$n, $panjang);
        }

        if($jumlah==$angka){
            return true;
        }else{
            return false;
        }
    }
      
    echo "153 : " . narcissistic_number(153);
    echo "<br>";
    echo "111 : " . narcissistic_number(111);
