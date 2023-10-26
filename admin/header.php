
<?php
  include "config.php";
  session_start();

  if(!isset($_SESSION["username"])){
    header("Location: {$hostname}/admin/");
   
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap cdn link--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" ></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<style>
    ul{
        list-style-type: none;
        background-color:red;
    }
    li{
        display: inline-block;
    }
    li a{
        text-decoration:none;
        padding:12px 13px;
        font-size:20px;
        color:#fff;
        font-weight:600px;
    }
    li:hover a{
        color:black;
    }

form{
    background: lightgrey;
    padding: 25px;
    box-shadow:0 1px 3px rgba(0, 0, 0, 0.13);
}
.form-group label {
    color:black;
    font-weight: 500px;
    font-size: 19px;
    padding:3px;
}
.form-group input{
    padding:5px;
    width:400px;
}
.form-control{
    width:200px;  
}
.btn {
   margin-top:12px;
   background:red;
   color:white;
   
   width: 200px;

}
#admin-panel .content-table tbody td{
    padding: 10px;
    border: 1px solid #fff;
    text-align: center;

}
.content-table th{
    background:blue;
    color:#fff;
}
.content-table td ,th{
    border:solid 2px black;
}

  
    </style>
    
    <title>Admin Panel</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <ul>
                <li><a href="post.php">POST</a></li>
                <?php
                if($_SESSION["user_role"]== '1'){

                ?>
                 <li><a href="category.php">CATEGORY</a></li>
                <li><a href="users.php">USERS</a></li>
                <li>
                                <a href="settings.php">Settings</a>
                            </li>

                <?php
            }
            ?>
                <li><a href="logout.php">Hello, <?php echo $_SESSION["username"]; ?>,LOGOUT</a></li>
</ul>
             </div>

    
</body>
</html>