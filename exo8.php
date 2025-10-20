<?php

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

?>


 