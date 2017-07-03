<?php
/**
 * Created by PhpStorm.
 * User: visalsam
 * Date: 29/06/2017
 * Time: 15:45
 */

try
{
    $dbo = new PDO('mysql:host=localhost;dbname=covfefe;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

$query = $dbo->query('SELECT * FROM brand WHERE product_category_id = 1');
$results = $query->fetchAll();
echo(json_encode($results));