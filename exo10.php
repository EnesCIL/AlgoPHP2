<?php
$phrase = "Mon texte en paramètre";

function convertirMajRouge($texte){
    $texteMajuscule = mb_strtoupper($texte);
    return
    '<span style="color: red;">' . $texteMajuscule . '</span>';
}
echo convertirMajRouge($phrase);



$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "Usa" => "Washington",
    "Italie" => "Rome",
    "Espagne" => "madrid"
];
function afficherTableHTML(array $tableau) : string { 
    asort($tableau);
    $result = "<table border>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitales</th>
                        <th>Lien wiki</th>
                    </tr>
                </thead>";
    foreach ($tableau as $pays => $ville ) {
    $url = "https://fr.wikipedia.org/wiki/" .urlencode($ville);
    $result .= "<tbody>
                    <tr>
                        <td>".strtoupper($pays)."</td>
                        <td>$ville</td>
                        <td> <a href='$url' target='_blank'>Lien</a> </td>
                    </tr>";
    } $result .= "</tbody>
    </table>";
    return $result;
}
echo afficherTableHTML($capitales);


$nomsInput = ["Nom","Prénom","Ville"];

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

echo alimenterListeDeroulante($elements);


$elements = [
    "Choix 1" => "false",
    "Choix 2" => "true",
    "Choix 3" => "false",
];

function genererCheckbox(array $elements): string {
    $formulaire = "<form>";

    foreach ($elements as $choix => $check) {
        $checked = ($check === "true") ? "checked" : "";

        $formulaire .= "<label>";
        $formulaire .= "<input type='checkbox' name='" . htmlspecialchars($choix) . "' $checked> " . htmlspecialchars($choix);
        $formulaire .= "</label><br>";
    }

    $formulaire .= "</form>";

    return $formulaire;
}

echo genererCheckbox($elements);


$url = "http://my.mobirise.com/data/userpic/764.jpg";

function repetImage(string $url, int $nb) : string {
    $affichage = "<div style='display: flex; gap: 10px;'>";

    for ($i = 0; $i < $nb; $i++) {
        $affichage .= "<img src='" . htmlspecialchars($url) . "' alt='image' width='150'/>";
    }

    $affichage .= "</div>";
    return $affichage;
}

echo repetImage($url, 4);


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
   
