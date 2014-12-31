<?php 

function pingPong($last_number)
{
    $count = 0;
    $final_array = array();
    while ($count <= $last_number) {
        if ($count == 0) {
            array_push($final_array, 0);
        } elseif ($count % 3 == 0 && $count % 5 == 0) {
            array_push($final_array, "ping-pong");
        } elseif ($count % 3 == 0) {
            array_push($final_array, "ping");
        } elseif ($count % 5 == 0) {
            array_push($final_array, "pong");
        } else {
            array_push($final_array, $count);
        }
        ++$count;
    }
    return $final_array;
}

pingPong(3);


function canEat($food)
{
    if (!($food == "pineapples") && !($food == "fish") ) {
        return "She can eat this food.";
    } else {
        return "She can't eat this food.";
    }
}

function canEat($food)
{
    if ($food == "pineapples" || $food == "fish") {
        return "She can't eat this food.";
    } else {
        return "She can eat this food.";
    }
}

echo canEat("fish");
echo canEat("cats");


function total($last_number)
{
    $numbers_to_total = range(1, $last_number);
    $total = 0;
    foreach ($numbers_to_total as $value_to_add) {
        $total = $total + $value_to_add;
    }
    return $total;
}

function listHotelFloors($total_floors)
{
    $final_array = array();
    $all_floors = range(1, $total_floors);
    foreach ($all_floors as $current_floor) {
        if ($current_floor != 13){
            array_push($final_array, $current_floor);
        }
    }
    return $final_array;
}
?>