<?php
include"header.php";
include"connect.php";
$qry_detail_barang=mysqli_query($conn, "select * from store where id_barang = '".$_GET['id_barang']."'");
$dt_barang=mysqli_fetch_array($qry_detail_barang);
?>
<h2>Item Detail</h2>
<div class="row">
    <div class="col-md-4">
        <img src="<?=$dt_barang['foto'] ?>" class="bd-placeholder-img card-img-top">
</div>
<div class="col-md-8">
    <form
    action="addcart.php?id_barang=<?=$dt_barang['id_barang']?>"
    method="post">
    <table class="table table-hover table-stripped">
        <thead>
            <tr>
                <td>Item Name</td>
                <td><?=$dt_barang['judul_barang']?></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><?=$dt_barang['deskripsi']?></td>
            </tr>
            <tr>
                <td>Price</td>
                <td>IDR <?=$dt_barang['harga']?></td>
            </tr>
            <tr>
            <td>Quantity</td><td><input type="number" name="jumlah_item" value="1"></td>
            </tr>
            <tr>
                <td colspan="2"><input class="btn btn-success" type="submit" value="Add to cart"></td>
            </tr>
        </thead>
    </table>
    </form>
</div>
</div>

<?php
include "footer.php";
?>