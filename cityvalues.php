<?php

/*Requiring the data from 'data.php'. A 'foreach'-loop is used to loop through the items in the '$teams'-array found in 'data.php'. 
Using 'city' as a key, the value of each team is put into a new array called '$cities'.*/ 

    require __DIR__ . '/data.php';
    $cities = [];

    foreach($teams as $key) {
        array_push($cities, $key['city']);
    }

    echo 'The following cities have teams in the data sheet:';
?>

<br>

<?php

//The array containing the city names, '$cities', is looped through, using 'array_unique' as key, in order to eliminate the same city
//being printed several times. The unique cities are printed on different rows.

    foreach(array_unique($cities) as $key) {
        ?>
        <br>
        <?php
        echo $key;
    }
?>

<br>

