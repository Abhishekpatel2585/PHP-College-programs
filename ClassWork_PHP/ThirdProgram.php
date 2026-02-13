<?php
    // NAME : ABHISHEK RAMANI 
    //ADDRESS : GANDHINAGAR
    $no1 = 0;
    $no2 = 1;
    $no3 = 1;
    $n = 10;
    print($no1." ");
    print($no2." ");
    for($i=1;$i<=$n;$i++){
        print($no3." ");
        $no1=$no2;
        $no2=$no3;
        $no3=$no1+$no2;
    }
?>