<?php

function bonjour($nom) {
    $nom = readline("Veuillez entrer votre nom : ");
    while (empty($nom)) {
        $nom = readline("Veuillez entrer votre nom svp : ");
    }
    return "Bonjour " . $nom . "\n" . "Comment allez-vous ?";
}

echo bonjour($nom);