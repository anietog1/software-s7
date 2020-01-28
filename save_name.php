<?php

include('db.php');

if(isset($_POST['save_name'])) {
    $name = $_POST['name'];
    $query  = "INSERT INTO user(name) VALUES ('$name')";
    $result = mysqli_query($conn, $query);

    if(!$result) {
        die('ALGO HA FALLADO');
    } else {
        header('Location: index.php');
    }
}

?>