<?php

$con=mysqli_connect('localhost', 'root', '', 'ecommerce');
if ($con) {
    echo "connection succesful";
} else {
    die(mysqli_error($con));
}