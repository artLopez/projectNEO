<?php
/**
 * Created by PhpStorm.
 * User: edsan
 * Date: 5/3/15
 * Time: 4:57 PM
 */

$userSql = "INSERT INTO `users`(`username`, `password`, `email`,
                `first_name`, `last_name`, `phone_number`)
                VALUES (:username, :password,:email, :first_name, :last_name,:phone_number)";

$userNamedParameters = array();
$userNamedParameters[":username"] = $_POST['username'];
$userNamedParameters[":password"]  = hash("sha256",$_POST['password']);
$userNamedParameters[":email"] = $_POST["email"];
$userNamedParameters[":first_name"]       = $_POST['givenName'];
$userNamedParameters[":last_name"]    = $_POST['surname'];
$userNamedParameters["phone_number"] = $_POST['phone_number'];

$stmt2 = $dbConn->prepare($userSql);
$stmt2->execute($userNamedParameters);
