<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $message = $_POST["message"];

    $conn = new mysqli($host = "localhost", $user="root", $password="", $database="dev bhumi jahu");

    $stmt = $conn->prepare("INSERT INTO contact(`name`, `email`,`number`, `address` , `message`) VALUES(?,?,?,?,?)");
    
    $stmt->bind_param("sssss",$name, $email, $phone, $address , $message); 
    $stmt->execute();
    $conn->commit();
    $stmt->close();
    $conn->close();

}

    include "index.php";

?>



