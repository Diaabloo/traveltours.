<?php

session_start();


$connection = mysqli_connect('localhost', 'root', '', 'travel_tours');

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $request = " insert into bookform(name, email, phone, adresse, location, guests, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
    mysqli_query($connection, $request) or die("fail");

    $_SESSION['valide'] = '1';


    header('location:valide.php');
}
