<?php 
include 'nav_header.php';
?>


<!doctype html>
    <html lang="en">
      <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="css/register_form.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
      </head>
    <body>
   
        <!-- Register Form -->
    <div class="container registerform">
        <div class="row justify-content-center">

            <div class="col-xl-6">
                <form action="register.php" method="post">
                <div class="form-group mb-0">
                    <label for="InputEmail1"></label>
                    <div class="input-group">
                        <div class="input-group-prepend"> 
                            <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-envelope"></i></span>   
                        </div> 
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailInput" placeholder="Voer hier uw e-mail adres in" title="Voer dit veld in" required autofocus>            
                    </div>
                    <small id="emailHelp" class="form-text text-muted">Wij zullen nooit uw email met anderen delen zonder uw toestemming.</small>
                </div>
                    <div class="form-group">
                        <label for="Inputpassword1"></label> 
                        <div class="input-group">
                            <div class="input-group-prepend"> 
                            <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-key"></i></span> 
                        </div>  
                        <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordInput" placeholder="Voer hier uw wachtwoord in" pattern=".{8,}" title="Minimaal 8 tekens" required>
                    </div>
                <div class="form-group">
                    <label for="Inputpassword2"></label>
                        <div class="input-group">
                            <div class="input-group-prepend"> 
                            <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-key"></i></span>   
                        </div>
                        <input type="password" class="form-control" id="confirmPassword" name="password" aria-describedby="passwordInput" placeholder="Herhaal uw wachtwoord" pattern=".{8,}" title="Minimaal 8 tekens" required>          
                </div>
                    <div class="col">
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            Ik heb de <a href="#">algemene voorwaarden</a> gelezen en geaccepteerd
                            </label>
                        </div>
                    </div>
                        <button type="submit" name="register" value="Register" class="btn btn-dark">Registreer</button>
                </form>
                </div>   
            </div>
        </div>
    </div>
    </div>
    <!-- Register Form -->
   

        <!-- Optional JavaScript -->
        <script src="js/passwordverify.js"></script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        
    </body>
<?php
include 'footer.php'
?>


</html>