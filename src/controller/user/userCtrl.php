<?php

     if(isset($_POST['btnaddU'])) {
        
      extract($_POST);
      require_once "../../model/crud/user/createUser.php";
      header("location:http://localhost/mesProjets/suivistock/src/view/listesUsers.php");
     }
?>