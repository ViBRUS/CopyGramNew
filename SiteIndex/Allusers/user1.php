
<?php
  $db_name = 'xeroxapp';
$db_user = 'root';
$db_pass = 'root';
$db_host = 'localhost';
   include('connection.php');
   require('index.php');

  // $userrmail="aus@hd.com";
   //echo $userrmail;
  //   $query1="select * from printing_details where user_email= '$userrmail' ";
  //   $result1=mysqli_query($con,$query1);


  $query1="select * from printing_details,payment_details where payment_details.Payment_Status='Done' and payment_details.user_email=printing_details.user_email";
  $result1=mysqli_query($con,$query1);

  //$query2="select * from printing_details where user_email= '$userrmail'";
  //$result2=mysqli_query($con,$query1);

  $querydoc="select * from documents,printing_details,payment_details where printing_details.user_email=documents.user_email and documents.user_email=payment_details.user_email and printing_details.file_name=documents.filename and payment_details.Payment_Status='Done'";
  $resultdoc=mysqli_query($con,$querydoc);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

<style>
.button1 {
  display: inline-block;
  border-radius: 4px;
  background-color: #C44FC1;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 15px;
  padding: 10px;
  width: 120px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button1 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button1 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button1:hover span {
  padding-right: 25px;
}

.button1:hover span:after {
  opacity: 1;
  right: 0;
}

.button2 {
  display: inline-block;
  border-radius: 4px;
  background-color: #4757CF;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 15px;
  padding: 10px;
  width: 120px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button2 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button2 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button2:hover span {
  padding-right: 25px;
}

.button2:hover span:after {
  opacity: 1;
  right: 0;
}


</style>

  </head>
  <body>
    <div class="limiter">
      <div class="container-table100">
        <div class="wrap-table100">
          <div class="table100">
            <table>
              <thead>
                <tr class="table100-head">
                  <th>User</th>
                  <th>File Name</th>
                  <th>Copies</th>
                  <th>pages</th>
                  <th>Sides</th>
                  <th>Color</th>
                  <th>Download</th>
                  <th>Print Done</th>
                  <th></th>
                </tr>
              </thead>

        <?php
            while($rows=mysqli_fetch_assoc($result1))
            {
                $rowsdoc=mysqli_fetch_assoc($resultdoc);
        ?>
                <tr>
                  <td><?php echo $rows['user_email']; ?></td>
                  <td><?php echo $rows['file_name']; ?></td>
                  <td><?php echo $rows['copies']; ?></td>
                  <td><?php echo $rows['pages']; ?></td>
                  <td><?php echo $rows['sides']; ?></td>
                  <td><?php echo $rows['color']; ?></td>

                  <td><a  href="<?php echo $rowsdoc['filelocation']?>">  <button class="button1" style="vertical-align:middle"><span>Download</span></button></a></td>

                  <td><button class="button2" style="vertical-align:middle" onclick="check(this.done)"><span>Print Done</span></button></td>
                  
                </tr>
        <?php
      }
         ?>


    </table>

    <script>
                function check(done) { /*function to check userid & password*/
                    /*the following code checkes whether the entered userid and password are matching*/

                }
            </script>


  </body>
</html>
