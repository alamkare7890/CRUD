<?php
  $servname = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'Crud';

  $con = mysqli_connect($servname, $username, $password, $database);

  if(!$con){
    die('This connection is not successful'.mysqli_connect_error());
  };

  $sql1 = "SELECT * FROM `notes`";
  $row = mysqli_query($con, $sql1);
  $r = mysqli_num_rows($row);
  $i = 0;
  echo '<table id="#myTable">';
  if($r > 0){
      while($value = mysqli_fetch_assoc($row)){
        echo '<tr>';
        //echo '<td>' . $value . '</td>';
        echo '<td>' . $value['id'] .'</td>' . '<td>'. $value['name'] .'</td>'.'<td>'. $value['email'] .'</td>';
        echo '</tr>';
      }
  }
  echo'</table>';

?>