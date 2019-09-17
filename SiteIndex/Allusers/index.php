  <?php
  $db_name = 'xeroxapp';
$db_user = 'root';
$db_pass = 'root';
$db_host = 'localhost';
   include_once('connection.php');
  $query="select * from payment_stat ";
  $result=mysqli_query($con,$query);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>All Users List</title>
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
  </head>
  <body>
    <div class="limiter">
  		<div class="container-table100">
  			<div class="wrap-table100">
  				<div class="table100">
  					<table>
  						<thead>
  							<tr class="table100-head">
                    <th>User's Email</th>
                    <th>No. of Documents</th>
                    <th>Amount</th>
                    <th>Payment Status</th>
                </tr>
              </thead>
      <?php
          while($rows=mysqli_fetch_assoc($result))
          {
      ?>
              <tr>
              <script>
                var x= <?php $rows['user_email']; ?>;
              </script>
                <td> <a id="redMail" onclick="newFun(x)"><?php echo $rows['user_email']; ?></a></td>
                <td><?php echo $rows['noOfDocs']; ?></td>
                <td><?php echo $rows['amount']; ?></td>
                <td><?php echo $rows['Payment_Status']; ?></td>
              </tr>
      <?php
    }
       ?>
</table>

<script>
      var tempmail;
    function newFun(tempmail)
    {
        <?php $userrmail = tempmail ?>
        window.open("user1.php");
    }

</script>
  </body>
</html>
