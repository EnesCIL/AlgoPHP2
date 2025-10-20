<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
précisant le nom des champs associés.
Exemple :
$nomsInput = ["Nom","Prénom","Ville"];
afficherInput($nomsInput);
<p>

<!-- <form action="" method="post">
   <label>Votre nom :</label>
   <input name="nom" id="nom" type="text" />

   <label>Votre âge :</label>
   <input name="age" id="age" type="number"/></p>

   <button type="submit">Valider</button>
</form> -->
<?php
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


?>
