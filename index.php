<?php
include "header.php";
?>
<section id="content-area">
    <div class="container">

     
        <div class="row">
             <div class="col-md-9">
                <div class="content">
                <?php
                        include "config.php";

                        /* Calculate Offset Code */
                        $limit = 3;
                        if(isset($_GET['page'])){
                          $page = $_GET['page'];
                        }else{
                          $page = 1;
                        }
                        $offset = ($page - 1) * $limit;

                        $sql = "SELECT post.post_id, post.title, post.description,post.post_date,post.author,
                        category.category_name,users.username,post.category,post.post_img FROM post
                        LEFT JOIN category ON post.category = category.category_id
                        LEFT JOIN users ON post.author = users.user_id
                        ORDER BY post.post_id DESC LIMIT {$offset},{$limit}";

                        $result = mysqli_query($conn, $sql) or die("Query Failed.");
                        if(mysqli_num_rows($result) > 0){
                          while($row = mysqli_fetch_assoc($result)) {
                      ?>
                     <div class="card">
                         <div class="row">
                                 <div class="col-md-4">
                                 <a class="post-img" href="single.php?id=<?php echo $row['post_id']; ?>"><img src="admin/upload/<?php echo $row['post_img']; ?>" alt=""/></a>
                                 </div>
                                    <div class="col-md-8">
                                      
                                      <div class="card-title"><h3><a href='single.php?id=<?php echo $row['post_id']; ?>'><?php echo $row['title']; ?></a></h3></div>
                                      <div class="card-text"><p><?php echo substr($row['description'],0,130) ."..." ?>
                                      <a class='read-more pull-right' href='single.php?id=<?php echo $row['post_id']; ?>'>read more</a></p>
                                  
                                    </div>
                                      
                                    </div>
                            </div>
                   
                   </div>
                          
                   
                <?php
                          }
                        }else{
                          echo "<h2>No Record Found.</h2>";
                        }
                         // show pagination
                         $sql1 = "SELECT * FROM post";
                         $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");
 
                         if(mysqli_num_rows($result1) > 0){
 
                           $total_records = mysqli_num_rows($result1);
 
                           $total_page = ceil($total_records / $limit);
 
                           echo '<ul class="pagination admin-pagination">';
                           if($page > 1){
                             echo '<li><a href="index.php?page='.($page - 1).'">Prev</a></li>';
                           }
                           for($i = 1; $i <= $total_page; $i++){
                             if($i == $page){
                               $active = "active";
                             }else{
                               $active = "";
                             }
                             echo '<li class="'.$active.'"><a href="index.php?page='.$i.'">'.$i.'</a></li>';
                           }
                           if($total_page > $page){
                             echo '<li><a href="index.php?page='.($page + 1).'">Next</a></li>';
                           }
 
                           echo '</ul>';
                         }
                         ?>

             </div>
             
        
         </div>
         <?php include 'sidebar.php'; ?>             
         
    </div>
    </div>
                   

                   
            

 </section>
 <?php include 'footer.php'; ?>
