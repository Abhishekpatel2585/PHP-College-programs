<?php
    # NAME : ABHISHEK RAMANI 
    # ADDRESS : GANDHINAGAR
    $n = 1215;
    $rev = 0;
    while($n>0){
        $rem = (int)$n % 10;
        $rev = ($rev*10) + $rem;
        $n =(int)($n/10);
    }
    print($rev);
?>