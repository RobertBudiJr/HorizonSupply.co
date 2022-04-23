<?php
include "header2.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Logout</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


<div class="container mt-3">
  
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    Log out
  </button>
</div>

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Are you sure?</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Log out as admin. 
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <a href="index.php" class="btn btn-primary">Ok</a>
        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-dismiss="modal">Cancel</button>
      </div>

    </div>
  </div>
</div>


<?php
include "footer.php";
?>