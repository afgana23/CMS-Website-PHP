<?php include "header.php";

if($_SESSION["user_role"]=='0'){
  header("Location: {$hostname}/admin/post.php");
 
}

?>



<section id="admin-panel">
    <div class="container">
        <div class="row">
        <div class="col-md-10">
                  <h1 class="admin-heading">All Users</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="add-user.php">add user</a>
              </div>
              <div class="col-md-12">
              <?php
                  include "config.php"; // database configuration
                 /* Calculate Offset Code */
                  $limit = 3;
                 if(isset($_GET['page'])){
                   $page = $_GET['page'];
                  }else{
                   $page = 1;
                  }
                  $offset = ($page - 1) * $limit; 
                 
                  /* select query of user table with offset and limit */
                  $sql = "SELECT * FROM users ORDER BY user_id DESC LIMIT {$offset},{$limit}";
                  $result = mysqli_query($conn, $sql) or die("Query Failed.");
                  if(mysqli_num_rows($result) > 0){
                ?>
              <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>Full Name</th>
                          <th>User Name</th>
                          <th>Role</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tbody>
                      <?php
                         // $serial = $offset + 1;
                          while($row = mysqli_fetch_assoc($result)) {
                        ?>
                      <tr>
                              <td class='id'><?php echo $row['user_id']; ?></td>
                              <td><?php echo $row['first_name'] . " ". $row['last_name']; ?></td>
                              <td><?php echo $row['username']; ?></td>
                              <td><?php
                                  if($row['role'] == 1){
                                    echo "Admin";
                                  }else{
                                    echo "Normal";
                                  }
                               ?></td>
                            <!--<td class='edit'><a href='update-category.php?id={$row['category_id']}' ><i class='fa fa-edit'></i></a></td>-->
                           
                              <td class='edit'><a href='update-user.php?id={$row['user_id']}' >Edit<i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href="">Delete<i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <?php
                          //$serial++;
                        } ?>
                           </tbody>
                  </table>
                        
                        <?php
                }else {
                  echo "<h3>No Results Found.</h3>";
                }
                  
                 //pagination
                 $sql1="SELECT *FROM users";
                 $result1=mysqli_query($conn,$sql1) or die("failed");
                 if(mysqli_num_rows($result1)>0){
                  $total_records= mysqli_num_rows($result1);
                  $limit=3;
                  $total_page=ceil($total_records / $limit);
                  echo ' <ul class="pagination admin-pagination">';

                 }
                                  for($i=1; $i<=$total_page; $i++){
                                       if($i==$page){
                                        $active="active";

                                       }else{
                                        $active="";

                                       }

                                       

                  echo '<li class="'.$active.'"><a href="users.php?page='.$i.'">'.$i.'</a></li>';
                 
                 }
                 echo '<li><a href="users.php?page='.($page +1).'">next</a></li>';
                echo '</ul>';
                
                 ?>
                       
                 
</div>
            

</div>
</div>

</section>