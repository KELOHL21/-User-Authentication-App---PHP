<?php

$data = mysqli_connect('localhost','root','','library');

if ($data->connect_error ) {
   die("Connection Failed: " .$data->connect_error);
}

?>