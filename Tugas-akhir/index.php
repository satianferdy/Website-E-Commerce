<?php 
    // require "admin/session.php";
    require "js/connection.php";

    $queryCategori =  mysqli_query($conn, "SELECT * FROM category");
    $category = mysqli_fetch_array($queryCategori);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Have a Good Cloth</title>
</head>
<body>
    <!-- Navigasi Bar -->
    <header class="header">
        <div class="box">
            <a href=".home" class="logo"><img src="image/logo2.png"></a>
            <nav class="navbar">
                <a href="#home">home</a>
                <a href="#categories">categories</a>
                <a href="#contact">contact</a>
                <a href="admin/login.php">admin</a>
            </nav>
        </div>
    </header>

    <!-- Slider -->
    <section class="home" id="home">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="image/slider1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="image/slider2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="image/slider3.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="image/slider4.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="grid-container">
            <div class="grid-item">
                <a href="products.php">
                    <img src="image/box1.png" alt="">
                    <div class="overlay">
                        <div class="img-text">
                            <h5>Shop By</h5>
                            <h2>New Arrival</h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-item">
                <a href="products.php">
                    <img src="image/box2.png" alt="">
                    <div class="overlay">
                        <div class="img-text">
                            <h5>Shop By</h5>
                            <h2>Sale</h2>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    
    <section id="categories">
    <!-- Category -->
        <div class="list-category">
            <h2>List Categories</h2>
              <!-- Search -->
            <div class="search">
                <div class="col-md-4 offset-md">
                    <form method="get" action="products.php">
                        <div class="input-group input-grup-lg my-4">
                            <input type="text" class="form-control" placeholder="product name" 
                            aria-label="Username" aria-describedby="basic-addon2" name="keyword">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <table>
                <tr>
                    <td>
                        <a href="products.php?category=Tees">Tees</a>
                    </td>
                    <td>
                        <a href="products.php?category=Shirt">Shirt</a>
                    </td> 
                    <td>
                        <a href="products.php?category=Bottoms">Bottoms</a>                       
                    </td>
                    <td>
                        <a href="products.php?category=Outwear">Outwear</a> 
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="products.php?category=Headwear">Headwear</a> 
                    </td>
                    <td>
                        <a href="products.php?category=Accessories">Accessories</a> 
                    </td>
                    <td>
                        <a href="products.php?category=Jawelry">Jawelry</a> 
                    </td>
                    <td>
                        <a href="products.php?category=Bag">Bag</a> 
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="products.php?category=Knitwear">Knitwear</a> 
                    </td>
                    <td>
                        <a href="products.php?category=Footwear">Footwear</a> 
                    </td>
                    <td>
                        <a href="products.php">Home Goods</a>
                    </td>
                    <td>
                        <a href="products.php">Recommended Items</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="products.php">Others</a>
                    </td>
                </tr>
            </table>
            <div class="options">
                <p>Shipping & Shop Police</p>
                <p>Contact</p>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="footer-image">
            <img src="image/footer.png" alt="">
        </div>
        <div class="container-footer">
            <div>
                <p class="copyright-text">&copy; Have a Good Cloth. All rights reserved!. Powered by Satian Ferr</p>
            </div>
            <div class="item-footer">
                <a href="#"> <img src="image/facebook.png" alt=""> </a>
            </div>
            <div class="item-footer">
                <a href="#"> <img src="image/twitter.png" alt=""> </a>
            </div>  
            <div class="item-footer">
                <a href="#"> <img src="image/instagram.png" alt=""> </a>
            </div>
            <div class="item-footer">
                <a href="#"> <img src="image/yt.png" alt=""> </a>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
</body>
</html>