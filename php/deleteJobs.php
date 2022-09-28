<?php
    include_once 'dbh.inc.php';

    $title = $_POST['title']; 
    $salary = $_POST['salary']; 
    $country = $_POST['country']; 


$sql="
DELETE FROM jobs;";

$result = mysqli_query($conn, $sql);

header("Location: ../index.php?signup=success");