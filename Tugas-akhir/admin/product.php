<?php 
    require "session.php";
    require 'functions.php';
    require "../js/connection.php";

    $queryCategori = mysqli_query($conn, "SELECT * FROM category");
    $sumCategori = mysqli_num_rows($queryCategori);

    $queryProduct = mysqli_query($conn, "SELECT a.*, b.name AS name_category 
    FROM product a JOIN category b ON a. category_id=b.id");
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
        <title>HAGC - Product Adminstrator</title>
    </head>
    <body>
        <header class="header">
        <a href="#" class="logo"><img src="../image/logo2.png"></a>
        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="categori.php">categories</a>
            <a href="product.php">products</a>
        </nav>
        </header>
        <section class="menu">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                    <li class="breadcrumb-item active" aria-current="page">Product</li>
                </ol>
            </nav>
            <h2>Hallo <?php echo $_SESSION['username'];?></h2>
        </section>

        <!-- features section starts  -->
    <br> 
    </section>
        <!-- Table for categories -->
        <div class="features">
        <h2>Add Product here</h2>
            <form action="" method="post" class="col-12 col-md-6" enctypr="multipart/form-data">
                <div class="mb-3">
                    <label for="name" id="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control" required>
                        <option value="">Choose</option>
                        <?php 
                            while ($data=mysqli_fetch_array($queryCategori)){
                        ?>
                            <option value="<?php echo $data['id']; ?>"> <?php echo $data['name'];?></option>
                        <?php 
                            }
                        ?>        
                    </select>
                </div>
                <div class="mb-3">
                     <label for="harga">Price</label>
                     <input type="number" class="form-control" name="harga" required>       
                </div>
                <div class="mb-3">
                <label for="foto">Foto</label> <br>
                    <input type="file" name="foto" id="foto" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="details">Detail</label>
                    <textarea name="details" id="details" cols="30" rows="10" class="form-control"></textarea>
                </div> 
                <div class="mb-2">
                    <label for="stock">Product Stock</label>   
                    <select name="stock" id="stock" class="form-control">
                        <option value="ready">Ready</option>
                        <option value="soldout">SoldOut</option> 
                    </select>
                </div>  
                <div>
                    <button type="submit" class="btn btn-outline-secondary" name="save">Add</button>
                </div>     
            </form>

            <?php 
                if(isset($_POST['save'])){
                    $name = htmlspecialchars($_POST['name']);
                    $category = htmlspecialchars($_POST['category']);
                    $harga = htmlspecialchars($_POST['harga']);
                    $foto = htmlspecialchars($_POST["foto"]);
                    $detail = htmlspecialchars($_POST['details']);
                    $stock = htmlspecialchars($_POST['stock']);

                    if($name=='' || $category=='' || $harga==''){
            ?>
                        <div class="alert alert-dark mt-3" role="alert">
                         Fill all
                        </div>   
            <?php            
                    }
                    // query insert
                    $queryAdd = mysqli_query($conn, "INSERT INTO product (category_id, name, harga, foto, details, stock) 
                    VALUES ('$category', '$name', '$harga', '$foto', '$detail', '$stock')");

                    if ($queryAdd){
            ?>
                        <div class="alert alert-dark mt-3" role="alert">
                            product data successfully saved
                        </div>
                        
                        <meta http-equiv="refresh" content="2; url=product.php"/>
            <?php                 
                    }
                    else {
                        echo mysqli_error($conn);
                    }
                }
            ?>

            <br>
            <h3>List Product</h3>
            <table class="table table-striped table-hover mb-5">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if($sumProduct==0){
                    ?>
                        <tr>
                            <td colspan=8 class="text-center">Data Product Not Available</td>
                        </tr>
                    <?php
                        }
                        else {
                            $sum = 1;
                            while($data=mysqli_fetch_array($queryProduct)){
                    ?>        
                                <tr>
                                    <td><?php echo $sum; ?></td>
                                    <td><?php echo $data['name'];?></td>
                                    <td><?php echo $data['name_category'];?></td>
                                    <td><?php echo $data['harga'];?></td>
                                    <td><?php echo $data['stock'];?></td>
                                    <td>
                                    <button type="submit" class="btn btn-danger" name="delete">
                                        <a href="hapusProduct.php?id=<?php echo $data["id"]; ?>" onclick="return confirm('Apakah data ini akan dihapus')">Delete</a>
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