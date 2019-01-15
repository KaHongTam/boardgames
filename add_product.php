<?php
    include "connect.php";

    $name = $_POST['product_name'];
    $price = $_POST['product_price'];
    $description = $_POST['product_desc'];
    $image = $_POST['product_img'];
    $min_player = $_POST['product_min_player'];
    $max_player = $_POST['product_max_player'];
    $coop = $_POST['product_coop'];
    $category = $_POST['product_category'];
    $difficulty = $_POST['product_difficulty']; 
    $playtime = $_POST['product_playtime'];
    $travelversion = $_POST['product_travelversion'];
    $education = $_POST['product_education'];


    try {
        $sql = "INSERT INTO products (`product_name`, product_price, `product_desc`, product_img, 
        product_min_player, product_max_player, product_coop, product_category, product_difficulty,
        product_playtime, product_travelversion, product_education)
        VALUES ('$name', '$price', '$description', '$image' '$min_player', '$max_player', '$coop', '$category', 
        '$difficulty', '$playtime', '$travelversion', '$education' )";
        // use exec() because no results are returned
        $pdo->exec($sql);
        // echo "New record created successfully";
        header('location: add_product_form.php?succes');
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
        header('location: add_Product_form.php?error' . $e->getMessage());
    }
    $conn = null;
    
?>