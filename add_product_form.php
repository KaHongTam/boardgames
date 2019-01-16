<?php
    session_start();
    if(isset($_SESSION['role'])&& $_SESSION['role']=='admin'){
        
?>

<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
    <div class="container registerform">
        <div class="row justify-content-center">

            <div class="col-xl-6">
                <form action="add_product.php" method="post">

                    <label for="product_name">Product Naam</label>
                    <input type="text" class="form-control" placeholder="Product Naam" name="product_name" required autofocus>

                    <label for="product_price">Product Prijs</label>
                    <input  type="text" class="form-control" placeholder="Prijs" name="product_price" required>

                    <label for="product_desc">Beschrijving</label>
                    <input type="text" class="form-control" placeholder="Beschrijving" name="product_desc" required>

                    <label for="product_desc">Afbeelding</label>
                    <input type="text" class="form-control" placeholder="Afbeelding" name="product_desc" required>

                    <label for="product_min_players">Minimaal aantal spelers</label>
                    <input type="text" class="form-control" placeholder="Minimaal aantal spelers" name="product_min_players" required>

                    <label for="product_max_players">Maximaal aantal spelers</label>
                    <input type="text" class="form-control" placeholder="Maximaal aantal spelers" name="product_max_players" required>

                    <label for="product_coop">Co-op</label>
                    <select class="form-control" name="product-coop">
                        <option value="together">Samen spelen</option>
                        <option value="against">Tegen elkaar</option>
                        <option value="both">Beide</option>
                    </select> 

                    <label for="product_category">Categorie</label>
                    <input type="text" class="form-control" placeholder="Categorie" name="product_category" required>

                    <label for="product_difficulty">Moeilijkheidsgraad</label>
                    <input type="text" class="form-control" placeholder="Moeilijkheidsgraad" name="product_difficulty" required>

                    <label for="product_playtime">Speelduur</label>
                    <input type="text" class="form-control" placeholder="Speeltijd" name="product_playtime" required>

                    <label class="radio" for="product_travelversion">Travel versie</label>
                    <div class="radio">
                    <input type="radio" value="1" name="product_travelversion"> Ja
                    </div>
                    <div class="radio">
                    <input  type="radio" value="0" name="product_travelversion"> Nee
                    </div>
                   
                    <label for="product_education">Educatief</label>
                    <div class="radio">
                        <input  type="radio" value="1" name="product_education"> Ja 
                    </div>
                    <div class="radio">
                        <input type="radio" value="0" name="product_education"> Nee
                    </div>    

                    <button type="submit" class="btn btn-dark">Toevoegen</button>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    }else {
        header('location: access_denied.php');
    }

?>