<?php 
    session_start();
    include "connect.php";
    $cart=@$_SESSION['cart'];
    if(count($cart)>0){
        $lama_pinjam=5;
        $tgl_harus_bayar=date('Y-m-d',mktime(0,0,0,date('m'),(date('d')+$lama_pinjam),date('Y')));
        mysqli_query($conn,"insert into cart (id_user,tanggal_masuk,tanggal_bayar) value('".$_SESSION['id_user']."','".date('Y-m-d')."','".$tgl_harus_bayar."')");
         $id=mysqli_insert_id($conn);
        foreach ($cart as $key_produk => $val_produk) {
            mysqli_query($conn,"insert into cart_detail (id_cart,id_barang,qty) value('".$id."','".$val_produk['id_barang']."','".$val_produk['qty']."')");
        }
        unset($_SESSION['cart']);
        echo '<script>alert("Success added to cart");location.href="cart_track.php"</script>';
    }
?>
