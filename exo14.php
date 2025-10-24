<?php
$lien = "elan@elan-formation.fr";

if (filter_var($lien, FILTER_VALIDATE_EMAIL)) {
    echo "Email address '$lien' is considered valid.\n";
} else {
    echo "Email address '$lien' is considered invalid.\n";
}
?>