<?php

     if(isset($_POST['btnaddP'])) {
        
      extract($_POST);
      require_once "../../model/crud/produit/createProduct.php";
      header("location:http://localhost/mesProjets/suivistock/src/view/listesProduits.php");
     }
?>