<?php 
    include "header.php";
?>
<h2>Cart List</h2>
<table class="table table-hover striped">
    <thead>
        <tr>
            <th>Id</th><th>Item Name</th><th>Quantity</th><th>Total Price</th><th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach (@$_SESSION['cart'] as $key_produk => $val_produk): ?>
            <tr>
                <td><?=($key_produk+1)?></td><td><?=$val_produk['judul_barang']?></td><td><?=$val_produk['qty']?></td><td><?=$val_produk['harga']?></td><td><a href="delete_cart.php?id=<?=$key_produk?>" class="btn btn-danger"><strong>X</strong></a></td>
            </tr>

        <?php endforeach ?>
    </tbody>
</table>
<a href="checkout.php" class="btn btn-primary">Check Out</a>
<?php 
    include "footer.php";
?>