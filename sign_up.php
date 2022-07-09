<?php
   session_start();

   include('./includes/mysql_db.inc.php');

   if (isset($_POST['submit'])) {

      // Escape special characters, if any
      $name = mysqli_real_escape_string($data,$_POST['name']);

      $email = mysqli_real_escape_string($data,$_POST['email']);

      $_SESSION['email'] = $email;

      $password = ($_POST['password']);  

      $confirm_password = ($_POST['confirm_password']);

      $user_type = $_POST['user_type'];

      $select = " SELECT * FROM users WHERE email ='$email' && password = '$password ' ";

      $results = mysqli_query($data, $select);

      if (mysqli_num_rows($results) > 0) {

         $error[]= "user already exist";

      }else{
         if($password !=  $confirm_password ){

            $error[] = 'password not matched!';

         }else{ //Adding data into the database

            $insert = "INSERT INTO users(name, email, password, user_type) VALUES('$name','$email','$password','$user_type')";
            mysqli_query($data, $insert);
            header('location:index.php');
         }
      }
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Labyrinth Library SignUp</title>
   <link rel="stylesheet" href="./css/stylesheet.css">
</head>
<body>
   <container class="form_container">

      <form class="signup" action="" method="post">

         <h2>Sign Up Now!</h2>
         
         <?php
         if (isset($error)) {

            foreach ($error as $error) {

               echo "<p class='error_message'>".$error."</p>";
            }
         }
         
         ?>

         <input type="text" name="name" required placeholder="enter your name"> 

         <input type="email" name="email" required placeholder="enter your email"> 

         <input type="password" name="password" required placeholder="enter your password"> 

         <input type="password" name="confirm_password" required placeholder="confirm password"> 

         <select name="user_type">
               
            <option value="member">Library Member</option>

            <option value="librarian">Library Librarian</option>

         </select>

         <input type="submit" value="Sign Up now" name="submit" class="submit_btn">

         <p>already have an account <a href="./index.php">Login in</a></p>

      </form>

      

   </container>
</body>
</html>