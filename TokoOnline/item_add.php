<?php
include "header2.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Item Add</title>
</head>
<body>
    <form action="item_add_process.php" method="post" enctype="multipart/form-data">
        Item Name: 
        <input type="text" name="judul_barang" value="" class="form-control">
        Description : 
        <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"></textarea>
        Price : (000000)
        <input type="text" name="harga" value="" class="form-control">
        Front Copy Photo :
        <input type="file" name="foto" id="foto" value="" class="form-control">
        Back Copy Photo :
        <input type="file" name="foto2" id="foto" value="" class="form-control">
        <input type="submit" name="" value="Add Item" class="btn btn-primary">    
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<?php
include "footer.php";
?>