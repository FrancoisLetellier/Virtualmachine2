<?php
/**
 * Created by PhpStorm.
 * User: topikana
 * Date: 06/03/17
 * Time: 11:28
 */

function getConnection()
{
    $user = "root";
    $password ="Letellier14760";
    $host = "localhost";
    $db = "user";
    $mysqli = new mysqli($host, $user, $password, $db);
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL :(" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        die();
    }
    return $mysqli;
}

/**
 * @param mysqli $mysqli
 * @param $sql
 * @param mixed
 */

function execSql($mysqli, $sql){
    if (!$result = $mysqli->query($sql)){
        echo "failed to run query: (" . $mysqli->errno . ") " . $mysqli->error;
        die();
    }
    return $result;
}