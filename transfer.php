<?php
$time = date("Y-m-d");
// echo $time; die;
require "./lib/db.php";
if (isset($_POST['to'])){
    if(transfer_from($_POST['money'],$_POST['from'])!=-1 && transfer_to($_POST['money'], $_POST['to']) !=-1 ){
        transfer_list($time,$_POST['sendername'],$_POST['resivername'],$_POST['from'],$_POST['to'],$_POST['money']);
        header("location: view.php");
    }
    else{
        echo "Try Again";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link
      rel="stylesheet"
      href="./bootstrap-5.1.0-dist/css/bootstrap.min.css"
    />
    <script
      src="https://kit.fontawesome.com/b2c6d2915b.js"
      crossorigin="anonymous"
    ></script>
    <title>Transfer Money</title>
</head>
<body class="services">
<nav class="navbar navbar-expand-lg navbar-light bg-light w-100 position-fixed">
      <div class="container">
        <a class="navbar-brand" href="home.php"><img class="w-25" src="./image//images.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse fs-4 fw-bold" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto mb-2 mb-lg-0 text-black">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="view.php">View Customers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="transfer.php">Transfer Money</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="transferlist.php">Transfer History</a>
            </li>

          </ul>
          <ul class="navbar-nav mt-auto mb-2 mb-lg-0 text-black" >
              <li class="nav-item px-3 ">
                  <a class="nav-link" href="#"><i class="fab fa-linkedin"></i></a>
              </li>
              <li class="nav-item px-3">
                  <a class="nav-link" href="#"><i class="fab fa-github"></i></a>
              </li>
              <li class="nav-item px-3">
                  <a class="nav-link" href="#"><i class="fab fa-facebook"></i></a>
              </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container pt-5">
        <div class="form">
    <form action="transfer.php" class=" bg-white p-5 shadow p-3 mb-5 rounded-3" method="post">
    <h1 class="text-center pb-4">Transfer Money</h1>
        <div class="row">
            <div class="col-md-6 mb-2">
        <input class="form-control w-100 " type="text" name="sendername" placeholder="Sender Name">
        </div>
        <div class="col-md-6 mb-2">
        <input class="form-control w-100 " type="text" name="resivername" placeholder="Resiver Name">
        </div>
        <div class="col-md-6 mb-2">
        <input class="form-control w-100" type="text" name="from" placeholder="Sender Number">
        </div>
        <div class="col-md-6 mb-2">
        <input class="form-control w-100" type="text" name="to" placeholder="Resiver Number">
        </div>
        <div class="col-md-6 mb-2">
        <input class="form-control w-100" type="text" name="money" placeholder="Amount">
        </div>
        </div>
        <button class="btn btn-primary">done</button>
    </form>
    </div>
    </div>
    <script src="./bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>