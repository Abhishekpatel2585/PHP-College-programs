<?php
    // MAME : ABHISHEK RAMANI
    // ADDRESS : GANDHINAGAR
    
    $n=153;
    $dummy=$n;
    $res=0;
    $sum=1;
    $size=strlen((string)$n);
    while($n>0){
        $rem=(int)$n%10;
        for($i=1;$i<=$size;$i++){
            $sum=$sum*$rem;
        }
        $res=$res+$sum;
        $n=(int)$n/10;
        $sum=1;
    }

    if($dummy==$res){
        print("ARMSTRONG");
    }
    else{
        print("NO ARMSTRONG");
    }
?>