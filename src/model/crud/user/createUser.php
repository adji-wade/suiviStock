<?php
require_once "../../../bootstrap.php";

//$newProductName = $argv[1];

$user = new User();
$user->setId(null);
$user->setNom($nom);
$user->setPrenom($prenom);
$user->setEmail($email);
$user->setPassword($password);
$user->setEtat($etat);

$entityManager->persist($user);
$entityManager->flush();
