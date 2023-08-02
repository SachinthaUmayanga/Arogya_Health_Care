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
    <form action="PDis.php" method="POST">
    
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col">
            <div class="card card-registration my-4">
              <div class="card-body p-md-5 text-black">

              <?php
                $conn=mysqli_connect('localhost','root','','hospital');
                if($conn){
                    if(isset($_GET['pid'])){
                        $pid=$_GET['pid'];
                        if(isset($_POST['submit'])){
                            $fn=$_POST['txtFN'];
                            $ln=$_POST['txtLN'];
                            $con=$_POST['txtConNo'];
                            $nic=$_POST['txtNIC'];
                            $gen=$_POST['radio'];
                            $add=$_POST['txtAdd'];
                            $dob=$_POST['txtDOB'];
                            $email=$_POST['txtEM'];
                            $mh=$_POST['txtMH'];
                            $note=$_POST['txtNotes'];
                            
                            $queUp="UPDATE patient SET FName='$fn',LName='$ln',TelNo='$con',NIC='$nic',Gender='$gen',PAddress='$add',DOB='$dob',Email='$email',MedicalHistory='$mh',Notes='$note' WHERE PID='$pid'";
                            if(mysqli_query($conn,$queUp)){
                                header("Location:PDis.php");
                            }
                        }
                    }
                    $queGet="SELECT * FROM patient WHERE PID='$pid'";
                    $res=mysqli_query($conn,$queGet);
                    $resData=mysqli_fetch_assoc($res);
                ?>

                  <h3 class="mb-5 text-uppercase">update patient id <?php echo $pid?></h3>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="txtFN" name="txtFN" class="form-control form-control-lg" maxlength="50" value="<?php echo $resData['FName']?>"/>
                        <label class="form-label" for="form3Example1m">First Name</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="txtLN" name="txtLN" class="form-control form-control-lg" maxlength="50" value="<?php echo $resData['LName']?>"/>
                        <label class="form-label" for="form3Example1n">Last Name</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="txtConNo" name="txtConNo" class="form-control form-control-lg" maxlength="10" value="<?php echo $resData['TelNo']?>"/>
                        <label class="form-label" for="form3Example1m1">Telephone Number</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="txtNIC" name="txtNIC" class="form-control form-control-lg" maxlength="12" value="<?php echo $resData['NIC']?>"/>
                        <label class="form-label" for="form3Example1n1">National Identity Card Number</label>
                      </div>
                    </div>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" id="txtAdd" name="txtAdd" class="form-control form-control-lg" maxlength="100" value="<?php echo $resData['PAddress']?>"/>
                    <label class="form-label" for="form3Example8">Address</label>
                  </div>

                  <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                    <h6 class="mb-0 me-4">Gender: </h6>

                    <div class="form-check form-check-inline mb-0 me-4">
                      <input class="form-check-input" type="radio" name="radio" id="femaleGender" <?php if(isset($resData['radio'])&& $resData['radio']=="Female")echo"checked";?> value="Female"/>
                      <label class="form-check-label" for="femaleGender">Female</label>
                    </div>

                    <div class="form-check form-check-inline mb-0 me-4">
                      <input class="form-check-input" type="radio" name="radio" id="maleGender" <?php if(isset($resData['radio'])&& $resData['radio']=="Male")echo"checked";?> value="Male" />
                      <label class="form-check-label" for="maleGender">Male</label>
                    </div>

                  </div>


                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="txtDOB" name="txtDOB" class="form-control form-control-lg" maxlength="10" value="<?php echo $resData['DOB']?>"/>
                        <label class="form-label" for="form3Example1m">Date of Birth</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="txtEM" name="txtEM" class="form-control form-control-lg" maxlength="70" value="<?php echo $resData['Email']?>"/>
                        <label class="form-label" for="form3Example1n">Email ID</label>
                      </div>
                    </div>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" id="txtMH" name="txtMH" class="form-control form-control-lg" maxlength="100" value="<?php echo $resData['MedicalHistory']?>"/>
                    <label class="form-label" for="form3Example90">Medical History</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" id="txtNotes" name="txtNotes" class="form-control form-control-lg" maxlength="100" value="<?php echo $resData['Notes']?>"/>
                    <label class="form-label" for="form3Example99">Additional Notes</label>
                  </div>

                  <div class="d-flex justify-content-end pt-3">
                    <button type="reset" class="btn btn-light btn-lg">Reset all</button>
                    <button type="submit" class="btn btn-warning btn-lg ms-2">Update</button>
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
    else{
        echo'Error 303!<br>Database is NOT Connected!<br><a href="loginform1.html"><img src="imgs/back.png"></a>';
    }
    }
  ?>
</body>
</html>