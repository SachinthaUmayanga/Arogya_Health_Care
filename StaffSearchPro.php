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
        <div class="card-body p-md-5 text-black">
        <h3 class="mb-5 text-uppercase">SEARCH RESULTES</h3>

            <?php
                $sid=$_POST['txtSID'];
                $conn=mysqli_connect('localhost','root','','hospital');
                if($conn){
                    //echo'Database is Connected';
                    if(!empty($sid)){
                        $queSel="SELECT * FROM staff WHERE StaffID='$sid'";
                        if(mysqli_query($conn,$queSel)){
                            $dataRes=mysqli_query($conn,$queSel);
                            if(mysqli_num_rows($dataRes)>0){
                                echo'<font color="#000066" face="calibri" size="5">Search Result for Staff ID:'.$sid.';</font>';
                                echo'<table width="100%" align="center" border=".1" cellpadding="5" cellspacing="0">
                                    <tr>
                                        <th bgcolor="#000066"><font color="#ffffff">Staff ID</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">Full Name</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">Address</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">Gender</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">Date of Birth</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">Email</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">NIC</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">Telephone Number</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">Designation</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">Qualification</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">Edit</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">Delete</font></th>
                                    </tr>';
                                while($rowVal=mysqli_fetch_assoc($dataRes)){
                                    echo'<tr>
                                        <td>'.$rowVal['StaffID'].'</td>
                                        <td>'.$rowVal['FName'].' '.$rowVal['LName'].'</td>
                                        <td>'.$rowVal['SAddress'].'</td>
                                        <td>'.$rowVal['Gender'].'</td>
                                        <td>'.$rowVal['DOB'].'</td>
                                        <td>'.$rowVal['Email'].'</td>
                                        <td>'.$rowVal['NIC'].'</td>
                                        <td>'.$rowVal['TelNo'].'</td>
                                        <td>'.$rowVal['Designation'].'</td>
                                        <td>'.$rowVal['Qualification'].'</td>
                                        <td><a href="SUpdate.php?sid='.$rowVal['StaffID'].'"><img src="imgs/edit.png" width="100" height="46"></a></td>
                                        <td><a href="SDelete.php?sid='.$rowVal['StaffID'].'"><img src="imgs/delete.png" width="100" height="46"></a></td>
                                    </tr>';
                                }
                                echo'</table>';
                            }
                        }
                        else{
                            echo'Data not selected for Customer ID:'.$sid.'!'.mysqli_error($conn);
                        }
                    }
                    else{
                        $queSel="SELECT * FROM staff";
                        if(mysqli_query($conn,$queSel)){
                            $dataRes=mysqli_query($conn,$queSel);
                            if(mysqli_num_rows($dataRes)>0){
                                echo'<table width="100%" align="center" border=".1" cellpadding="5" cellspacing="0">
                                    <tr>
                                        <th bgcolor="#000066"><font color="#ffffff">Staff ID</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">Full Name</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">Address</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">Gender</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">Date of Birth</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">Email</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">NIC</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">Telephone Number</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">Designation</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">Qualification</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">Edit</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">Delete</font></th>
                                    </tr>';
                                while($rowVal=mysqli_fetch_assoc($dataRes)){
                                    echo'<tr>
                                        <td>'.$rowVal['StaffID'].'</td>
                                        <td>'.$rowVal['FName'].' '.$rowVal['LName'].'</td>
                                        <td>'.$rowVal['SAddress'].'</td>
                                        <td>'.$rowVal['Gender'].'</td>
                                        <td>'.$rowVal['DOB'].'</td>
                                        <td>'.$rowVal['Email'].'</td>
                                        <td>'.$rowVal['NIC'].'</td>
                                        <td>'.$rowVal['TelNo'].'</td>
                                        <td>'.$rowVal['Designation'].'</td>
                                        <td>'.$rowVal['Qualification'].'</td>
                                        <td><a href="SUpdate.php?sid='.$rowVal['StaffID'].'"><img src="imgs/edit.png" width="100" height="46"></a></td>
                                        <td><a href="SDelete.php?sid='.$rowVal['StaffID'].'"><img src="imgs/delete.png" width="100" height="46"></a></td>
                                    </tr>';
                                }
                                echo'</table>';
                            }
                        }
                    }
                }
                else{
                    echo'Error 303!<br>Database is not Connected!<br><a href="loginform1.html"><img src="imgs/back.png"></a>';
                }
            ?>
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