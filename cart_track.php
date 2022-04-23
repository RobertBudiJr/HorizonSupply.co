<?php 
    include "header.php";
?>
<h2>Cart List</h2>
<table class="table table-hover table-striped">
    <thead>
        <th>Id</th><th>Date Added</th><th>Payment Date</th><th>Item Name</th><th>Status</th><th>Action</th>
    </thead>
    <tbody>
        <?php 
        include "connect.php";
        $qry_histori=mysqli_query($conn,"select * from cart order by id_cart desc");
        $no=0;
        while($dt_histori=mysqli_fetch_array($qry_histori)){
            $no++;
            //menampilkan barang yang dipinjam
            $barang_dimasukkan="<ol>";
            $qry_barang=mysqli_query($conn,"select * from  cart join store on store.id_barang=cart.id_barang where id_cart = '".$dt_histori['id_cart']."'");
            while($dt_barang=mysqli_fetch_array($qry_barang)){
                $barang_dimasukkan.="<li>".$dt_barang['judul_barang']."</li>";
            }
            $barang_dimasukkan.="</ol>";
            //menampilkan status sudah kembali atau belum
            $qry_cek_bayar=mysqli_query($conn,"select * from payment where id_cart = '".$dt_histori['id_cart']."'");
            if(mysqli_num_rows($qry_cek_bayar)>0){
                $dt_bayar=mysqli_fetch_array($qry_cek_bayar);
                $payment_status="<label class='alert alert-success'>Already paid<br></label>";
                $button_bayar="";
            } else {
                $payment_status="<label class='alert alert-danger'>Not yet paid</label>";
                $button_bayar="<a href='payment.php?id=".$dt_histori['id_cart']."' class='btn btn-warning' onclick='return confirm(\"hello\")'>Pay</a>";
            }
        ?>
            <tr>
                <td><?=$no?></td><td><?=$dt_histori['tanggal_masuk']?></td><td><?=$dt_histori['tanggal_bayar']?></td><td><?=$barang_dimasukkan?></td><td><?=$payment_status?></td><td><?=$button_bayar?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<?php 
    include "footer.php";
?>
