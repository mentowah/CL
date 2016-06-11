 

 <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Connect Liberia</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
                <ul class="nav navbar-nav">
                        <?php
                            $query = "SELECT * FROM navigation";
                            $select_all_menu_query = mysqli_query($connection,$query);

                            while ($row = mysqli_fetch_assoc($select_all_menu_query)) { 
                            $nav_name = $row['nav_name'];

                            echo "<li><a href='#'>{$nav_name}</a></li>";               
                            }
                        ?>

                         <li>
                                <a href = "admin">Admin</a>
                            </li>
                </ul>
            
            </div>
            <!-- /.navbar-collapse -->
        </div>

        <!-- /.container -->
    </nav>




