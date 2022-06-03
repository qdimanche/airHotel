<?php

session_start();


    $hotelName= $_POST['hotelName'];
    $hotelLocation = $_POST['hotelLocation'];
    $roomNumber = $_POST['roomNumber'];
    $price = $_POST['price'];
    $image = $_FILES['hotelImage']['tmp_name'];
    $imageContent = addslashes(file_get_contents($image));
    $path = "upload/".$image;
    $id = $_POST["id"];
    $db = new PDO('mysql:host=localhost; dbname=airHotel; charset=UTF8', 'root', '');


    if($imageContent != "")
    {
        move_uploaded_file($imageContent , $path);
        $c_update="UPDATE hotel SET name = '$hotelName', location = '$hotelLocation', room_number = '$roomNumber', price = '$price', hotelImage = '$imageContent' WHERE hotel.id = '$id' ";
    }else
    {
        $c_update="UPDATE hotel SET name = '$hotelName', location = '$hotelLocation', room_number = '$roomNumber', price = '$price' WHERE hotel.id = '$id' ";
}

    $query = $db->prepare($c_update);
    $result = $query->execute();
    header('Location: ../view/index.php');


