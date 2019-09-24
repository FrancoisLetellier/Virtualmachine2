<?php
/**
 * Created by PhpStorm.
 * User: topikana
 * Date: 03/07/17
 * Time: 09:41
 */

session_start();
if (!isset($_SESSION['count'])){
    $_SESSION['count'] = 1;
} else {
    $_SESSION['count']++;
}

echo "Visite : " . $_SESSION['count'];