<?php
/**
 * Created by PhpStorm.
 * User: edsan
 * Date: 4/29/15
 * Time: 5:42 PM
 */
if(isset($_GET['action'])){
    require "mysqlConfig.php";
    if($_GET['action'] == "roles"){
        $dbconn = getConnection();
        $sql = "select role_id, role_function from roles;";
        $stmt = $dbconn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $records = json_encode($result);
        echo $records;
    }

}
function getEvacTables(){
    require "mysqlConfig.php";
    $dbconn = getConnection();
    $sql = "select evacuee_id, given_name, surname, date_of_birth, sex from evacuee";
    $stmt = $dbconn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $record){
        $evacueeId = $record['evacuee_id'];
        $givenName = $record['given_name'];
        $surname = $record['surname'];
        $dateOfBirth = $record['date_of_birth'];
        $sex = $record['sex'];
        echo "<tr><td>$evacueeId</td><td>$givenName</td><td>$surname</td><td>$dateOfBirth</td><td>$sex</td></tr>";
    }
}



function getLatLong(){
    require "mysqlConfig.php";
    $dbConn2 = getConnection();
    $sql = "SELECT `ID`,`latitude`, `longitude` FROM `airports`";
    $stmt = $dbConn2->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;

    foreach ($result as $record){
        $airportId = $record['ID'];
        $latitude = $record['latitude'];
        $longitude= $record['longitude'];

        echo "<tr><td>$airportId</td><td>$latitude/td><td>$longitude</td></tr>";
    }

}

function deleteEvacuees(){
    require "mysqlConfig.php";
    $dbconn3 = getConnection();
    $sql = "select evacuee_id, given_name, surname, date_of_birth, sex from evacuee";
    $stmt = $dbconn3->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $record){
        $evacueeId = $record['evacuee_id'];
        $givenName = $record['given_name'];
        $surname = $record['surname'];
        $dateOfBirth = $record['date_of_birth'];
        $sex = $record['sex'];
        echo "<tr><td>$evacueeId</td><td>$givenName</td><td>$surname</td><td>$dateOfBirth</td><td>$sex</td><button>Delete</button></tr>";
    }
}
