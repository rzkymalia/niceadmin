

<?php 
session_start();
// koneksi ke database
$koneksi = new mysqli ("localhost", "root", "", "menufix");
?>



<!DOCTYPE html>
<html>
<head>
  <title>detail</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <style>
    body{
      font-family: Century Gothic;
    }
  </style>
</head>
<body>

<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<script > $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
}) </script>
</body>
</html>