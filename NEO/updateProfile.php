<?php
/**
 * Created by PhpStorm.
 * User: edsan
 * Date: 4/28/15
 * Time: 10:19 PM
 */
require "mysqlConfig.php";
session_start();
if (isset($_POST['uploadForm'])) {

    echo $_FILES['fileName']['size'];
    echo $_FILES['fileName']['type'];

    $imageType = exif_imagetype($_FILES['fileName']['tmp_name']); //Returns 1, 2 or 3 for gif,jpg or png respectively


    if($imageType != 1 AND $imageType != 2 AND $imageType != 3)
    {
        unlink($_FILES['fileName']['tmp_name']);
        echo "Improper File Type";

    }

    else
    {

        $path = "img/admin";


        echo "<br>";


        if (!file_exists($path) ) { //checks whether user's folder exists
            mkdir($path);
        }
        move_uploaded_file($_FILES['fileName']['tmp_name'], $path . '/' .  $_FILES['fileName']['name'] );
        $sql = "UPDATE users SET profile_picture = :profilePicture WHERE username = :username";

        $dbConn = getConnection();
        $namedParameters = array();

        $namedParameters[":username"] = $_SESSION['username'];
        $namedParameters[":profilePicture"] = $path . '/' .  $_FILES['fileName']['name'];

        $stmt = $dbConn->prepare($sql);
        $stmt->execute($namedParameters);


        $sql = "SELECT profile_picture FROM users WHERE username = :username";

        $namedParameters = array();

        $namedParameters[":username"] = $_SESSION['username'];

        $stmt = $dbConn->prepare($sql);
        $stmt->execute($namedParameters);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION['profile_picture'] = $result[0]['profile_picture'];
        header("Location: profile.php");
        //print_r($result);
    }

}

