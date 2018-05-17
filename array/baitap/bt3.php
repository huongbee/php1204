<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bt3.css">
</head>
<?php
require 'arraySanpham.php';
?>
<body>
    <div class="content">
        <?php foreach($arrSanpham as $sp):?>
        <div class="item">
            <div class="image">
                <img src="<?=$sp['image']?>" alt="">
            </div>
            <div class="infor">
                <h2><?=$sp['name']?></h2>
                <li>Phiếu mua hàng Oppo trị giá 200.000đ</li>
                <li>Phiếu mua hàng Oppo trị giá 200.000đ</li>
                <li class="promotion">Khuyến mãi: </li>
                <li>Giá tốt </li>              
                <li>Tặng bình giữ nhiệt</li>  
            </div>
            <div class="name"><?=$sp['name']?></div>
            <div class="price"><?=number_format($sp['price'])?> đ</div>
            <!-- <div class="price"><?=number_format($sp['price'],2,',','.')?> đ</div> -->
        </div>
        <?php endforeach?>
    </div>
</body>
</html>