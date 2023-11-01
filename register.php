<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="content-form">
        <form 
            action="check_register.php" 
            method="POST"
            class="form"
        >
            <h1>Register</h1>
            <input 
                type="text"
                placeholder="username"
                name="username"
            >
            <input type="password"
                type="password"
                placeholder="password"
                name="password"
            >
            <input type="nickname"
                type="text"
                placeholder="nickname"
                name="nickname"
            >
            <a href="index.php">Go Back</a>
            <button name="submitRegister">Register</button>
        </form>
    </div>
</body>
</html>