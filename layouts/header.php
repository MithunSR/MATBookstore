<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark ">
        <div class="container-fluid"> 
            <a class="navbar-brand" href="#">
                <img src="images/logo.svg" alt="MAT bokstore" style="width:50px;" > 
              </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.php">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactus.php">Contact us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Categories</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">NOVEL</a></li>
                  <li><a class="dropdown-item" href="#">Friction</a></li>
                  <li><a class="dropdown-item" href="#">Kids</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="text" placeholder="Search">
              <button class="btn btn-primary" type="button">Search</button>
              
              <div class="form-inline my-2 my-lg-0">
                <a href="cart.php" style="color:#ffffff">
                    <i class="bi bi-cart4" style="font-size:30px;"></i>
                    <?php 
                        echo (isset($_SESSION['cart_items']) && count($_SESSION['cart_items'])) > 0 ? count($_SESSION['cart_items']):'';
                    ?>
                </a>
            </div>
            </form>
            
             
            </a>
          </div>
        </div>
      </nav>