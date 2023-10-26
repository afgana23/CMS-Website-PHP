<?php
include "config.php";
$page= basename($_SERVER['PHP_SELF']);
switch($page){
  case "single.php":
    if(isset($_GET['id'])){
      $sql_title="SELECT *FROM post WHERE post_id={$_GET['id']}";
       $result_title=mysqli_query($conn,$sql_title) or die("failed title");
       $row_title = mysqli_fetch_assoc($result_title);
       $page_title=$row_title['title'];
    } else{
      $page_title="no title found";

    }
   
    break;
    case "category.php":
      if(isset($_GET['cid'])){
        $sql_title="SELECT *FROM category WHERE category_id ={$_GET['cid']}";
         $result_title=mysqli_query($conn,$sql_title) or die("failed title");
         $row_title = mysqli_fetch_assoc($result_title);
         $page_title=$row_title['category_name'] ."blog";
      } else{
        $page_title="no title found";
  
      }
      break;
      case "search.php":
        //echo "Search page";
        if(isset($_GET['search'])){
          $page_title = $_GET['search'];

        }else{
          $page_title ="no search found";
        }
        break;
        default:
        $page_title="CMS Website";
        break;
  

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
    <link rel="stylesheet" href="css/style.css">
    
    
    <title><?php echo $page_title; ?></title>
    <style>
      .navbar-nav li a{
        color:#fff;
        font: 20px sans-serif;
        margin-left: 12px;
        text-decoration: none;
        text-transform: uppercase;
        font-weight:800px;
      }
      </style>
</head>
<body>
    
<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
  <?php
                  include "config.php";

                  $sql = "SELECT * FROM settings";

                  $result = mysqli_query($conn, $sql) or die("Query Failed.");
                  if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)) {
                      if($row['logo']=="")
                      {
                        echo '<a href="index.php"><h1>'.$row['websitename'].'</h1></a>';

                      }else{
                        echo '<a href="index.php" id="logo"><img src="admin/images/'. $row['logo'].'"></a>';
                        
                      }
                ?>
      
   <a class="navbar-brand" href="index.php"><?php  echo $row['websitename']; ?></h1></a>
    <?php
                    }
                  }
                  ?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php
        include "config.php";
        $sql = "SELECT * FROM category WHERE post >0";
        $result = mysqli_query($conn,$sql) or die("queryfaoled");
        if(mysqli_num_rows($result)>0){ 


     ?>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      <li><a href='<?php echo $hostname; ?>'>Home</a></li>
        <?php while($row=mysqli_fetch_assoc($result)){
           echo "<li>
           <a href='category.php?cid={$row['category_id']}'>{$row['category_name']}</a>
         </li>";
          }?>
      </ul>
      <?php } ?>
     
    </div>
  </div>
  </nav>

</body>
</html>
