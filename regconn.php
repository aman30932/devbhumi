<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

    $full_name = $_POST["name"];
    $father_name = $_POST["father_name"];
    $mother_name = $_POST["mother_name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $dob = $_POST["dob"];
    $address = $_POST["address"];
    $qualification = $_POST["qualification"];
    $gender = $_POST["gender"];

    $conn = new mysqli($host = "localhost", $user="root", $password="", $database="dev bhumi jahu");

    $stmt = $conn->prepare("INSERT INTO registration(`full_name`, `father_name`, `mother_name`, `email`,`number`, `dob`, `address` , `qualification`,`gender`) VALUES(?,?,?,?,?,?,?,?,?)");
    
    $stmt->bind_param("sssssssss",$full_name, $father_name, $mother_name, $email, $number, $dob, $address , $qualification, $gender); 
    $stmt->execute();
    $conn->commit();
    $stmt->close();
    $conn->close();

}

    include "registration.php";

?>



