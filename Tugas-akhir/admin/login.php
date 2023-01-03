<?php 
    session_start();
    require "../js/connection.php";
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
    <title>HAGC - Login Admin</title>
</head>
<style>
    body { 
        font-family: Roboto;
    }
    .main{
        height: 100vh;
    }
    .login-box{
        width: 560px;
        height: 400px;
        box-sizing: border-box;
        border-radius: 10px;
    }

</style>
<body>
    <div class="main d-flex flex-column justify-content-center align-items-center">
        <div class="login-box p-5 shadow">
            <h1>Login</h1>
            <form action="" method="post">
                <div>
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username"
                    id="username">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password"
                    id="password">
                </div>
                <div class="form-group clearfix mt-3">
                    <span for="rememberme" class="inline pull-left">
                        <input type="checkbox" name="rememberme" id="rememberme" value="forever">
                        Remember me
                    </span>
                </div>
                <div>
                    <button class="btn btn-success form-control mt-3" type="submit" name="loginbtn">Login</button>
                </div>
            </form>
        </div>
        <div class="mt-3" style="width: 560px">
            <?php 
                if(isset($_POST['loginbtn'])){
                    $username = htmlspecialchars($_POST['username']);
                    $password = htmlspecialchars($_POST['password']);

                    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
                    $countdata = mysqli_num_rows($query);
                    $data = mysqli_fetch_array($query);
                    
                    if($countdata > 0){
                        if(password_verify($password, $data['password'])){
                            echo "ASLI LU";
                            $_SESSION['username'] = $data['username'];
                            $_SESSION['login'] = true;
                            header('location: index.php'); 
                        } 
                        else {
                            ?>
                            <div class="alert alert-warning" role="alert">
                                Password incorrect
                            </div>
                            <?php
                        }
                    } else {
                        ?>
                        <div class="alert alert-warning" role="alert">
                            your account is not valid
                        </div>
                        <?php
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>