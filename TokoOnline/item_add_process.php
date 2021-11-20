<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
if ($_POST) {
    include "connect.php";
    $judul_barang=$_POST['judul_barang'];
    $deskripsi=$_POST['deskripsi'];
    $harga=$_POST['harga'];


    if(empty ($judul_barang)) {
        echo "<script>alert('Please name the item');location.href='item_add.php';</script>";
    } elseif(empty ($deskripsi)) {
        echo "<script>alert('Please fill the description');location.href='item_add.php';</script>";
    } elseif(empty ($harga)) {
        echo "<script>alert('Please fill the price');location.href='item_add.php';</script>";
    } else {
    $ekstensi_diperbolehkan	= array('png','jpg','jpeg');
        $foto = $_FILES['foto']['name'];
        $ex = explode('.', $foto);
        $ekstensi = strtolower(end($ex));
        $ukuran	= $_FILES['foto']['size'];
        $file_tmp = $_FILES['foto']['tmp_name'];
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 1044070){			
                $pindah=move_uploaded_file($file_tmp, 'assets/foto_produk/'.$foto);
                $query = $conn->query("INSERT INTO tb_foto VALUES(null,'$foto')");
            }else{
                echo "<script> alert ('File is too large'); 
                location.href = 'item_add.php';</script>";
            }
        }else{
            echo "<script> alert ('Cannot add photo extension'); 
            location.href = 'item_add.php';</script>";
        }
        
        $pp = 'http://localhost/TokoOnline/assets/foto_produk/'.$foto;
        // $foto = $namaFile;
        $link = "insert into store (judul_barang, deskripsi, harga, foto) values ('".$judul_barang."','".$deskripsi."','".$harga."','".$foto."')";
        $insert = mysqli_query($conn, $link) or trigger_error(mysqli_error($conn)." ".$link);

        if ($insert){
            echo "<script> alert ('Success add new item'); 
            location.href = 'item_add.php';</script>";
        } else {
            echo "<script> alert ('Failed add new item'); 
            location.href = 'item_add.php';</script>".mysqli_error($conn);
        }

        mysqli_close($conn);
    }
}
?>