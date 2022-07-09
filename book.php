<?php
include('./includes/mysql_db.inc.php');


 $author_name ="";
 $book_name= "";
 $description = "";
 $book_genre="";

if (isset($_POST['save'])) {

    $author_name = mysqli_real_escape_string($data,$_POST['author_name']);
   $book_name= mysqli_real_escape_string($data,$_POST['book_name']);
    $description = mysqli_real_escape_string($data,$_POST['description']);
   $book_genre = mysqli_real_escape_string($data,$_POST['book_genre']);

    $new_entry = "INSERT INTO books(book_name,description,book_genre)"." VALUES ('$book_name','$description','$book_genre')" ;

   $result=$data->query($new_entry);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Labyrinth Library Home</title>
   <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>

  <container class="form_container">

    <form class="new_book" action="" method="POST">
    
    <h2>Add New Book</h2>
    
    <input type="text" name="author_name" required placeholder="Author"> 
    
    <input type="text" name="book_name" required placeholder="Title"> 
    
    <input type="text" name="description" required placeholder="Description"> 
    
    <input type="text" name="book_genre" required placeholder="Genre"> 
    
    <input type="submit" value="Save" name="save" class="submit_btn">
    
    </form>

</container>
  
</body>
</html>
