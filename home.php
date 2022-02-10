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
    <script src="https://kit.fontawesome.com/b2c6d2915b.js" crossorigin="anonymous"></script>
    <title>Home Page</title>
</head>
<body>
<section id="header" class="vh-100">
    <nav class="navbar navbar-expand-lg navbar-light bg-light w-100 position-fixed">
      <div class="container">
        <a class="navbar-brand" href="home.php"><img class="w-25" src="./image//images.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse fs-4 fw-bold" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto mb-2 mb-lg-0 text-black">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
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
    <div class="layer w-100
          h-100
          d-flex
          justify-content-center
          align-items-center">
        <div class="contain text-center text-white">
        <h1 class="pb-2">Welcome to</h1>
        <h2></h2>
        </div>
    </div>
</section>
<section class="services">
    <a href="#services"></a>
    <div class="container">
        <div class="services-content">
            <div class="head text-center pt-4 pb-5">
                <h1 class="">Services</h1>
                <p>Lorem ipsum dolor sit amet.</p>
                <hr class="line m-auto">  
            </div>
            <div class="serves row text-center">
                <div class="view col-md-4 ">
                    <div class="bg-white p-5 shadow p-3 mb-5 rounded-3">
                <a href="view.php ">
                     <div class="icon"><img class="img-fluid" src="./image//user-group-solid.svg" alt=""></div>
                     <div class="view-content text-center">
                         <h3>Customers List</h3>
                     </div></a>
                     </div>
                </div>
                
                <div class="view col-md-4">
                    <div class="bg-white p-5 shadow p-3 mb-5 rounded-3">
                <a href="transfer.php">
                     <div class="icon"><img class="img-fluid" src="./image//comments-dollar-solid.svg" alt=""></div>
                     <div class="view-content text-center">
                         <h3>Transfer Money</h3>
                     </div>
                     </div>
                     </a>
                    </div>
                    
                <div class="view col-md-4">
                    <div class="bg-white p-5 shadow p-3 mb-5 rounded-3">
                <a href="transferlist.php">
                     <div class="icon"><img class="img-fluid" src="./image//folder-plus-solid.svg" alt=""></div>
                     <div class="view-content text-center">
                         <h3>Transfers History </h3>
                     </div>
                     </a>
                     </div>
                    </div>
                    
            </div>
        </div>
    </div>
</section>
<section class="contact">
    <a href="#contact"></a>
    <div class="container">
        <div class="contact-content">
            <div class="head text-center pt-4 pb-5">
                <h1 class="">Contact</h1>
                <p>Lorem ipsum dolor sit amet.</p>
                <hr class="line2 m-auto">  
            </div>
            <div class="bg-light p-5 shadow p-3 mb-5 rounded-3">
            <div class="contact-form w-75 m-auto">
                <form action="">
                    <input type="text" placeholder="Enter Your Name" class="form-control mb-4">

                    <input type="email" placeholder="Enter Your Email" class="form-control mb-4">

                    <textarea class="form-control mb-4" placeholder="Enter Your Massage" cols="30" rows="10"></textarea>

                    <button>Send MESSAGE</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</section>

<script src="./bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>