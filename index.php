<?php

use Entity\Doctor;

require_once "bootstrap.php";

// Controller

// Appel le model (Doctrine)
$doctors = $entityManager->getRepository(Doctor::class)->findAll();

// Envoyer les données à la vue (Twig)
echo $twig->render('index.html.twig', ['doctors' => $doctors]);