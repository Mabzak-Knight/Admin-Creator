<!DOCTYPE html>
<html lang="en" >
<?php
//if (file_exists("./config/confg.php"))
include('./config/confg.php');
$sql = "SELECT * FROM `basic_setting`";
$qry = $mysqli->query($sql);
while($data = $qry->fetch_array()){
    extract($data);
}

$menu="";
extract($_GET);
$nbase="db_admincreator";
?>
<head>
  <meta charset="UTF-8">
  <title><?php echo "$website_name"; ?> - Admin</title>
  <link rel="shortcut icon" type="image/png" href="./images/logo/<?php echo($logo); ?>"/>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel='stylesheet' href='./assets/bootstrap/css/bootstrap.css'>
<link rel='stylesheet' href='./assets/bootstrap/css/dataTables.bootstrap4.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
<link rel="stylesheet" href="./assets/css/style.css">

</head>
<body>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<!-- partial:index.partial.html -->
<?php
include './part/nav.php';
?>
<div class="content-wrapper">
<?php
switch ($menu) {
  case 'add_nav':
    include './part/input/nav.php';
    break;

  case 'navigation':
    include './part/navigation.php';
    break;

  case 'add_table':
    include './part/input/tabel.php';
    break;

  case 'formdata':
    include './part/dataform.php';
    break;

  case '':
    include './part/walcome.php';
    break;
  
  default:
    include './part/dataread.php';
    break;
}

?>
</body>
<!-- partial -->
   <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © <a href="https://ruangilmudigital.com">Ruangilmudigital</a> 2020</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

   </div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.5/umd/popper.js'></script>
<script src='https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js'></script>
<script src='./assets/bootstrap/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/js/dataTables.bootstrap4.js'></script>
<script  src="./assets/js/script.js"></script>

</body>
</html>
