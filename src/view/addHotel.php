<?php
session_start();
if (!isset($_SESSION['email']))
    header('location:login.php');

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.4/dist/flowbite.min.css" />
</head>
<body>

    <?php include("header.php") ?>

    <div class="flex justify-center items-center mt-6">
        <form action="../controller/addHotel.php" class="w-3/5 flex space-y-6 flex-col bg-[#343434]  py-6 relative px-8 rounded" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="Name" class="" name="hotelName">
            <input type="text" placeholder="Location" class="" name="hotelLocation">
            <input type="text" placeholder="Room's number" class="" name="roomNumber">
            <input type="text" placeholder="Price" class="" name="price">
            <input type="file"
                   id="hotelImage" name="hotelImage"
                   accept="image/png, image/jpeg">
            <button name="submit" value="Add" class="bg-[#0071c2] w-fit rounded-[3px] py-2 px-12 hover:bg-[#0066af]">Add</button>

        </form>
    </div>

</body>
<script src="../index.js"></script>
<script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
<script src="https://kit.fontawesome.com/a7e9f794eb.js" crossorigin="anonymous"></script>
</html>