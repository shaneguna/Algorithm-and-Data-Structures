<?php
// $input [-1, -2, -3, 8, 7]
function getMaxiumEvenSum($input){
 $sum = 0;
 $count = count($input);
 
 for ($i = 0; $i < $count; ++$i) {
   if ($input[$i] > 0) {
     $sum += $input[$i];
   }
 }
 
 if ($sum % 2 === 0) {
   return $sum;
 }
 
 $result = PHP_INT_MIN;
 
 for ($i = 0; $i < $count; ++$i) {
   if ($input[$i] %2 !== 0) {
     if ($input[$i] > 0) {
       $result = max($ans, $sum - $input[$i]);
      
     }else {
       $result = max($ans, $sum + $input[$i]);
     }
   }
 }
 
 return $result;
}
