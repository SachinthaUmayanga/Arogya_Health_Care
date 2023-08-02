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
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col">
            <div class="card card-registration my-4">
              <div class="card-body p-md-5 text-black">
              <h3 class="mb-5 text-uppercase">PATIENT CHECKOUT</h3>
                <?php
                  $conn=mysqli_connect('localhost','root','','hospital');
                  $queRes="SELECT 
                  rr.Serial,r.RoomType,r.Price,c.FName,c.LName,rr.RoomNo,rr.PatientNo,rr.ResDate
                  FROM roomres rr
                  INNER JOIN rooms as r
                  ON r.RoomNo=rr.RoomNo
                  INNER JOIN patient as c
                  ON c.PID=rr.PatientNo
                  WHERE rr.CheckOut='0000-00-00'";
                  
                  if(mysqli_query($conn,$queRes)){
                    $dataResult=mysqli_query($conn,$queRes);
                    if(mysqli_num_rows($dataResult)>0){
                      echo '<table width="100%" border=".1" bordercolor="#000066" align="center" boarder="0" cellpadding="5" cellspacing="0">
                        <tr>
                          <th bgcolor="#000066"><font color="#ffffff">Room No.</font></th>
                          <th bgcolor="#000066"><font color="#ffffff">Room Type</font></th>
                          <th bgcolor="#000066"><font color="#ffffff">Price (Rs.)</font></th>
                          <th bgcolor="#000066"><font color="#ffffff">Patient No.</font></th>
                          <th bgcolor="#000066"><font color="#ffffff">Patient Name</font></th>
                          <th bgcolor="#000066"><font color="#ffffff">Res.Date</font></th>
                          <th bgcolor="#000066">&nbsp</th>
                        </tr>';while($rowVal=mysqli_fetch_assoc($dataResult)){
                      echo '<tr>
                        <td>'.$rowVal['RoomNo'].'</td>
                        <td>'.$rowVal['RoomType'].'</td>
                        <td>'.$rowVal['Price'].'</td>
                        <td>'.$rowVal['PatientNo'].'</td>
                        <td>'.$rowVal['FName'].' '.$rowVal['LName'].'</td>
                        <td>'.$rowVal['ResDate'].'</td>
                        <td><a href="Payment.php?id='.$rowVal['Serial'].'" class="btn btn-primary btn-lg">Checkout</a></td>
                      </tr>';
                      }
                      echo '</table>';
                    }
                    else{
                      echo '<p align="center">No Rooms Reserved!</p>';
                    }
                  }
                    
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
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