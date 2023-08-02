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
    <form action="DSearchPro.php" method="POST">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col">
            <div class="card card-registration my-4">
                <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">DOCTOR SEARCH</h3>

                <div class="form-outline mb-4">
                    <input type="text" id="txtDID" name="txtDID" class="form-control form-control-lg" maxlength="10"/>
                    <label class="form-label" for="form3Example8">Doctor ID</label>
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example8"><p><i>Keep the Field Empty to Search All Records!</i></p></label>
                </div>

                <div class="d-flex justify-content-end pt-3">
                    <button type="reset" class="btn btn-light btn-lg">Reset all</button>
                    <button type="submit" class="btn btn-warning btn-lg ms-2">Search</button>
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