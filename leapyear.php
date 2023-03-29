<?php
function leap_year(){
    for($i=4;$i<=2024;$i+=4){
        if ($i % 400 == 0){
            echo $i . "\n";
        }else if($i % 100 == 0){
            continue;
        }else if($i % 4 == 0){
            echo $i . "\n";
        }
    }
}
leap_year();
?>
