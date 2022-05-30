<?php


if ($_POST['hotelName'] && $_POST['hotelLocation'] && $_POST['roomNumber'] && $_POST['price']){
    $hotelName= $_POST['hotelName'];
    $hotelLocation = $_POST['hotelLocation'];
    $roomNumber = $_POST['roomNumber'];
    $price = $_POST['price'];
    $image = $_FILES['hotelImage']['tmp_name'];
    $imageContent = addslashes(file_get_contents($image));
    $db = new PDO('mysql:host=localhost; dbname=airHotel; charset=UTF8', 'root', '');
    $checkHotel = $db->prepare("SELECT * FROM hotel WHERE name = '$hotelName'");
    $checkHotel->execute();
    $count = $checkHotel->rowCount();


    if ($count == 0) {



        $insert = "INSERT INTO hotel(name, location, room_number, price, hotelImage) VALUES ('$hotelName', '$hotelLocation', '$roomNumber', '$price', '$imageContent')";
        $query = $db->prepare($insert);
        $query->execute();

        header("location:../view/index.php");


    } else {
        echo "This hotel already exists";
    }
}else {
    echo "Please fill the informations below";
}







