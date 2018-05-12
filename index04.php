<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .banco{
        width: 800px;
        margin: 50px auto;
        border: 1px solid #000;
        height: 800px
    }
    .oco{
        width: 100px;
        height: 100px;
        float: left;
    }
    .trang{
        background-color: #fff
    }
    .den{
        background-color: #000
    }
</style>
<body>
    <div class="banco">
        <?php
        for($y=1; $y<=8; $y++){
            for($x = 1; $x<=8;$x++){
                if(($y+$x)%2 == 0 ){
                    echo ' <div class="oco trang"></div>';
                }
                else echo ' <div class="oco den"></div>';
            }
        }
        
        ?>
    </div>
</body>
</html>