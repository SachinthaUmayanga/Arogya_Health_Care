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
                $did=$_POST['txtDID'];
                $conn=mysqli_connect('localhost','root','','hospital');
                if($conn){
                    //echo'Database is Connected';
                    if(!empty($did)){
                        $queSel="SELECT * FROM doctor WHERE DocID='$did'";
                        if(mysqli_query($conn,$queSel)){
                            $dataRes=mysqli_query($conn,$queSel);
                            if(mysqli_num_rows($dataRes)>0){
                                echo'<font color="#000066" face="calibri" size="5">Search Result for Doctor ID:'.$did.';</font>';
                                echo'<table width="100%" align="center" border=".1" cellpadding="5" cellspacing="0">
                                    <tr>
                                        <th bgcolor="#000066"><font color="#ffffff">Doctor ID</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">Doctor Name</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">Telephone Number</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">NIC</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">Address</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">Gender</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">Date of Birth</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">Email ID</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">Professional Information</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">Experience</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">Edit</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">Delete</font></th>
                                    </tr>';
                                while($rowVal=mysqli_fetch_assoc($dataRes)){
                                    echo'<tr>
                                        <td>'.$rowVal['DocID'].'</td>
                                        <td>'.$rowVal['FName'].' '.$rowVal['LName'].'</td>
                                        <td>'.$rowVal['ConNo'].'</td>
                                        <td>'.$rowVal['NIC'].'</td>
                                        <td>'.$rowVal['DAdd'].'</td>
                                        <td>'.$rowVal['Gen'].'</td>
                                        <td>'.$rowVal['DOB'].'</td>
                                        <td>'.$rowVal['Email'].'</td>
                                        <td>'.$rowVal['ProInformation'].'</td>
                                        <td>'.$rowVal['Experience'].'</td>
                                        <td><a href="DUpdate.php?did='.$rowVal['DocID'].'"><img src="imgs/edit.png" width="100" height="46"></a></td>
                                        <td><a href="DocDelete.php?did='.$rowVal['DocID'].'"><img src="imgs/delete.png" width="100" height="46"></a></td>
                                    </tr>';
                                }
                                echo'</table>';
                            }
                        }
                        else{
                            echo'Data not selected for Customer ID:'.$pid.'!'.mysqli_error($conn);
                        }
                    }
                    else{
                        $queSel="SELECT * FROM doctor";
                        if(mysqli_query($conn,$queSel)){
                            $dataRes=mysqli_query($conn,$queSel);
                            if(mysqli_num_rows($dataRes)>0){
                                echo'<table width="100%" align="center" border=".1" cellpadding="5" cellspacing="0">
                                    <tr>
                                    <th bgcolor="#000066"><font color="#ffffff">Doctor ID</font></th>
                                    <th bgcolor="#000066"><font color="#ffffff">Doctor Name</font></th>
                                    <th bgcolor="#000066"><font color="#ffffff">Telephone Number</font></th>
                                    <th bgcolor="#000066"><font color="#ffffff">NIC</font></th>
                                    <th bgcolor="#000066"><font color="#ffffff">Address</font></th>
                                    <th bgcolor="#000066"><font color="#ffffff">Gender</font></th>
                                    <th bgcolor="#000066"><font color="#ffffff">Date of Birth</font></th>
                                    <th bgcolor="#000066"><font color="#ffffff">Email ID</font></th>
                                    <th bgcolor="#000066"><font color="#ffffff">Professional Information</font></th>
                                    <th bgcolor="#000066"><font color="#ffffff">Experience</font></th>
                                    <th bgcolor="#000066"><font color="#ffffff">Edit</font></th>
                                    <th bgcolor="#000066"><font color="#ffffff">Delete</font></th>
                                    </tr>';
                                while($rowVal=mysqli_fetch_assoc($dataRes)){
                                    echo'<tr>
                                    <td>'.$rowVal['DocID'].'</td>
                                    <td>'.$rowVal['FName'].' '.$rowVal['LName'].'</td>
                                    <td>'.$rowVal['ConNo'].'</td>
                                    <td>'.$rowVal['NIC'].'</td>
                                    <td>'.$rowVal['DAdd'].'</td>
                                    <td>'.$rowVal['Gen'].'</td>
                                    <td>'.$rowVal['DOB'].'</td>
                                    <td>'.$rowVal['Email'].'</td>
                                    <td>'.$rowVal['ProInformation'].'</td>
                                    <td>'.$rowVal['Experience'].'</td>
                                    <td><a href="DUpdate.php?did='.$rowVal['DocID'].'"><img src="imgs/edit.png" width="100" height="46"></a></td>
                                    <td><a href="DocDelete.php?did='.$rowVal['DocID'].'"><img src="imgs/delete.png" width="100" height="46"></a></td>
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