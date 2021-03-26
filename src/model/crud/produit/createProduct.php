<?php
 
 require_once "../../../bootstrap.php";
 require_once "../../model/crud/user/findUser.php";
 
 
 
 $produit = new Produit();
 $produit->setRef(null);
 $produit->setNom($nom);
 $produit->setQtStock($qteS);
 $produit->setId($user);
 $entityManager->persist($produit);
 $entityManager->flush();

?>