<?php

    $number=8;
    $dummy=0;

    for($i=2;$i<$number;$i++){
        if($number%$i==0){
            $dummy++;
        }
        
    }

    if($dummy==0){
        print("PRIME");
    }else{
        print("NOT PRIME");
    }

?>