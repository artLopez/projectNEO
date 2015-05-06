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
    else if($_GET['action'] == "delete"){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "DELETE FROM evacuee WHERE evacuee_id=:id; ";
            $dbconn = getConnection();
            $stmt = $dbconn->prepare($sql);
            $stmt->execute(array(":id" => $id));

        }
    }
    else if($_GET['action'] == "update"){
        if(isset($_GET['firstName']) && isset($_GET['lastName']) && isset($_GET['dob']) && isset($_GET['id'])){
            $id = $_GET['id'];
            $firstName = $_GET['firstName'];
            $lastName = $_GET['lastName'];
            $dob = $_GET['dob'];

            $sql = "UPDATE `evacuee` SET `surname`= :lastName ,`given_name`= :firstName,`date_of_birth`= :dob, WHERE id = :id";
            $dbconn = getConnection();
            $stmt = $dbconn->prepare($sql);
            $stmt->execute(array(":id" => $id, ":lastName" => $lastName, ":firstName" => $firstName, ":dob" => $dob));
        }

    }
}
function getEvacTables($mode){
    $dbconn = getConnection();
    $sql = "select evacuee_id, given_name, surname, date_of_birth, sex from evacuee";
    $stmt = $dbconn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if($mode == "regular"){
        foreach ($result as $record){
            $evacueeId = $record['evacuee_id'];
            $givenName = $record['given_name'];
            $surname = $record['surname'];
            $dateOfBirth = $record['date_of_birth'];
            $sex = $record['sex'];
            echo "<tr><td>$evacueeId</td><td>$givenName</td><td>$surname</td><td>$dateOfBirth</td><td>$sex</td></tr>";
        }
    }elseif($mode == "update"){
        foreach ($result as $record){
            $evacueeId = $record['evacuee_id'];
            $givenName = $record['given_name'];
            $surname = $record['surname'];
            $dateOfBirth = $record['date_of_birth'];
            $sex = $record['sex'];
            echo "<tr>
                <td class='id'>$evacueeId</td><td class='givenName'>$givenName</td>
                <td class='surname'>$surname</td> <td class='dob'>$dateOfBirth</td><td>
                <button type='button' class='btn btn-default update_button' aria-label='Left Align'>
                <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
                </button>
                <button type='button' class='btn btn-default remove_button'  aria-label='Left Align'>
                <span class='glyphicon glyphicon-minus' aria-hidden='true'></span>
                </button>
            </td></tr>";
        }

    }

}


function getLatLong(){
    require "mysqlConfig.php";
    $dbConn2 = getConnection();
    $sql = "SELECT ID,airport,latitude,longitude FROM airports";
    $stmt = $dbConn2->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $records = json_encode(utf8ize($result));
    echo $records;
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




