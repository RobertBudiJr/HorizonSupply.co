<?php 
session_start();
    if($_POST){
        include "connect.php";
        
        $qry_get_barang=mysqli_query($conn,"select * from store where id_barang = '".$_GET['id_barang']."'");
        $dt_barang=mysqli_fetch_array($qry_get_barang);
        $_SESSION['cart'][]=array(
            'id_barang'=>$dt_barang['id_barang'],
            'judul_barang'=>$dt_barang['judul_barang'],
            'qty'=>$_POST['qty'],
            'harga'=>$_POST['harga']
        );
    }
    header('location: cart.php');
?>
