<?php 
    // require "admin/session.php";
    require "js/connection.php";

    $queryCategori =  mysqli_query($conn, "SELECT * FROM category");

    // get product by nama produk/keyword
    if(isset($_GET['keyword'])){
        $queryProduct = mysqli_query($conn, "SELECT * FROM product WHERE name LIKE '%$_GET[keyword]%'");
    }
    // get product by category
    else if(isset($_GET['category'])){
        $queryGetCategoriId = mysqli_query($conn, "SELECT id FROM category WHERE name='$_GET[category]'");
        $categoriId = mysqli_fetch_array($queryGetCategoriId);

        $queryProduct = mysqli_query($conn, "SELECT * FROM product WHERE category_id='$categoriId[id]'");
    }
    // get product by default
    else{
    $queryProduct = mysqli_query($conn, "SELECT * FROM product");
    }

    // query produk yang dicari tidak ada
    $countProduct = mysqli_num_rows($queryProduct);
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
        <link rel="stylesheet" href="css/styleProduct.css">
        <title>HAGC - Product</title>
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
        
        <!-- Produk -->
        <div class="home">
            <div class="footer-image">
                <img src="image/footer.png" alt="">
            </div>
            
            <h2>Categories</h2>
            <!-- Select category -->
            <div class="container_category">
                <?php while ($data=mysqli_fetch_array($queryCategori)){ ?>
                    <div class="item_category">
                        <a href="products.php?category=<?php echo $data['name']; ?>">
                            <?php echo $data['name']; ?>
                        </a>
                    </div>
                <?php } ?>
                    <div class="item_category">
                        <a href="products.php">Other</a>
                    </div>
            </div>

            <h2>Shop now</h2>
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
            <!-- product box -->
            <div class="grid-container">
                <?php 
                    if($countProduct<1){
                ?>
                        <div class="alert alert-warning" role="alert">
                            Product not Found
                        </div>
                <?php        
                    }
                ?>    
                <?php while($product = mysqli_fetch_array($queryProduct)){?>
                    <a href="detailProduct.php?name=<?php echo $product['name']; ?>">
                        <div class="grid-item">
                            <img src="image/produk/<?php echo $product['foto']; ?>" alt="">
                        </div>
                    </a>
                <?php }?>
            </div>
        </div>
        <section id="contact">
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
        <!-- Scrip Bostrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
        crossorigin="anonymous"></script>
    </body>
</html>