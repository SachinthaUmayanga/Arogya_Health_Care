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
    <form action="StaffRegPro.php" method="POST">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col">
            <div class="card card-registration my-4">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">STAFF REGISTRATION FORM</h3>
                  <div class="form-outline mb-4">
                    <?php echo $_SESSION['sid'];?><br>
                    <label class="form-label" for="form3Example8">Staff ID</label>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="txtFN" name="txtFN" class="form-control form-control-lg" maxlength="50"/>
                        <label class="form-label" for="form3Example1m">First Name</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="txtLN" name="txtLN" class="form-control form-control-lg" maxlength="50"/>
                        <label class="form-label" for="form3Example1n">Last Name</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="txtUN" name="txtUN" class="form-control form-control-lg" maxlength="10"/>
                        <label class="form-label" for="form3Example1m1">Username</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="password" id="txtPW" name="txtPW" class="form-control form-control-lg" maxlength="10"/>
                        <label class="form-label" for="form3Example1n1">Password</label>
                      </div>
                    </div>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" id="txtAdd" name="txtAdd" class="form-control form-control-lg" maxlength="100"/>
                    <label class="form-label" for="form3Example8">Address</label>
                  </div>

                  <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                    <h6 class="mb-0 me-4">Gender:   </h6>

                    <div class="form-check form-check-inline mb-0 me-4">
                      <input class="form-check-input" type="radio" name="radio" id="femaleGender" value="Female" />
                      <label class="form-check-label" for="femaleGender">Female</label>
                    </div>

                    <div class="form-check form-check-inline mb-0 me-4">
                      <input class="form-check-input" type="radio" name="radio" id="maleGender" value="Male" />
                      <label class="form-check-label" for="maleGender">Male</label>
                    </div>

                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="txtDOB" name="txtDOB" class="form-control form-control-lg" maxlength="10"/>
                        <label class="form-label" for="form3Example1m">Date of Birth</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="txtEM" name="txtEM" class="form-control form-control-lg" maxlength="70"/>
                        <label class="form-label" for="form3Example1n">Email ID</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="txtNIC" name="txtNIC" class="form-control form-control-lg" maxlength="12"/>
                        <label class="form-label" for="form3Example1m">National Identity Card Number</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="txtConNo" name="txtConNo" class="form-control form-control-lg" maxlength="10"/>
                        <label class="form-label" for="form3Example1n">Telephone Number</label>
                      </div>
                    </div>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" id="txtDes" name="txtDes" class="form-control form-control-lg" maxlength="50"/>
                    <label class="form-label" for="form3Example90">Designation</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" id="txtQul" name="txtQul" class="form-control form-control-lg" maxlength="100"/>
                    <label class="form-label" for="form3Example99">Qualifications</label>
                  </div>

                  <div class="d-flex justify-content-end pt-3">
                    <a href="StaffSearch.php" class="btn btn-light btn-lg">Search</a>
                    <button type="reset" class="btn btn-light btn-lg">Reset all</button>
                    <button type="submit" class="btn btn-warning btn-lg ms-2">Register</button>
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