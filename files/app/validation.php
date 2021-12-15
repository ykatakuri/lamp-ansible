<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'db-config.php';


function validate(PDO $PDO){
    if(!isset($_POST["title"]) || empty($_POST["title"])) {
        echo '<p style="color: red; font-weight: bold;">Il manque le titre de l\'étape</p>';
    }
    elseif(!isset($_POST["title"]) || empty($_POST["tools"])) {
        echo '<p style="color: red; font-weight: bold;">Il manque des exemples d\'outils pour cette étape</p>';
    }
    elseif(!isset($_POST["detail"]) || empty($_POST["detail"])) {
        echo '<p style="color: red; font-weight: bold;">Il manque les détails pour cette étape</p>';
    }else{
        $request = $PDO->prepare("INSERT INTO process (title, tools, detail) VALUES (:title, :tools, :detail)");
        $request->bindValue(":title", $_POST["title"]);
        $request->bindValue(":tools", $_POST["tools"]);
        $request->bindValue(":detail", $_POST["detail"]);
        $request->execute();
        header('Location: index.php'); 
    }

    echo '<p><a href="index.php">accueil</a></p>';
   
}

$PDO = new PDO(DB_DSN, DB_USER, DB_PASS, $options);
validate($PDO);