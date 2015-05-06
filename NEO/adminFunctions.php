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
    else if($_GET['action'] == "getAirportPoints"){
        getLatLong();
    }
}
function getEvacTables(){
    $dbconn = getConnection();
    $sql = "select evacuee_id, given_name, surname, date_of_birth, sex from evacuee;";
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
    $dbConn2 = getConnection();
    $sql = "SELECT ID,airport,latitude,longitude FROM airports";
    $stmt = $dbConn2->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //$result = utf8_encode($result);
    $records = json_encode(utf8ize($result));
    echo $records;

    /*
    foreach ($result as $record){
        $airportId = $record['ID'];
        $latitude = $record['latitude'];
        $longitude= $record['longitude'];

        echo "<tr><td>$airportId</td><td> &nbsp; </td><td>$latitude</td><td> &nbsp; </td<td>$longitude</td></tr><br>";
    } */
}
function utf8ize($d){
    if(is_array($d)){
        foreach($d as $k => $v){
            $d[$k] = utf8ize($v);
        }
    } else if(is_string($d)){
        return utf8_encode($d);
    }
    return $d;
}

