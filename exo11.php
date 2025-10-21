<?php
$laDate='2018-02-23';
function formaterDateFr($dateTimeObj) : string{
    
date_default_timezone_set( 'Europe/Paris' ); // prend la la date de la zone de notre server

// Créer un objet DateTime
// Le paramètre « now » permet d'obtenir la date du jour, 
// Mais cela fonctionne avec une date reçue d'une base de données 
// Par exemple, remplacer « now » par « 2022-04-04 05:05:05 »
$dateTimeObj = new DateTime('now', new DateTimeZone('Europe/Paris'));

// les 3 paramètres sont[ DateTime object, ICU date scheme, string locale ]
return $dateFormatted = 
IntlDateFormatter::formatObject( 
  $dateTimeObj, 
  'eee d MMMM y ', 
  'fr' 
);
}

echo formaterDateFr($laDate);
?>