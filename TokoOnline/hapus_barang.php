<?php 
    if($_GET['id_barang']){
        include "connect.php";
        $qry_hapus=mysqli_query($conn,"delete from store where id_barang='".$_GET['id_barang']."'");
        if($qry_hapus){
            echo "<script>alert('Delete success');location.href='admin_page.php';</script>";
        } else {
            echo "<script>alert('Delete failed');location.href='admin_page.php';</script>";
        }
    }
?>
