<?php

// Move this to a separate config file
 $server = "localhost";
 $username = "root";
 $password = "";
 $db = "lovelife";
 $primary_secret = "dkTkpbIDX7xkz13XpfXL6eETUGxjif"; //pepper
 $secondary_secret = "plUlLv4CmfyqRkcc6CBCNcDEouBcDb";


 $dbConnection = new mysqli($server, $username, $password);

 if(!$dbConnection)
    die("Connection failed ". $dbConnection->connect_error);

 $create_db_query = "CREATE DATABASE IF NOT EXISTS ".$db;

 if ($dbConnection->query($create_db_query) === TRUE) {
   $dbConnection = new mysqli($server, $username, $password, $db);
     
   if($dbConnection->connect_error)
      die("Connection failed ". $dbConnection->connect_error);

   if($dbConnection->query('select 1 from user LIMIT 1') == FALSE) {
      $create_user_table_query = "CREATE TABLE `lovelife`.`user` (
         `_id` INT NOT NULL AUTO_INCREMENT,
         `email` VARCHAR(45) NULL,
         `phone` VARCHAR(45) NULL,
         `password` VARCHAR(45) NULL,
         `created_at` DATETIME NULL,
         `active` TINYINT NULL,
         PRIMARY KEY (`_id`),
         UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE,
         UNIQUE INDEX `phone_UNIQUE` (`phone` ASC) VISIBLE )";
      
      $result = $dbConnection->query($create_user_table_query);
      if($result !== TRUE) {
         echo "Table not created" . $dbConnection->error;
      }
   }

   $email = (isset($_POST['mail']) && $_POST['mail'] != "") ? $_POST['mail'] : "";
   $phone = (isset($_POST['phone']) && $_POST['phone'] != "") ? $_POST['phone'] : "";
   $password = (isset($_POST['pswd']) && $_POST['pswd'] != "") ? base64_encode( openssl_encrypt( $_POST['pswd'], "AES-256-CBC", $primary_secret, 0, $secondary_secret )) : "";
   $created_at = (new DateTime())->format('Y-m-d H:i:s');

   $insert_query = "INSERT INTO `lovelife`.`user` (`email`, `phone`, `password`, `created_at`, `active`) VALUES ('$email', '$phone', '$password', '$created_at', '0')";
   $result = $dbConnection->query($insert_query);
   echo $result == 1 ? "User registered" : "Registration failed! ".$dbConnection->error;
 }
 else
   echo "Error creating database: " . $dbConnection->error;

?>