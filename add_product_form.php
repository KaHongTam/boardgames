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

                    <label for="product_desc">afbeelding</label>
                    <input type="text" class="form-control" placeholder="afbeelding" name="product_desc" required>

                    <label for="product_min_players">minimaal aantal spelers</label>
                    <input type="text" class="form-control" placeholder="minimaal aantal spelers" name="product_min_players" required>

                    <label for="product_max_players">maximaal aantal spelers</label>
                    <input type="text" class="form-control" placeholder="maximaal aantal spelers" name="product_max_players" required>

                    <label for="product_coop">co-op</label>
                    <select class="form-control" name="product-coop">
                        <option value="together">Samen spelen</option>
                        <option value="against">Tegen elkaar</option>
                        <option value="both">Beide</option>
                    </select> 

                    <label for="product_category">categorie</label>
                    <input type="text" class="form-control" placeholder="categorie" name="product_category" required>

                    <label for="product_difficulty">moeilijkheidsgraad</label>
                    <input type="text" class="form-control" placeholder="moeilijkheidsgraad" name="product_difficulty" required>

                    <label for="product_playtime">speelduur</label>
                    <input type="text" class="form-control" placeholder="speeltijd" name="product_playtime" required>

                    <div class="radio">
                    <label class="radio" for="product_travelversion">travel versie</label>
                    <input type="radio" value="1" name="product_travelversion"> Ja
                    <input  type="radio" value="0" name="product_travelversion"> Nee
                    </div>

                    
                        <label for="product_education">educatief</label>
                        <div class="radio">
                        <input  type="radio" value="1" name="product_education"> Ja 
                        </div>
                        <div class="radio">
                        <input type="radio" value="0" name="product_education"> Nee
                    </div>    

                    <button type="submit">Toevoegen</button>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>
