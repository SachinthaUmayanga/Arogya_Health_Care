<?php
    session_start();
    if(isset($_SESSION['un'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <title>Arogya Health Care Hospital</title>
  <link rel="icon" href="imgs/logo.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<?php include 'NavBar.php';?>
<?php include 'Header.php';?>

  <section class="h-100 bg-light">
    <form action="PaySave.php" method="POST">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col">
            <div class="card card-registration my-4">
              <div class="card-body p-md-5 text-black">
              <h3 class="mb-5 text-uppercase">BILL RECEIPT</h3>

                <table width="50%" bgcolor="#FFFFFF" align="center" cellpadding="5" cellspacing="0" border="1">
                    <tr>
                        <td bgcolor="#999999">Patient No.</td>
                        <td><?php echo $_SESSION['pNum'];?></td>
                    </tr>
                    <tr>
                        <td bgcolor="#999999">Patient Name</td>
                        <td><?php echo $_SESSION['pName'];?></td>
                    </tr>
                    <tr>
                        <td bgcolor="#999999">Room Type</td>
                        <td><?php echo $_SESSION['roomType'];?></td>
                    </tr>
                    <tr>
                        <td bgcolor="#999999">Price</td>
                        <td>Rs.<?php echo $_SESSION['rPrice'];?></td>
                    </tr>
                    <tr>
                        <td bgcolor="#999999">Check In Date</td>
                        <td><?php echo $_SESSION['chIn'];?></td>
                    </tr>
                    <tr>
                        <td bgcolor="#999999">Check Out Date</td>
                        <td><?php echo $_SESSION['chOut'];?></td>
                    </tr>
                    <tr>
                        <td bgcolor="#999999">No. of Days</td>
                        <td><?php echo $_SESSION['days'];?></td>
                    </tr>
                    <tr>
                        <td bgcolor="#999999">Total Bill</td>
                        <td>Rs.<?php echo number_format((float)$_SESSION['pay'],2,'.','');?></td>
                    </tr>
                </table>

                <div class="d-flex justify-content-center pt-3">
                    <button type="submit" class="btn btn-warning btn-lg ms-2">Paid</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
</section>

<?php include 'Footer.php';?>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <?php
    }
  ?>
</body>
</html>