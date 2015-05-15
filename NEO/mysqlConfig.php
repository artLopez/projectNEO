<?php
/**
 * Created by PhpStorm.
 * User: edsan
 * Date: 4/28/15
 * Time: 9:37 PM
 */
function getConnection(){
    $user = "neoDBUser";
    $pass = "neoDBUser";
    $dsn = "mysql:host=localhost;dbname=neo";
    try{
        $dbconn = new PDO($dsn, $user, $pass);
        $dbconn->setAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION);
        return $dbconn;
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }

    return null;

    /**/
}