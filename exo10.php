<?php

$nomsInput = ["Nom","Prénom","Ville","adresse e-mail","sexe"];

function afficherInput(array $champs) : string {
    $formulaire = "<form>";

    foreach ($champs as $champ) {
       $formulaire .= "<label> " .$champ.  "</label><br>";
       $formulaire .= "<input name =" .$champ.  "/></p>";
    }

    
    $formulaire .= "</form>";

    return $formulaire;
}
echo afficherInput($nomsInput);

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

$forma = ["Développer Logiciel", "Designer web","Integrateur","Chef de projet"];

function formation(array $listes) : string {
    $formulaire = "<form>";
    $formulaire .= "<select name='nom' id='prenom'>";
    foreach ($listes as $liste) {
        $formulaire .= "<option value='$liste'>$liste</option>";
    }

    $formulaire .= "</select><br>";
    $formulaire .= "<button type='submit'>Valider</button>";
    $formulaire .= "</form>";

    return $formulaire;
}

echo formation($forma);

?>
   
