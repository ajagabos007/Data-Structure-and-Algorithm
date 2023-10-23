<?php 

/**
 * Search for an item in an array using binary search algorithm
 * 
 * @param array $list 
 * @param any $target 
 * @return integer||null
 */
function binarySearch(Array $list , $target)
{
   $first = 0;
   $last = count($list);
   do {
        $mid_point = floor(($first + $last) / 2);

        if($list[$mid_point] == $target)
            return $mid_point;

        if($list[$mid_point] < $target){
            $first = $mid_point + 1; 
        }
        elseif ($list[$mid_point] > $target) {
            $last = $mid_point -1;
        }
        $count++;
   } while ($first < $last);

    return Null;
}

function verify($index){
    echo is_null($index)? 'Target not found': "Target found at {$index}";
}

$numbers = [1,2,3,4,5,6,7,8,9,10];
$result = binarySearch($numbers, 2);
verify($result);