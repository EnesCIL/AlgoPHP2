<?php

$nomsRadio = ["Masculin", "Féminin", "Autre"];

function afficherRadio(array $valeurs) : string {
    $formulaire = "<form>";

    foreach ($valeurs as $valeur) {
        $formulaire .= "<label>";
        $formulaire .= "<input type='radio' name='genre' value='" . htmlspecialchars($valeur) . "'> " . htmlspecialchars($valeur);
        $formulaire .= "</label><br>";
    }

    $formulaire .= "</form>";

    return $formulaire;
}

echo afficherRadio($nomsRadio);
?>
