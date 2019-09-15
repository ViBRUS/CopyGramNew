<?php
  $db_name = 'xeroxapp';
$db_user = 'root';
$db_pass = 'root';
$db_host = 'localhost';
   include_once('connection.php');
  $query="select * from printing_details";
  $result=mysqli_query($con,$query);

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="CSS/styles.css">
  </head>
  <body>
    <h1>Requests from students..</h1>
    <table style="width:100%">
      <tr>
        <th>User</th>
        <th>File Name</th>
        <th>Copies</th>
        <th>pages</th>
        <th>Sides</th>
        <th>Color</th>
        <th>Payment Status</th>
        <th>Download</th>
      </tr>

        <?php
            while($rows=mysqli_fetch_assoc($result))
            {
        ?>
                <tr>
                  <td><?php echo $rows['user_email']; ?></td>
                  <td><?php echo $rows['file_name']; ?></td>
                  <td><?php echo $rows['copies']; ?></td>
                  <td><?php echo $rows['pages']; ?></td>
                  <td><?php echo $rows['sides']; ?></td>
                  <td><?php echo $rows['color']; ?></td>
                  
                </tr>
        <?php
      }
         ?>


    </table>
  </body>
</html>
