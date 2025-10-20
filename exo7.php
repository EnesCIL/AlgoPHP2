<?php



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

?>

 