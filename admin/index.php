<?php
  include "config.php";
  session_start();

  if(isset($_SESSION["username"])){
    header("Location: {$hostname}/admin/post.php");
   
  }
?>


<!doctype html>
<html>
   <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ADMIN | Login</title>
        <!-- bootstrap cdn link--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" ></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="">
    
        <style>

#wrapper-admin{
    padding: 100px 0 0;
    
}

img.logo{
    width: 100px;
    height: 70px;
    display: block;
}
form{
    background: #856000;
    padding: 25px;
    box-shadow:0 3px 3px rgba(0, 0, 0, 0.13);
}
.form-group label{
    font-size: 20px;
    color:#fff;
}
.btn{
    height:30px;
    width: 100px;
    background: #444;
    color:#fff;
    margin-top: 19px;
    padding: 3px;
}
            </style>
    </head>

    <body>
        <div id="wrapper-admin" class="body-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-4 col-md-4">
                        <!---img class="logo" src="../images/icon-spa.png">-->
                        <h3 class="heading">Admin</h3>
                        <!-- Form Start -->
                        <form  action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="" required>
                            </div>
                            <input type="submit" name="login" class="btn " value="login" />
                        </form>
                        <!-- /Form  End -->
                        <?php
                          if(isset($_POST['login'])){
                            include "config.php";
                            if(empty($_POST['username']) || empty($_POST['password'])){
                              echo '<div class="alert alert-danger">All Fields must be entered.</div>';
                              die();
                            }else{
                              $username = mysqli_real_escape_string($conn, $_POST['username']);
                              $password = md5($_POST['password']);

                              $sql = "SELECT user_id, username, role FROM users WHERE username = '{$username}' AND password= '{$password}'";

                              $result = mysqli_query($conn, $sql) or die("Query Failed.");

                              if(mysqli_num_rows($result) > 0){

                                while($row = mysqli_fetch_assoc($result)){
                                  session_start();
                                  $_SESSION['username'] = $row["username"];
                                  $_SESSION["user_id"] = $row['user_id'];
                                  $_SESSION["user_role"] = $row['role'];

                                  header("Location:{$hostname}/admin/post.php");
                                  
                                }

                              }else{
                              echo '<div class="alert alert-danger">Username and Password are not matched.</div>';
                            }
                          }
                          }
                        ?>


                         </div>
                </div>
            </div>
        </div>
    </body>
</html>
