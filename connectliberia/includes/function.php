 


 <?php

function menudisplay()
{
   $query = "SELECT * FROM navigation";
   $select_all_menu_query = mysqli_query($connection,$query);

   while ($row = mysqli_fetch_assoc($select_all_menu_query)) { 
   $nav_name = $row['nav_name'];

   echo "<li><a href='#'>{$nav_name}</a></li>";
                        
    }
}











