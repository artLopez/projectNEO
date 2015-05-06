<?php
/**
 * Created by PhpStorm.
 * User: edsan
 * Date: 5/3/15
 * Time: 4:57 PM
 */
require "mysqlConfig.php";

$dbconn = getConnection();
$userSql = "INSERT INTO `users`(`username`, `password`, `email`,
                `first_name`, `last_name`, `phone_number`, profile_picture)
                VALUES (:username, :password,:email, :first_name, :last_name,:phone_number,:profile_picture)";

$userNamedParameters = array();
$userNamedParameters[":username"] = $_POST['username'];
$userNamedParameters[":password"]  = hash("sha256",$_POST['password']);
$userNamedParameters[":email"] = $_POST["email"];
$userNamedParameters[":first_name"]       = $_POST['first_name'];
$userNamedParameters[":last_name"]    = $_POST['last_name'];
$userNamedParameters["phone_number"] = $_POST['phone_number'];


$imageType = exif_imagetype($_FILES['profile_picture']['tmp_name']); //Returns 1, 2 or 3 for gif,jpg or png respectively


if($imageType != 1 AND $imageType != 2 AND $imageType != 3)
{
    unlink($_FILES['profile_picture']['tmp_name']);
    echo "Improper File Type";

}

else {

    $path = "img/".$_POST['username'];

    if (!file_exists($path)) { //checks whether user's folder exists
        mkdir($path);
    }
    move_uploaded_file($_FILES['profile_picture']['tmp_name'], $path . '/' . $_FILES['profile_picture']['name']);
    $userNamedParameters[':profile_picture'] = $path . '/' . $_FILES['profile_picture']['name'];
    $stmt = $dbconn->prepare($userSql);
    $stmt->execute($userNamedParameters);
    $lastInsertId = $dbconn->lastInsertId();
    $role_id = $_POST['role_select'];
    $sql = "insert into user_roles (role_id, user_id) values (:role_id, :user_id);";
    $stmt2 = $dbconn->prepare($sql);
    $stmt2->execute(array(":role_id" => $role_id,
                          ":user_id" => $lastInsertId));
}
header("Location: addUser.php");
//$stmt->execute($userNamedParameters);

//$lastInsertId = $dbconn->lastInsertId();

