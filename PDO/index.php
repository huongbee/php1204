<?php
try{
    $connect = new PDO("mysql:host=127.0.0.1;dbname=apple2",'root','');
    $connect->exec('set names utf8');
   
    //$sql = "DELETE FROM users where id>7";
    //$sql = "UPDATE users SET password='121212' WHERE id=2";
    // $check = $connect->exec($sql);
    // var_dump($check);


    // $sql = "SELECT * FROM users WHERE username=?";
    // $stmt = $connect->prepare($sql);
    // $check = $stmt->execute(['1290848086886']);
    // if($check){
    //     $data = $stmt->fetchAll();
    //     print_r($data);
    // }
    // else{
    //     echo "error!";
    // }
    
    
    $sql = "SELECT * FROM products WHERE name=? OR price=?";

    //$params = ['iPhone X 256GB', 34790000];
    $stmt = $connect->prepare($sql);
    // $stmt->bindValue(1,'iPhone X 256GB');
    // $stmt->bindValue(2,34790000);

    $name = 'iPhone X 256GB';
    $price = 34790000;
    $stmt->bindParam(1,$name);
    $stmt->bindParam(2,$price);
    $check = $stmt->execute();
    if($check){
        
        //$data = $stmt->fetchAll();
        //$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //$data = $stmt->fetchAll(PDO::FETCH_BOTH);
        //$data = $stmt->fetchAll(PDO::FETCH_NUM);

        // $data = $stmt->fetchAll(PDO::FETCH_OBJ);
        
        // foreach($data as $sp){
        //     echo $sp->price;
        //     echo "<br>";
        // }
        // foreach($data as $sp){
        //     echo $sp['price'];
        //     echo "<br>";
        // }
        // echo $data[0]['price'];
        // echo $data[0]->price;
    
        $data = $stmt->fetch(PDO::FETCH_OBJ); 
        //print_r($data);
        echo $data->price;
    }
    else{
        echo "error!";
    }

}
catch(Exception $e){
    echo "Error: ".$e->getMessage();
}


?>