<?php 
    require "session.php";
    require "../js/connection.php";

    $queryCategori = mysqli_query($conn, "SELECT * FROM category");
    $sumCategori = mysqli_num_rows($queryCategori);

    $queryProduct = mysqli_query($conn, "SELECT * FROM product");
    $sumProduct = mysqli_num_rows($queryProduct);
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
        <link rel="stylesheet" href="style.css">
        <title>HAGC - Dashboard Adminstrator</title>
    </head>
    <body>
        <header class="header">
        <a href="#" class="logo"><img src="../image/logo2.png"></a>
        <nav class="navbar">
            <a href="#menu">home</a>
            <a href="categori.php">categories</a>
            <a href="product.php">products</a>
        </nav>
        </header>
        <section class="menu">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                </ol>
            </nav>
            <h2>Hallo <?php echo $_SESSION['username'];?></h2>
        </section>

        <!-- features section starts  -->

        <section class="features" id="features">


            <div class="box-container">

                <div class="box">
                    <h3>Categories</h3>
                    <p> <?php echo $sumCategori ?> Categories </p>
                    <a href="categori.php" class="btn">Details</a>
                </div>

                <div class="box">
                    <h3>Products</h3>
                    <p> <?php echo $sumProduct ?> Products</p>
                    <a href="product.php" class="btn">Details</a>
                </div>

            </div>

        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
        crossorigin="anonymous"></script>
    </body>
</html>