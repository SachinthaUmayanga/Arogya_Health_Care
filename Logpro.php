<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Arogya Health Care Hospital</title>
    </head>
    <body>
        <?php
            $un=$_POST['username'];
            $pw=$_POST['password'];

            if(!empty($un) && !empty($pw)){
                $conn=mysqli_connect('localhost','root','','hospital');

                if($conn){
                    //echo'Database is connected!';
                    $queData="SELECT * FROM users WHERE UserName='$un'";

                    if(mysqli_query($conn,$queData)){
                        $NumRec=mysqli_query($conn,$queData);

                        if(mysqli_num_rows($NumRec)>0){
                            $rv=mysqli_fetch_array($NumRec);

                            if($rv['UserName']==$un && $rv['Password']==$pw){
                                $_SESSION['RName']=$rv['RealName'];
                                $_SESSION['un']=$un;

                                $queSche="INSERT INTO logsch(UserName,LI)VALUES('$un',(now()))";

                                if(mysqli_query($conn,$queSche)){
                                    $queGet="SELECT MAX(LogSerial)FROM logsch WHERE UserName='$un'GROUP BY UserName";

                                    if(mysqli_query($conn,$queGet)){
                                        $Date=mysqli_query($conn,$queGet);
                                        $val=mysqli_fetch_array($Date);
                                        $_SESSION['uid']=$val['MAX(LogSerial)'];
                                        header("Location:Main.php");
                                    }
                                }
                            }
                            else{
                                echo'UNAUTHORIZED ACCESS DENIED!<br>Please Register before trying to Login!<br><a href="loginform1.html"><img src="imgs/back.png" width="200" height="200"></a>';
                            }
                        }
                        else{
                            echo'UNAUTHORIZED ACCESS DENIED!<br>Please Register before trying to Login!<br><a href="loginform1.html"><img src="imgs/back.png" width="200" height="200"></a>';
                        }
                    }
                }
                else{
                    echo'Erro 303!<br>Database ID NOT Connected!<br><a href="loginform1.html"><a href="loginform1.html"><img src="imgs/back.png" width="200" height="200"></a>';
                }
            }
            else{
                echo'Username or Password cannot be BLANK!<br><a href="loginform1.html"><a href="loginform1.html"><img src="imgs/back.png" width="200" height="200"></a>';
            }
        ?>
    </body>
</html>