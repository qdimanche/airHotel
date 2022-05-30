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
        <form action="../controller/loginCheck.php" class="w-1/3 flex space-y-6 flex-col" method="post">
            <input type="text" placeholder="username" class="" name="email">
            <input type="password" placeholder="******" class="" name="password">
            <button name="submit" value="Login" class="bg-[#0071c2] w-fit rounded-[3px] py-1 px-6 hover:bg-[#0066af]">Login</button>
        </form>
    </div>

</body>
<script src="../index.js"></script>
</html>