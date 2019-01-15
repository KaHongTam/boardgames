<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <?php 
            include 'navHeader.php';
            include "db_connection.php";
            $product_id = $_GET['product_id'];
            $sql = "SELECT * FROM products WHERE product_id = $product_id";
            $data = $conn->query($sql);
            foreach ($data as $row){
        ?>
        <title><?php echo $row['product_name']?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="css/product_overview.css" />
    </head>
    <body>
        <div class='container-fluid text-center mt-5'>
            <?php                
                    echo '<div class="row mt-5"><div class="col-lg-12"><h1>' . $row['product_name'] . '</h1></div>';
            ?>
            </div>
            <div class='row'>
                <div class='col-lg-1'></div>
                <div class='col-lg-3'>
                    <img src='<?php echo 'img/products/' . $row["product_img"] ?>' height='300px'>
                </div>
                <div class='col-6 text-left ml-5'>
                    <br>
                    <h3>Omschrijving:</h3>
                    <p><?php echo $row["product_desc"] ?></p>
                        <br><br>
                    <h3>Prijs: € <?php echo number_format($row['product_price'],2,",",".") ?></h3>
                    <br>
                    <button type="button" class="btn btn-primary btn-lg">In winkelwagen</button>
                </div>
            </div>

        </div>
        <?php 
                }
        include 'footer.php' ?>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>
        <script src="main.js"></script>
    </body>
</html>