<?php
/**
 * Created by PhpStorm.
 * User: visalsam
 * Date: 29/06/2017
 * Time: 13:51
 */

try
{
    $dbo = new PDO('mysql:host=localhost;dbname=covfefe;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
if ((isset($_GET['id']))){
    $id_json = $_GET['id'];
    $id = json_decode($id_json);

    $query = $dbo->query('SELECT * FROM product_category WHERE id_top_category ='.$id);
    $results = $query->fetchAll();
    echo(json_encode($results));
}