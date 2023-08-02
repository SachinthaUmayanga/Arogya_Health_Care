<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarLeftAlignExample"
      aria-controls="navbarLeftAlignExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarLeftAlignExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <div class="container-fluid">
      <a class="navbar-brand" href="Main.php">
      <img src="imgs/logo.png" alt="Logo" style="width:40px;" class="rounded-pill"> 
      </a>
       </div>  
      <li class="nav-item">
          <a class="nav-link" aria-current="page" href="Main.php">Home</a>
        </li>
        
        <!-- Navbar dropdown -->
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Registration
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="PNumGen.php">Patient Registration</a>
          <a class="dropdown-item" href="StaffNumGen.php">Staff Registration</a>
          <a class="dropdown-item" href="DNumGen.php">Doctor Registration</a>
        </div>
      </li>

        <li class="nav-item">
          <a class="nav-link" href="Reserve.php">Reservation</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="CheckOut.php">Payments</a>
        </li>
        

        <li class="nav-item">
          <a class="nav-link" href="Logout.php">Logout</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->
    <span class="navbar-text">
      You are Loging as <?php echo $_SESSION['RName'];?>
    </span>
  </div>
  <!-- Container wrapper -->

</nav>