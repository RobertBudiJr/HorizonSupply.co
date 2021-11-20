<?php
include "header.php";
?>
<section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Horizon Supply Co.</h1>
          <p class="lead text-muted">Bring Me The Horizon official merchandise store</p>
        </div>
      </div>
    </section>
    <div class="row">
        <?php
        include "connect.php";
        $qry_barang=mysqli_query($conn,"select * from store");
        while($dt_barang=mysqli_fetch_array($qry_barang)){
        ?>

    <div class="col-md-3">
            <div class="card shadow-sm">
                <img src="<?=$dt_barang['foto'] ?>" class="bd-placeholder-img card-img-top">
                <div class="card-body">
                    <p class="card-text"><?=$dt_barang['judul_barang']?><p>
                <a
                href="item_detail.php?id_barang=<?=$dt_barang['id_barang']?>" class="btn btn-sm btn-outline-dark">View</a>
                </div>             
            </div>

          
    </div>
    <?php
    }
    ?>
    </div>

<?php
include "footer.php";
?>