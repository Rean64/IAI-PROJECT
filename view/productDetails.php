<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Box icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./css/styles.css?<?php echo time(); ?>" />
    <title>Boy’s T-Shirt - Codevo</title>
  </head>

  <body>
    <!-- Navigation -->
   
    <div class="navigation">
      <div class="nav-center container d-flex">
        <a href="index.html" class="logo"><img src="logo1.png" alt="" style="width: 230px; margin-left:-100px; "></a>

        <ul class="nav-list d-flex">
          <li class="nav-item">
            <a href="../home.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="product.html" class="nav-link">Compte</a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link">Contact</a>
          </li>
          <li class="icons d-flex">
            <a href="login.html" class="icon">
              <i class="bx bx-user"></i>
            </a>
            <div class="icon">
              <i class="bx bx-search"></i>
            </div>
            <div class="icon">
              <i class="bx bx-heart"></i>
              <span class="d-flex">0</span>
            </div>
            <a href="cart.html" class="icon">
              <i class="bx bx-cart"></i>
              <span class="d-flex">0</span>
            </a>
          </li>
        </ul>


        <div class="hamburger">
          <i class="bx bx-menu-alt-left"></i>
        </div>
      </div>
    </div>

    <!-- Product Details -->
    <section class="section product-detail">
      <div class="details container">
        <div class="right">
          <span>Home/T-shirt</span>
          <h1>Boy’s T-Shirt By Handsome</h1>
          <!-- <div class="price">$50</div> -->
          <h3>Product Detail</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero minima
            delectus nulla voluptates nesciunt quidem laudantium, quisquam
            voluptas facilis dicta in explicabo, laboriosam ipsam suscipit!
          </p>
        </div>
      </div>
    </section>

   
    
    <!-- Custom Script -->
    <script src="./js/index.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.4.0.min.js"
      integrity="sha384-JUMjoW8OzDJw4oFpWIB2Bu/c6768ObEthBMVSiIx4ruBIEdyNSUQAjJNFqT5pnJ6"
      crossorigin="anonymous"
    ></script>
   
  </body>
</html>
