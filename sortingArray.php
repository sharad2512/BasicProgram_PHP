<?php
class SortingArr{
    static function sortArray(){ 
        $arr = [1,2,5,7,4,10,22,34,99,21,8,11,35,3,13,19,29,27,26,81,95];
        $len = count($arr);
        for($i=0; $i < $len ; $i++){
            for($j=$i+1; $j < $len; $j++){
                $min = $arr[0];
                if($arr[$i] > $arr[$j]){
                    $min = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $min;
                }
            }
        }
       foreach($arr as $newArr){
          echo $newArr . " ";
       }
    }
}
   SortingArr::sortArray();
   
?>