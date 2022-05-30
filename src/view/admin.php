<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <div class="container flex justify-center items-center w-full h-screen">
        <form action="../controller/addHotel.php" class="w-1/3 flex space-y-6 flex-col" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="Name" class="" name="hotelName">
            <input type="text" placeholder="Location" class="" name="hotelLocation">
            <input type="text" placeholder="Room's number" class="" name="roomNumber">
            <input type="text" placeholder="Price" class="" name="price">
            <input type="file"
                   id="hotelImage" name="hotelImage"
                   accept="image/png, image/jpeg">
            <button name="submit" value="Add" class="bg-[#0071c2] w-fit rounded-[3px] py-1 px-6 hover:bg-[#0066af]">Add</button>

        </form>
    </div>

</body>
<script src="../index.js"></script>
</html>