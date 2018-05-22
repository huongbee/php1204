<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <?=isset($_GET['error']) ? $_GET['error'] : ''?>
    </div>
    <form action="xuly.php" method="POST">
        <input type="text" name="age" placeholder="Enter your age">
        <input type="text" name="txtName" placeholder="Enter your name">
        <button type="submit">Send</button>
    </form>
</body>
</html>
<!-- name, email, title, message -->
<!--  -->