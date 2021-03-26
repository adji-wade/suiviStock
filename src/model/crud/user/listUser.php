<?php
// list_products.php

require_once ".././../bootstrap.php";

$userRepository = $entityManager->getRepository('User');
$users = $userRepository->findAll();

//foreach ($users as $u) {
   // echo sprintf("-%s\n", $u->getNom());
    //echo sprintf("-%s\n", $u->getPrenom());

//}