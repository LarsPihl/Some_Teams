<?php

require __DIR__ . '/data.php';
$cities = [];

foreach($teams as $key) {
    array_push($cities, $key['city']);
}


echo 'The following cities have teams in the data sheet:';
?>

<br>

<?php

foreach(array_unique($cities) as $key) {
    ?>
    <br>
    <?php
    echo $key;
}
?>

<br>

