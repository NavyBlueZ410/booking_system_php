<?php 
    session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="content-logout">
        <button>Logout</button>
    </div>
    <div class="content-title">
        <h1>Home</h1>
        <h2>Welcome <?php echo $_SESSION["nickname"]; ?></h2>
    </div>
    <div class="container">
        <button>Booking Study</button>
    </div>
</body>
</html>