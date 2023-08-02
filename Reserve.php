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
              <h3 class="mb-5 text-uppercase">ROOM RESERVATION</h3>
                <?php
                $conn=mysqli_connect('localhost','root','','hospital');
                $queSel="SELECT * FROM rooms WHERE Status='Active'";
                if(mysqli_query($conn,$queSel)){
                    $dataRes=mysqli_query($conn,$queSel);
                    if(mysqli_num_rows($dataRes)>0){
                        echo '<table width="100%" align="center" border=".1" cellpadding="5" cellspacing="0">
                            <tr>
                                <th bgcolor="#000066"><font color="#ffffff">Room No.</font></th>
                                <th bgcolor="#000066"><font color="#ffffff">Room Type</font></th>
                                <th bgcolor="#000066"><font color="#ffffff">Price</font></th>
                                <th bgcolor="#000066">&nbsp</th>
                            </tr>';
                        while($rowVal=mysqli_fetch_assoc($dataRes)){
                            echo '<tr>
                                <td>'.$rowVal['RoomNo'].'</td>
                                <td>'.$rowVal['RoomType'].'</td>
                                <td>Rs.'.$rowVal['Price'].'</td>
                                <td><a href="PRoom.php?id='.$rowVal['RoomNo'].'" class="btn btn-primary btn-lg">Reserve</a></td>
                            </tr>';
                        }
                        echo '</table>';
                    }
                    else{
                        echo 'All the Rooms are Reserved!<br>';
                    }
                }
                ?>
                <div class="d-flex justify-content-center pt-3">
                    <a href="PSearch.php" class="btn btn-light btn-lg">Back</a>
                  </div>
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
