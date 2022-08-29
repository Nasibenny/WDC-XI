<?php
include 'config.php';
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
    // if($username == "admin" || $password == "admin"){
        //its start when 
        // if(mysqli_num_rows($query)== 1 ) {
        //     if( password_verify($password,$data["password"])){
        //         //if user valid
        //         header('location:index.php');
                
        //     }else{
        //         //if user password not valid
        //         header('location:login.php?pesan= Password Salah');
        //     }
        // }else{
        //         //if user not valid
        //         header('location:login.php?pesan= Username Salah');
        //     }
        // }
    //     else{
    //     //if user not valid
    //             header('location:login.php?pesan= Username dan password Salah');
     //}   
// }
//Select passwod username form database Rusak ANJER
// if(mysqli_num_rows($query) == 1) {
//             if( password_verify($password,$data['password'])){