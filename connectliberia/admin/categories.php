<?php include_once "includes/admin-header.php"; ?>

    <div id="wrapper">

        <!-- Navigation -->
       <?php include "includes/admin-navigation.php"; ?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to CL Admin
                            <small>mentowah</small>
                        </h1>


                        <div class="col-xs-6">

                        <?php
                        if (isset($_POST['submit']))
                        {
                            $cat_title = $_POST['cat_title'];
                            if($cat_title == "" || empty($cat_title)){

                                echo "this feild should not be empty";

                            } else{
                                $query = "INSERT INTO categories (cat_title) ";
                                $query .= "VALUE('{$cat_title}') ";
                                $create_cat_query  = mysqli_query($connection, $query);

                                if(!$create_cat_query)
                                {
                                    die('QUERY FAILED' . mysqli_error($connection));
                                   
                                }
                            }
                        }
                        ?>

                            <form action="" method="post">
                            <div class="form-group">
                            <label for="cat_title">Add Categories</label>
                                <input type="text" class="form-control " name="cat_title">
                            </div>

                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="submit" value="Add Categories">
                        </div>

                        </form>
                    </div>


                    <div class="col-xs-6">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                   <th>ID</th>
                                   <th>Categories Name</th>
                                </tr>
                            </thead>
                            <tbody>
          

            <!-- FIND ALL CATEGORIE -->
        <?php
            $query = "SELECT * FROM categories";
            $select_categories = mysqli_query($connection,$query); 
            while ($row = mysqli_fetch_assoc($select_categories)) { 
            $cat_id = $row['cat_id'];
            $cat_title = $row['cat_title'];
            echo "<tr>";
            echo "<td>{$cat_id}</td>";
            echo "<td>{$cat_title}</td>";
            echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
            echo "</tr>";              
            }
        ?>  
               
            
               
               <?php 
                if(isset($_GET['delete'])){
                $the_cat_id = $_GET['delete'];
                $query = "DELETE FROM categories WHERE cat_id  = {$the_cat_id} ";
                $delete_query = mysqli_query($connection,$query);
                // header('location:  categories.php'); 
             
                
                    }
                ?>                     
                              
                            </tbody>
                        </table>



                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include "includes/admin-footer.php" ?>
    