<?php 
    //Fichier qui gère toutes les variables sessions
    session_start();
    $_SESSION['contactDate'] = $_POST["contact"];
    $_SESSION['name'] = $_POST["lname"];
    $_SESSION['fname'] = $_POST["fname"];
    $_SESSION['mail'] = $_POST["email"];
    $_SESSION['sex'] = $_POST["sexe"];
    $_SESSION['birthdate'] = $_POST["birthday"];
    $_SESSION['function'] = $_POST["function"];
    $_SESSION['subject'] = $_POST["subject"];
    $_SESSION['content'] = $_POST["content"];
    //Test de l'affichage des variables SESSION
    echo $_SESSION['contactDate'];
    echo "<br>";
    echo $_SESSION['name'];
    echo "<br>";
    echo $_SESSION['fname'];
    echo "<br>";
    echo $_SESSION['mail'];
    echo "<br>";
    echo $_SESSION['sex'];
    echo "<br>";
    echo $_SESSION['birthdate'];
    echo "<br>";
    echo $_SESSION['function'];
    echo "<br>";
    echo $_SESSION['subject'];
    echo "<br>";
    echo $_SESSION['content'];
    // A mettre dans la base de données par la suite

?>