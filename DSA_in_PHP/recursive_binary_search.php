<?php 

/**
 * Search for an item in an array using recursive binary search algorithm
 * 
 * @param array $list 
 * @param any $target 
 * @return integer||null
 */
 

function recursiveBinarySearch(Array $list , $target)
{
    $list_size = count($list);
   
    if ($list_size == 0)
        return false;
   
   if($list_size==1)
        return $list[0] == $target;
   
   $mid_point = floor ($list_size / 2);

   if($list[$mid_point] == $target )
        return true;

    return $list[$mid_point] > $target ? recursiveBinarySearch(array_slice($list, 0, $mid_point), $target) 
    :  recursiveBinarySearch(array_slice($list, $mid_point), $target);
}

function verify($result){
    echo $result?  "Target found!!": 'Target not found';
}

$numbers = [1,2,3,4,5,6,7,8,9,10];
$result = recursiveBinarySearch($numbers, 10);
verify($result);