<?php 
    require "session.php";
    require 'functions.php';
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
        <title>HAGC - Category Adminstrator</title>
    </head>
    <body>
        <header class="header">
        <a href="#" class="logo"><img src="../image/logo2.png"></a>
        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="categori.php">categories</a>
            <a href="products.php">products</a>
        </nav>
        </header>
        <section class="menu">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                    <li class="breadcrumb-item active" aria-current="page">Category</li>
                </ol>
            </nav>
            <h2>Hallo <?php echo $_SESSION['username'];?></h2>
        </section>

        <!-- features section starts  -->
    <br> 
    </section>
        <!-- Table for categories -->
        <div class="features">
        <h2>Add categories here</h2>
            <form action="" method="post" class="col-12 col-md-6">
                <input type="text" id="category" name="category" placeholder="add category name"
                class="form-control">
                <div>
                <button type="submit" class="btn btn-outline-secondary" name="add_categori">Add</button>
                </div>
            </form>
            
            <?php 
                if(isset($_POST['add_categori'])){
                    $categori = htmlspecialchars($_POST['category']);

                    $queryExist = mysqli_query($conn, "SELECT name FROM category WHERE name='$categori'");
                    $sumNewData = mysqli_num_rows($queryExist);

                    if($sumNewData > 0){
                    ?>
                    <div class="alert alert-dark mt-3" role="alert">
                    category already exists
                    </div>
                    <?php    
                    }
                    else {
                        $queryAdd = mysqli_query($conn, "INSERT INTO category (name) VALUES ('$categori')");
                        
                        if ($queryAdd){
                            ?>
                            <div class="alert alert-dark mt-3" role="alert">
                            category has been successfully saved
                            </div>

                            <meta http-equiv="refresh" content="2; url=categori.php"/>
                            <?php    
                        }
                        else {
                            echo mysqli_error($conn);
                        }
                    }
                }
            ?>

            <br>
            <h3>List Categories</h3>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if($sumCategori==0){
                    ?>
                        <tr>
                            <td colspan=3 class="text-center">Data Categories Not Available</td>
                        </tr>
                    <?php
                        }
                        else {
                            $sum = 1;
                            while($data=mysqli_fetch_array($queryCategori)){
                    ?>        
                                <tr>
                                    <td><?php echo $sum; ?></td>
                                    <td><?php echo $data['name'];?></td>
                                    <td>
                                    <button type="submit" class="btn btn-danger" name="delete">
                                        <a href="hapusCategory.php?id=<?php echo $data["id"]; ?>" onclick="return confirm('Apakah data ini akan dihapus')">Delete</a>
                                    </button>
                                    </td>
                                </tr>         
                    <?php
                            $sum++;                    
                            }
                        }
                    ?>    
                </tbody>
            </table>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
        crossorigin="anonymous"></script>
    </body>
</html>