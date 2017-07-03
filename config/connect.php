<?php
/**
 * Created by PhpStorm.
 * User: visalsam
 * Date: 28/06/2017
 * Time: 15:37
 */

try
{
    $dbo = new PDO('mysql:host=localhost;dbname=covfefe;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

?>
