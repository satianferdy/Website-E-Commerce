<?php 
    // require "admin/session.php";
    require "js/connection.php";

    $name = htmlspecialchars($_GET['name']);
    $queryProduct = mysqli_query($conn, "SELECT * FROM product WHERE name='$name'");
    $product = mysqli_fetch_array($queryProduct);
    // var_dump($product);
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
        <link rel="stylesheet" href="css/styleDetail.css">
        <title>HAGC - <?php echo $product['name'];?></title>
    </head>
    <body>
        <!-- Navigasi Bar -->
        <header class="header">
            <div class="box">
                <a href="#" class="logo"><img src="image/logo2.png"></a>
                <nav class="navbar">
                    <a href="index.php">Home</a>
                    <a href="products.php">Product</a>
                    <a href="#contact">Contact</a>
                </nav>
            </div>
        </header>
        <!-- Box Produk -->
        <div class="content">
            <div class="grid-container">
                <div class="grid-item">
                    <img src="image/produk/<?php echo $product['foto'];?>" alt="">
                </div>
                <div class="grid-item">
                    <div class="item">
                    <h2><?php echo $product['name'];?></h2>
                    <span>Rp. <?php echo $product['harga'];?></span>
                    <div class="description">
                        <h3><?php echo $product['details'];?></h3>
                    </div>
                    <p><?php echo $product['stock'];?> In Stock</p>
                    </div>
                    <div class="order">
                        <h2>Order Now</h2>
                    </div>
                    <p>Contact Us</p>
                    <div class="container-detail">
                        <div class="item-detail">
                            <a href="#"> <img src="image/whatsapp.png" alt=""> </a>
                        </div>
                        <div class="item-detail">
                            <a href="#"> <img src="image/facebook.png" alt=""> </a>
                        </div>
                        <div class="item-detail">
                            <a href="#"> <img src="image/twitter.png" alt=""> </a>
                        </div>  
                        <div class="item-detail">
                            <a href="#"> <img src="image/instagram.png" alt=""> </a>
                        </div>  
                    </div>
                </div> 
            </div>
        </div>
        
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
                    <a href="https://wa.me/6285101798290"> <img src="image/whatsapp.png" alt=""> </a>
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
    </body>
</html>