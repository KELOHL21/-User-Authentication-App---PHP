<?php
session_start();

include('./includes/mysql_db.inc.php');

$mysql = 'SELECT * FROM authors INNER JOIN books ON authors.author_id=books.author_id';

$result= mysqli_query($data,$mysql);

?>
