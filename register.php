<?php

//register.php
 
/**
 * Start the session.
 */
session_start();
 
/**
 * Include ircmaxell's password_compat library.
 */
require 'lib/password.php';
 
/**
 * Include our MySQL connection.
 */
require 'connect.php';

$message;
$showMessage = false;
 
//If the POST var "register" exists (our submit button), then we can
//assume that the user has submitted the registration form.
if(isset($_POST['register'])){
    
    //Retrieve the field values from our registration form.
    $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
    $pass = !empty($_POST['password']) ? trim($_POST['password']) : null;
    
    //TO ADD: Error checking (username characters, password length, etc).
    //Basically, you will need to add your own error checking BEFORE
    //the prepared statement is built and executed.
    
    //Now, we need to check if the supplied username already exists.
    
    //Construct the SQL statement and prepare it.
    $sql = "SELECT COUNT(user_email) AS num FROM users WHERE user_email = :user_email";
    $stmt = $pdo->prepare($sql);
    
    //Bind the provided username to our prepared statement.
    $stmt->bindValue(':user_email', $email);
    
    //Execute.
    $stmt->execute();
    
    //Fetch the row.
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    //If the provided username already exists - display error.
    //TO ADD - Your own method of handling this error. For example purposes,
    //I'm just going to kill the script completely, as error handling is outside
    //the scope of this tutorial.
    if($row['num'] > 0){
        die('That username already exists!');
    }
    
    //Hash the password as we do NOT want to store our passwords in plain text.
    $passwordHash = password_hash($pass, PASSWORD_BCRYPT, array("cost" => 12));
       
    $sql = "INSERT INTO users (user_email, user_password) VALUES (:user_email, :user_password)";
    $stmt = $pdo->prepare($sql);
    
    //Bind our variables.
    $stmt->bindValue(':user_email', $email);
    $stmt->bindValue(':user_password', $passwordHash);
 
    //Execute the statement and insert the new account.
    $result = $stmt->execute();
    
    //If the signup process is successful.
    if($result){
        //What you do here is up to you!
        $message =  'Thank you for registering with our website.';
        $showMessage = true;
    }
    
}
 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <!-- <div class="form-wrapper">
            <div class="contact-form">
            <h1>Register</h1>
            <form action="register.php" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username"><br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password"><br>
            <button type="submit" class="register" name="register" value="Register">Sign Up</button>
            </form>
            <?php if($showMessage){ echo $message;
            }
            ?>
            </div>
        
            <div class="image-box-right">
            <img src="img/womanlaptop.jpg" alt="register">
            </div>    
        </div>           -->

        <div class="form-group">
            <form action="register.php" method="post">
                <label for=""></label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Enter your E-mail">
                <div class="form-group">
                <label for=""></label>
                <input type="password" id="wachtwoord" name="gebruiker_wachtwoord" pattern=".{8,}" title="minimaal 8 tekens" required> <!-- pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" -->
                <button type="submit" class="register" name="register" value="Register">Sign Up</button>
                </div>
            </form>  
        </div>
        <?php if($showMessage){ echo $message;
            }
            ?>  
    </body>
</html>

















