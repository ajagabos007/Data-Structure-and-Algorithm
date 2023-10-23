<?php 

/**
 * Search for an item in an array using linear search algorithm
 * 
 * @param array $list 
 * @param any $target 
 * @return integer||null
 */
function linearSearch(Array $list , $target)
{
    foreach ($list as $key => $value) {
        if($value==$target)
            return $key;
    }

    return Null;
}

function verify($index){
    echo is_null($index)? 'Target not found': "Target found at {$index}";
}

$numbers = [1,2,3,4,5,6,7,8,9,10];
$result = linearSearch($numbers, 4);
verify($result);
