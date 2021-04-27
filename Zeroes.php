
<?php

function move_zero($arr)
{
    print_r($arr);
    echo ""."<br>";
    $size = sizeof($arr);
   
    for ($i = 0, $counter = 0; $counter < $size; $i++, $counter++) {
        if ($arr[$i] === 0 || containsZero($arr[$i])) {
            $foundzero = $arr[$i];
            for ($j = $i; $j < $size - 1; $j++) $arr[$j] = $arr[$j + 1];
            $arr[$size - 1] = $foundzero;
            $i--;
        }
    }
    return $arr;
}
$num_list1 = array(1, 0, 30, 1, 0, 9);

print_r(move_zero($num_list1));

function containsZero($element)
{
    $strNumber = (string) $element;
    if (strpos($strNumber, '0') !== false) return true;
    return false;
}

?>
