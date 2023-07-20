<?php
    function ola() {
        echo "Olá, mundão </br>";
    }

    function soma () { 
        $v = func_get_args(); 
        $totv = func_num_args(); 
        $t = 0;
        for ($i=0; $i < $totv; $i++) { 
            $t += $v[$i];
        }
        return $t;
    }
?>