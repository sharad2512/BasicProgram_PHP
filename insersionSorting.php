<?php 
$arr = [12,32,43,45,66,1,98,44,12,76,89,49,99,0];
$newArr = [];
function insertionSort(&$arr){
     for ($i=0; $i < count($arr); $i++) {
        for ($j=$i+1; $j < count($arr); $j++) {
            $min = $arr[0];  
           if($arr[$i] > $arr[$j]){
            $min = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $min;

           }
        
        }
    }    
}
insertionSort($arr);
foreach($arr as $arr1){
    echo $arr1 . " ";
}
?>