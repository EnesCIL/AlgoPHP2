<?php
$elements = ["Monsieur", "Madame", "Mademoiselle"];

function alimenterListeDeroulante(array $listes) : string {
    $formulaire = "<form>";
    $formulaire .= "<select name='civilite' id='civilite'>";

    foreach ($listes as $liste) {
        $formulaire .= "<option value='$liste'>$liste</option>";
    }

    $formulaire .= "</select>";
    $formulaire .= "</form>";

    return $formulaire;
}

echo alimenterListeDeroulante($elements);
?>

