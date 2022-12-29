<?php
//CREATE TABLE `crud`.`notes` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR NOT NULL , `email` VARCHAR NOT NULL , `message` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $name = $_POST['forname'];
  $email = $_POST['formEmail'];
  $mess = $_POST['formes'];
  
  $servname = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'crud';

  $con = mysqli_connect($servname, $username, $password, $database);

  if(!$con){
    die('This connection is not successful'.mysqli_connect_error());
  }else{
    $sql = "INSERT INTO `notes` (`name`, `email`, `message`) VALUES ('$name', '$email', '$mess')";
    $result = mysqli_query($con, $sql);
    if(!$result){
      die('There is an' . mysqli_connect_error());
    }else{
      echo 'submit';
    }
  }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Title</title>
    <!-- Other files CSS-link -->

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body> 
    <section class="crud">
      <div class="container">
        <form action="CRUD.php" method="post">
          <div class="mb-3">
            <div class="form-group">
              <label for="forname" class="form-label">Name</label>
              <input type="text" class="form-control" name="forname" id="forname" aria-describedby="emailHelp">
            </div> 
          </div>
          <div class="mb-3">
            <div class="form-group">
              <label for="formEmail" class="form-label">Email</label>
              <input type="email" class="form-control" id="formEmail" name="formEmail">
            </div>
          </div>
          <div class="mb-3">
            <div class="form-group">
              <label for="formes" class="form-label">Message</label>
              <textarea id='formes' name='formes' class='form-control' ></textarea>
            </div>
          </div>
          <button type="submit" id='forSub' class="btn btn-primary">Submit</button>
        </form>
      </div>
    </section>





   





    <!-- J-Query js-link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- AOS js-link -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Swiper js-link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- Other files js-link -->
    <!-- Custom js-link -->
    <script>
      $(document).ready( function () {
        $('#myTable').DataTable();
      } );
    </script>
    <script src="js/script.js"></script>
  </body>
</html>
  <section class='table_data'>
      <div class="container">
        <?php
          $sql1 = "SELECT * FROM `notes`";
          $row = mysqli_query($con, $sql1);
          $r = mysqli_num_rows($row);
          $i = 0;
          echo '<table id="#myTable">';
          if($r > 0){
              while($value = mysqli_fetch_assoc($row)){
                echo '<tr>';
                //echo '<td>' . $value . '</td>';
                echo '<td>' . $value['id'] .'</td>' . '<td>'. $value['name'] .'</td>'.'<td>'. $value['email'] .'</td>'. '<td>'. $value['message'] .'</td>';
                echo '</tr>';
              }
          }
          echo'</table>';
        }
        ?> 
      </div>
    </section>