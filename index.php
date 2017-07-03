<?php
/**
 * Created by PhpStorm.
 * User: visalsam
 * Date: 28/06/2017
 * Time: 15:46
 */

//Start connecting to database
include('config/connect.php');

//get Functions for getting datas
require_once('db/db.php');

//get top category
$list_top_category = getTopCategory($dbo);

//get product category
$list_product_category = getProductCategory($dbo);

//get brands
$list_brands = getBrands($dbo);
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
  //Into document.ready
$(function(){
  //Ajax loads product category from bdd
  $("button").click(function() {
    $.ajax({
      url: "ajax_request/ajax_get_product.php",
      data: "id=" + this.id.split("_")[1],
      type: "GET",
      dataType: 'json',
      success: function(data)
      {
        for(var i=0; i<=2; i++) {
          $('#product_container').append('<button id=product_' + i +'>' + data[i]['name'] + '</button>')
        };
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) {
        alert("Status: " + textStatus);
        alert("Error: " + errorThrown);
      }
    })
  });
});

</script>

<div style = "text-align:center; margin-top:50px;">
    What do you need ?
</div>

<div style="text-align:center; margin-top:20px;">
    <?php foreach ($list_top_category as $top):?>
        <button id="top_<?php echo $top['id']?>">
            <?php echo $top['name']?>
        </button>
    <?php endforeach;?>
</div>

<!-- Empty container for loading data from bdd-->
<div id="product_container" style="text-align:center; margin-top:20px;"></div>
<div id="brand_container" style="text-align:center; margin-top:20px;"></div>


