<?php 
    if($_POST){
        $username=$_POST['username'];
        $password=$_POST['password'];
        if(empty($username)){
            echo "<script>alert('Please fill username');location.href='login_admin.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Please fill password');location.href='login_admin.php';</script>";
        } else {
            include "connect.php";
            $qry_login=mysqli_query($conn,"select * from admin where username = '".$username."' and password = '".($password)."'");
            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                $_SESSION['id']=$dt_login['id'];
                $_SESSION['nama_petugas']=$dt_login['nama_petugas'];
                $_SESSION['status_login']=true;
                header("location: admin_page.php");
            } else {
                echo "<script>alert('Username and Password incorrect');location.href='login_admin.php';</script>";
            }
        }
    }
?>