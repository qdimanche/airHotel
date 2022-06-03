<?php


session_start();
if (!isset($_SESSION['email']))
    header('location:login.php');

$id = $_POST['id'];

$db = new PDO('mysql:host=localhost;dbname=airHotel', 'root', '');

$check = $db->prepare("SELECT * FROM hotel WHERE hotel.id IN ($id)");
$check->execute();
$data = $check->fetch();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Settings- Screaming</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.4/dist/flowbite.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <?php include("header.php") ?>

    <div class="flex justify-center">
        <div class="flex flex-col bg-[#343434] m-6  py-6 relative px-8 rounded">

            <form action="../controller/updateHotel.php" class="flex flex-col space-y-6" method="post" enctype="multipart/form-data">


                <input type="text" placeholder="Name" class="" name="hotelName" value="<?php echo $data['name'] ?>">
                <input type="text" placeholder="Location" class="" name="hotelLocation" value="<?php echo $data['location'] ?>">
                <input type="text" placeholder="Room's number" class="" name="roomNumber" value="<?php echo $data['room_number'] ?>">
                <input type="text" placeholder="Price" class="" name="price" value="<?php echo $data['price'] ?>">
                <input type="file"
                       id="hotelImage" name="hotelImage"
                       accept="image/png, image/jpeg">
                <input type="hidden" id="id" name="id" value="<?php echo $id ?>">
                <button name="submit" value="Add" class="bg-[#0071c2] w-fit rounded-[3px] py-2 px-12 hover:bg-[#0066af]">Update</button>
            </form>

            <form action="../controller/deleteHotel.php" method="post">
                <input type="hidden" id="id" name="id" value="<?php echo $id ?>">
                <button type="submit" class="bg-red-700 w-fit rounded-[3px] py-2 px-12 hover:bg-[#0066af absolute bottom-[1.5rem] right-[2rem]">Delete</button>
            </form>
        </div>
    </div>



</body>
<script src="../index.js"></script>
<script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
<script src="https://kit.fontawesome.com/a7e9f794eb.js" crossorigin="anonymous"></script>
</html>


