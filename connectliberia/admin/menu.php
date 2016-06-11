<?php include "includes/admin-header.php" ?>

    <div id="wrapper">

        <!-- Navigation -->
       <?php include "includes/admin-navigation.php" ?>


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
                                $query = "INSERT INTO categories(cat_title) ";
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
                            <label for="cat_title">Add Menu</label>
                                <input type="text" class="form-control " name="cat_title">
                            </div>

                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="submit" value="Add Menu">
                        </div>

                        </form>
                    </div>


                    <div class="col-xs-6">

        <?php
            $query = "SELECT * FROM navigation";
            $select_navigation = mysqli_query($connection,$query);     
        ?>

                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                   <th>ID</th>
                                   <th>Navigation Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
        <?php
            while ($row = mysqli_fetch_assoc($select_navigation)) { 
            $nav_id = $row['nav_id'];
            $nav_name = $row['nav_name'];
            echo "<tr>";
            echo "<td>{$nav_id}</td>";
            echo "<td>{$nav_name}</td>";
            echo "</tr>";              
            }
            ?>  
                                    
                                </tr>
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
    