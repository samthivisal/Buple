<?php
/**
 * Created by PhpStorm.
 * User: visalsam
 * Date: 29/06/2017
 * Time: 11:09
 */

function getTopCategory($dbo)
{
    $reponse = $dbo->query('SELECT * FROM top_category');
    $resultats = $reponse->fetchAll();
    return $resultats;
}

function getProductCategory($dbo)
{
    $reponse = $dbo->query('SELECT * FROM product_category');
    $resultats = $reponse->fetchAll();
    return $resultats;
}

function getBrands($dbo)
{
    $reponse = $dbo->query('SELECT * FROM brand');
    $resultats = $reponse->fetchAll();
    return $resultats;
}
