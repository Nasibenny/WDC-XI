<?php
include 'function/config.php';
if(isset($_POST['btnlogin'])) {
    $name=$_POST['name'];
    $username=$_POST['username'];
    $password=$_POST['password'];
   
    $query="SELECT * FROM user WHERE username='$username'";
    $result=mysqli_query($con, $query);
 
    if ($result->num_rows == 1) {
        $row = mysqli_fetch_array($result);
        session_start();
        
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        header("Location: index.php");
    } else {
         header('Location: login.php?pesan= Username atau Password Anda Salah');
      
    }
}
    