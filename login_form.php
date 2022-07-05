<?php
   session_start();

   include('./includes/mysql_db.inc.php');

   if (isset($_POST['submit'])) {

         // Escape special characters, if any
         $name = mysqli_real_escape_string($data, $_POST['name']);
   
         $email = mysqli_real_escape_string($data,$_POST['email']);
   
         // Using md5 to convert password into binary so when compared the password match perfectly
         $password = ($_POST['password']);  
   
         $confirm_password = isset(($_POST['confirm_password']));
   
         $user_type = $_POST['user_type'];
   
         $select = " SELECT * FROM users WHERE email ='$email' && password = '$password ' ";
   
         $results = mysqli_query($data, $select);
   
         if (mysqli_num_rows($results) > 0) { 

            $row = mysqli_fetch_array($results); //Fetching row matching users email and password

               if ($row['user_type'] == 'librarian'){ 
                  
                  //Similar to fetching a object by name 

                  $_SESSION['librarian_user'] = $row['name'];

                  header('location:librarian_page.php');

             }elseif ($row['user_type'] == 'member') {
               
               $_SESSION['member_name'] = $row['name'];

               header('location:members_page.php');

             }
         }else{

            $error[]="Incorrect password or email";
         }
      }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Labyrinth Library Librarian Login</title>
   <link rel="stylesheet" href="./css/stylesheet.css">
</head>
<body>
   <container class="form_container">

      <form class="signup" action="" method="post">

         <h2>Login</h2>

         <?php
         if (isset($error)) {

            foreach ($error as $error) {

               echo "<p class='error_message'>".$error."</p>";
            }
         }
         
         ?>

         <input type="email" name="email" required placeholder="enter your email"> 

         <input type="password" name="password" required placeholder="enter your password">

         <input type="submit" value="Login" name="submit" class="submit_btn">

         <p>don't have an account <a href="./sign_up.php">Sign Up</a></p>

      </form>

   </container>
</body>
</html>