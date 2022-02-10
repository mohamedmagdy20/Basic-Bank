<?php
require "./lib/db.php";
$data=showtransferlist();
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
    <title>Basic Bank</title>
</head>
<body>
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
              <a class="nav-link" href="view.php">View Customers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="transfer.php">Transfer Money</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="transferlist.php">Transfer History</a>
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
    <div class="table form">
    <h1 class="text-center pb-4">Transfer list</h1>
        <div class="t-head row">
            <div class="head  col-md-2">Date</div>
            <div class="head  col-md-2">Sender Name</div>
            <div class="head  col-md-2">Resiver Name</div>
            <div class="head  col-md-2">Sender Num</div>
            <div class="head  col-md-2">Resiver Num</div>
            <div class="head  col-md-2">Amount</div>
        </div>
        <?php foreach($data as $row):?>
        <div class="t-row row">
            <div class="head   col-md-2"><div><?= $row['date']?></div></div>
            <div class="head   col-md-2"><div> <?= $row['sender_name']?></div></div>
            <div class="head   col-md-2"><div><?= $row['resiver_name']?></div></div>
            <div class="head   col-md-2"><div><?= $row['sender_num']?></div></div>
            <div class="head   col-md-2"><div> <?= $row['resever_num']?></div></div>
            <div class="head   col-md-2"><div> <?= $row['amount']?></div></div>
        </div>
        <?php endforeach;?>
    </div>
<script src="./bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>