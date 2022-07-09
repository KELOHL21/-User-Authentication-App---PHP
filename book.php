<?php
include('./includes/mysql_db.inc.php');

if (isset($_POST['save'])) {

    $author = $_POST['author'];
    $title=$_POST['title'];
    $description =$_POST['description'];
    $genre =$_POST['genre'];

   $inserts = "INSERT INTO books ('book_name', 'description','book_genre') VALUES('$title','$description','$genre')";

   mysqli_query($data, $inserts);

}else {
    echo "no connection";
}

?>

<container class="form_container">

<form class="new_book" action="" method="POST">

   <h2>Add New Book</h2>

   <input type="text" name="author" required placeholder="Author"> 

   <input type="text" name="title" required placeholder="Title"> 

   <input type="pararaph" name="description" required placeholder="Description"> 

   <input type="text" name="genre" required placeholder="Genre"> 

   <input type="submit" value="Save" name="save" class="submit_btn">

</form>

</container>