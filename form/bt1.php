<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        if(!empty($_POST)){
            $error = [];
            if(isset($_POST['name']) && $_POST['name'] != ''){
                echo $_POST['name'];
            }
            else
                $error['name'] = "Vui long nhap ten";
            
            if(isset($_POST['email']) && $_POST['email'] != ''){
                echo $_POST['email'];
            }
            else
                $error['email'] = "Vui long nhap email";
        }

    ?>
    <form action="bt1.php" method="POST">
        <input type="text" name="name" placeholder="Enter name" value="<?=@$_POST['name']?>">
        <small><?=isset($error['name']) ? $error['name'] : '' ?></small>
        <br> <br>
        <input type="email" name="email" placeholder="Enter email" 
            value="<?=isset($_POST['email']) ? $_POST['email'] : ''?>">
        <small><?=isset($error['email']) ? $error['email'] : '' ?></small>
        
        <br> <br>
        <input type="text" name="title" placeholder="Enter title">
        <br> <br>
        <textarea name="message" rows="5"></textarea>
        <br> <br>        
        <button type="submit">Send</button>
    </form>

    
</body>
</html>