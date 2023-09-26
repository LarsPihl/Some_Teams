<?php
require __dir__ . '/data.php';
$number = 0;
foreach($teams as $key) {
    $number++;
}

echo 'The number of teams in the data sheet is ' . $number . '.';
?>
<br>
<br>
