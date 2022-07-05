<?php
session_start();

include('./includes/mysql_db.inc.php');

if (!isset( $_SESSION['member_name'])) {

   header('location:login_form.php');

}

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

                           <!-- CANNOT SEARCH FOR AUTHORS -->

   <container>

      <div class="content">
         <h1> Welcome <span><?php echo  $_SESSION['member_name'] ?></span></h1>

         <section>
            <h2>Available Books</h2>

            <!-- Database placed here -->
            
         </section>
      </div>
   </container>

</body>
</html>