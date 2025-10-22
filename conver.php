<?php
    $imp=$_GET ['imp'];
    $OP=$_GET ['OP'];
    if ($OP=='LFO'){
        $val=$imp*12000;
        echo "Valor sin IVA ", $val."<br>";
        $val=($imp*12000)+((($imp*12000)*10.5)/100);
        echo "Valor con IVA ", $val;
    }
    if ($OP=='ACE'){
        $val=$imp*15000;
        echo "Valor sin IVA ", $val."<br>";
        $val=($imp*15000)+((($imp*15000)*10.5)/100);
        echo "Valor con IVA ", $val;
    }
    if ($OP=='PCL'){
        $val=$imp*17000;
        echo "Valor sin IVA ", $val."<br>";
        $val=($imp*17000)+((($imp*17000)*10.5)/100);
        echo "Valor con IVA ", $val;
    }
    ?>