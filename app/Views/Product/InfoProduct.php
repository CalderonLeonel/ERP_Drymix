<?php

use App\Models\ProductModel;

$productModel = new ProductModel();


$idProduct = $_GET["idProduct"];
$product = $productModel->InfoProduct($idProduct);

?>
<div class="modal-header">
  <h4 class="modal-title">Información de produc$product</h4>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">


  <div class="row">

    <div class="col-6">
      <table class="table">
        <tr>
          <th>Cod. Producto</th>
          <td>A</td>
        </tr>

        <tr>
          <th>Descripción</th>
          <td><?php echo $product["productName"];?></td>
        </tr>

        <tr>
          <th>Precio</th>
          <td><?php echo $product["precio_producto"];?></td>
        </tr>

        <tr>
          <th>Unidad de medida</th>
          <td><?php echo $product["unidad_medida"];?></td>
        </tr>

        <tr>
          <th>Unidad de medida SIN</th>
          <td><?php echo $product["unidad_medida_sin"];?></td>
        </tr>

        <tr>
          <th>Disponibilidad</th>
          <?php 
          if($product["disponible"]==1){
          ?>
          <td><span class="badge badge-success">Disponible</span></td>
          <?php
          }else{
          ?>
          <td><span class="badge badge-danger">No disponible</span></td>
          <?php
          }
          ?>

        </tr>

      </table>
    </div>
    <div class="col-6">
      <?php
      if($product["imagen_producto"] == ""){
        ?>
        <img src="assest/dist/img/productos/<?php echo $product["imagen_producto"];?>" alt="" width="300">
        <?php
        
      }else{
        ?>
        <img src="assest/dist/img/productos/producto_default.png" alt="" width="300">
        <?php
      }  
      ?>
    </div>

  </div>



</div>

