<?php
function is_arithmetic($arr){

   $delta = $arr[1] - $arr[0];
   for($i=0; $i<sizeof($arr)-1; $i++){
        if (($arr[$i + 1] - $arr[$i]) != $delta){
             
             return "Not an arithmetic sequence";
        }       
    }
    return "An arithmetic sequence";
}
$my_arr1 = array(6, 7, 10, 11);
$my_arr2 = array(5, 7, 9, 11);

print_r(is_arithmetic($my_arr1)."<br>");
print_r(is_arithmetic($my_arr2));
?>