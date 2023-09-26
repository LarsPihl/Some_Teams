<?php

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

  /*foreach($teams as $value => $key) {
    echo '<tr>';
    echo '<td>' . $value . '</td>';
    echo '<td>' . $key['league'] . '</td>';
    echo '<td>' . $key['last-time-champions'] . '</td>';
    echo '<td>' . $key['city'] . '</td>';
    echo '<td>' . $key['nickname'] . '</td>';
    echo '<td>' . $key['url'] . '</td>';
  }*/
  

  foreach($teams as $value => $key) {
    ?>
    <tr>
    <td> <?php echo $value ?></td>
    <td> <?php echo $key['league']?></td>
    <td> <?php echo $key['last-time-champions']?></td>
    <td> <?php echo $key['city']?></td>
    <td> <?php echo $key['nickname']?></td>
    <td> <?php echo $key['url']?></td>
    </tr>

    <?php
  }
  ?>
  
</table>