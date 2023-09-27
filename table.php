<?php

/*'data.php' is required in order to loop through its content and print it into a table.*/

require __DIR__ . '/data.php';

?>
<br><br>

<h3>The following table display the info found in the 'data.php' file:</h3>

<table>
  <tr>
    <th>Team</th>
    <th>League</th>
    <th>Last-time Champions</th>
    <th>City</th>
    <th>Nickname</th>
    <th>URL</th>
  </tr>

  <?php

  /*The items of '$teams' are looped through using '$value => $key', in order to not only print the value found in each index's inner array, but
  also print the name of the index itself. In this case, the outer array index is the name of the team, printed as '$value', and the value of the inner
  array is printed as '$key'. If no value is found, nothing is printed inside the '<td>'-element. */

  foreach($teams as $value => $key) {
    ?>
    <tr>
      <td> <?php echo $value; ?></td>
      <td> <?php if (!empty($key['league'])) echo $key['league'];?></td>
      <td> <?php if (!empty($key['last-time-champions'])) echo $key['last-time-champions'];?></td>
      <td> <?php if (!empty($key['city'])) echo $key['city'];?></td>
      <td> <?php if (!empty($key['nickname'])) echo $key['nickname'];?></td>
      <td> <?php if (!empty($key['url'])) echo $key['url'];?></td>
      </tr>

    <?php
  }

  ?>
  
</table>