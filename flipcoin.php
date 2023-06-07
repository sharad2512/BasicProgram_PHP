<?php

$numFlips = readline("Enter the Integer number of times to flip the coin : ");

function flipCoin($numFlips){
    if($numFlips < 0 ){
        echo "Number of flip coins must have greater than 0";
    }
     $head = 0;
     $tail = 0;
     for ($i = 0; $i < $numFlips; $i++) {
        if(rand(0 , 1) < 0.5){
            $tail++;
        }else{
            $head++;
        }
    }

    $headPercentage = ($head / $numFlips) * 100;
    $tailPercentage = ($tail / $numFlips) * 100;

    echo "Percentage of Head is :: " . $headPercentage;
    echo "Percentage of Tail is :: " . $tailPercentage;
}
    flipCoin($numFlips);
?>