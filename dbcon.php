<?php

$localhost = "localhost"; 
$root = "root"; 
$booksplaylist = "booksplaylist"; 
$playlistlivros = "playlistlivros";  

$con = mysqli_connect($localhost, $root, $booksplaylist, $playlistlivros);

if (!$con) {
    $res = [
        'status' => 500,
        'message' => 'Connection failed: ' . mysqli_connect_error()
    ];
    echo json_encode($res);
    exit;
}


?>

