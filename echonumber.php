<?php

/*'data.php' is required in order to loop through the items in the '$teams'-array. Using every index as key, the number of teams are calculated
by counting the number of indexes in the array. This by creating a variable with the default value of '0'. Every index found increases this value by '1'.
The result is then printed out.*/

    require __dir__ . '/data.php';
    $number = 0;
    foreach($teams as $key) {
        $number++;
    }

    echo 'The number of teams in the data sheet is ' . $number . '.';
?>

<br>
<br>
