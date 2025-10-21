<?php
$tableauValeurs=[true,"texte",10,25.369,["valeur1","valeur2"]];

foreach($tableauValeurs as $key => $value){
    
    echo "{$key} => {$value}";
    print_r($tableauValeurs);

}
?>