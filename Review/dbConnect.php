<?php

$conn = mysqli_connect('localhost', 'root', '', 'clothesReview');

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}

?>