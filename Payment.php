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
    <form action="Pay.php" method="POST">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col">
            <div class="card card-registration my-4">
              <div class="card-body p-md-5 text-black">
              <h3 class="mb-5 text-uppercase">PAYMENT</h3>

                <?php
                    $serial=$_GET['id'];
                    $conn=mysqli_connect('localhost','root','','hospital');
                    $queRes="SELECT rr.Serial,r.RoomType,r.Price,c.FName,c.LName,rr.RoomNo,rr.PatientNo,rr.ResDate
                    FROM roomres rr
                    INNER JOIN rooms as r
                    ON r.RoomNo=rr.RoomNo
                    INNER JOIN patient as c
                    ON c.PID=rr.PatientNo
                    WHERE rr.Serial='$serial'";
                    if(mysqli_query($conn,$queRes)){
                        $dataResult=mysqli_query($conn,$queRes);
                        $data=mysqli_fetch_assoc($dataResult);
                        $rd=$data['ResDate'];
                        $newDate=new DateTime($rd);
                        $date1=date('Y-m-d');
                        $date2=$newDate->format('Y-m-d');
                        $datetime1=strtotime($date1);
                        $datetime2=strtotime($date2);
                        $interval=(($datetime1-$datetime2)/60/60/24)+1;
                ?>
                <table width="100%" align="center" cellpadding="5" cellspacing="0" border="1">
                    <tr>
                        <td bgcolor="#66CC99">Room No.</td>
                        <td bgcolor="#66CC99">Room Type</td>
                        <td bgcolor="#66CC99">Price</td>
                    </tr>
                    <tr>
                        <td><?php echo $data['RoomNo'];?></td>
                        <td><?php echo $data['RoomType'];?></td>
                        <td><?php echo $data['Price'];?></td>
                    </tr>
                    <tr>
                        <td bgcolor="#66CC99">Patient No.</td>
                        <td colspan="2" bgcolor="#66CC99">Patient Name</td>
                    </tr>
                    <tr>
                        <td><?php echo $data['PatientNo'];?></td>
                        <td colspan="2"><?php echo $data['FName'].' '.$data['LName'];?></td>
                    </tr>
                    <tr>
                        <td bgcolor="#66CC99">Check In</td>
                        <td bgcolor="#66CC99">Check Out</td>
                        <td bgcolor="#66CC99">&nbsp;</td>
                    </tr>
                    <tr>
                        <td><?php echo $date2;?></td>
                        <td><?php echo $date1;?></td>
                        <td><?php echo $interval;?></td>
                    </tr>
                </table>
                <div class="d-flex justify-content-center pt-3">
                    <button type="submit" class="btn btn-warning btn-lg ms-2">Pay</button>
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
    $payment=$data['Price']*$interval;
    $_SESSION['pay']=$payment;
    $_SESSION['pNum']=$data['PatientNo'];
    $_SESSION['pName']=$data['FName'].' '.$data['LName'];
    $_SESSION['days']=$interval;
    $_SESSION['roomType']=$data['RoomType'];
    $_SESSION['rPrice']=$data['Price'];
    $_SESSION['chIn']=$date2;
    $_SESSION['chOut']=$date1;
    $_SESSION['serId']=$serial;
    $_SESSION['rN']=$data['RoomNo'];
    
    }
    }
  ?>
</body>
</html>