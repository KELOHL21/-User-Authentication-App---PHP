<?php

 include('./includes/mysql_db.inc.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Change Password</title>
   <link rel="stylesheet" href="./css/stylesheet.css">
</head>
<body>
<container class="form_container">

<form action="./login_form.php" method="post" autocomplete="off">

   <h2>Forgot Password</h2>

   <?php
   if (isset($error)) {

      foreach ($error as $error) {

         echo "<p class='error_message'>".$error."</p>";
      }
   }
   
   ?>

   <input type="password" name="new_password" required placeholder="New password"> 

   <input type="password" name="confirm_password" required placeholder="Confirm password"> 

   <input type="submit" value="Save" name="change_password" class="submit_btn">

</form>

</container>
</body>
</html>