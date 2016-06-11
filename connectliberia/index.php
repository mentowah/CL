<?php include "includes/header.php" ?>
<?php include "includes/db.php" ?>



    


    <!-- Navigation -->
    <?php include "includes/navigation.php" ?>

    <!-- Page Content -->



    <div class="container">
        <div class="row">



<br>

            <!-- Blog Entries Column -->

            <div class="col-md-8">
            <div class="row">
             <?php
    $query = "SELECT * FROM posts";

             $select_all_post_query = mysqli_query($connection,$query);

                   while ($row = mysqli_fetch_assoc($select_all_post_query)) { 
                   $post_title = $row['post_title'];
                   $post_author = $row['post_author'];
                   $post_date = $row['post_date'];
                   $post_image = $row['post_image'];
                   $post_content = $row['post_content'];
                   ?>

<div class="col-sm-4 col-md-4">
    <div class="thumbnail">
      <a href="#" ><img src="images/<?php echo $post_image ?>" alt="..."></a>
    
      <div class="caption">
        <h4><a href="#" ><?php echo $post_title ?></a></h4>
        
        <p class = "lead">
        <small>
        <p><span class="glyphicon glyphicon-user"></span> <a href="#" ><?php echo $post_author ?></a>   |
        <span class="glyphicon glyphicon-time"></span> <a href="#" ><?php echo $post_date ?></a> |
        <span class="glyphicon glyphicon-comment"></span></small>
        </p>
        </p>
        <hr>
        <p><?php echo $post_content ?></p>
       
      </div>
    </div>
  </div>
             
                <?php    } ?>
  




</div>

   

            </div>

           

            <!-- Blog Sidebar Widgets Column -->
         

        <?php
        include "includes/sidebar.php"
        ?>
                
        </div>

        <hr>

       <?php
        include "includes/footer.php"
        ?>