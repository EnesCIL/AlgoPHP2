<h1>Exercice 1</h1>

</style>

<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de 
caractère passée en argument en majuscules et en rouge.
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;</p>


<?php
$phrase = "Mon texte en paramètre";

function convertirMajRouge($texte){
    $texteMajuscule = mb_strtoupper($texte);
    return
    '<span style="color: red;">' . $texteMajuscule . '</span>';
}
echo convertirMajRouge($phrase);
?>
   
