<?php

include("./includes/joined_tables.inc.php");



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Labyrinth Library Librarian Home</title>
   <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>
 
      <!--Navbar MUST BE ABLE TO SEARCH AUTHOR AND INSERT NEW BOOKS -->
      <?php

         include("./includes/nav.inc.php");

       ?>
          

   <container class="form_container">

      <div class="content">
         <h1> Welcome Librarian <span><?php echo $_SESSION['librarian_user'] ?></span></h1>

            <!-- Insert into database -->
            <div>
            <a href="./book.php" class="new_book" >New book</a>
            </div>
            
            <table>
               <tr>
                  <th class="table_headers">Author</th>
                  <th class="table_headers">Title</th>
                  <th class="table_headers">Genre</th>
                  <th class="table_headers">Age Group</th>
               </tr>

               <?php
               if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_array($result))
                   {

               ?>
               <tr class="table_display">
                  <td class="details"><?php echo $row['author_name'] ?></td>

                  <td class="details"><?php echo $row['book_name'] ?></td>

                  <td class="details" id="genre_details"><?php echo $row['book_genre'] ?></td>

                  <td class="details"><?php echo $row['age_group'] ?></td>

                  <td>
                    <!--Creat edit page--> <a href="" class="buttons" id= "<?php $row['book_id'] ?>">Edit</a>
                    <!--Creat delete page--> <a href="" class="buttons" id= "<?php $row['book_id'] ?>">Delete</a>
                  </td>

               </tr>
               <?php

                  }
               } else {
                  echo "No database connection";
               }

               ?>

            </table>

      </div>
   </container>

</body>
</html>
