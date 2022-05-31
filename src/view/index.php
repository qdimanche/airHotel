<?php
session_start();
if (!isset($_SESSION['email']))
    header('location:login.php');

$bdd = new PDO('mysql:host=localhost; dbname=airHotel; charset=UTF8', 'root', '');
$display_hotels = $bdd->prepare("SELECT * FROM hotel");
$query = $bdd->prepare($display_hotels);
$display_hotels->execute();

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


    <div class="container lg:mx-auto mt-12 mx-6">

            <div class="grid lg:grid-cols-2 grid-cols-1 gap-16 flex text-center">
                <?php
                foreach ($display_hotels as $am) {
                ?>
                <div class="flex w-full">
                    <?php
                    $base64 = 'data:image.jpg ;base64,' . base64_encode($am['hotelImage']);

                    ?>

                    <div class="!w-[40%] h-full !bg-cover !bg-center" style='background-image: url("<?php echo $base64?>")'></div>



                    <div class="flex flex-col lg:justify-start lg:px-8 lg:py-2 px-8 text-left w-[60%]">
                        <div class="flex items-center mb-4">
                            <div class="flex lg:flex-row flex-col lg:items-center">
                                <h2 class="text-xl mr-4">
                                    <?php echo $am['name']?>
                                </h2>



                            </div>

                        </div>
                        <span>
                            <?php echo $am['location']?>
                        </span>
                        <p>
                            <?php echo $am['room_number']?> room(s)
                        </p>

                        <span class="mt-3 font-bold">
                            € <?php echo $am['price']?>
                        </span>
                        <form action="updateHotel.php" method="post">
                            <input type="hidden" id="id" name="id" value="<?php echo $am['id'] ?>">
                            <button class="mt-8 bg-[#0071c2] w-1/2 rounded-[3px] py-2 lg:px-6 px-2 hover:bg-[#0066af]">Book</button>
                            <button type="submit" class="mt-6 text-white w-1/2 rounded-[3px] py-2 lg:px-6 px-2 text-center bg-[#1D1D1D] hover:bg-black">Update hotel</button>
                        </form>
                    </div>

                </div>
                    <?php
                }
                ?>

            </div>


    </div>

</body>
<script src="../index.js"></script>
<script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
<script src="https://kit.fontawesome.com/a7e9f794eb.js" crossorigin="anonymous"></script>
</html>
