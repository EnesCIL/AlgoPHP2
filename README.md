💻 **Exercices de Formation – PHP (Partie 2 : Fonctions & Génération HTML)**
📝 **Description**

**Cette seconde partie des exercices PHP permet de pratiquer :**

- la création de fonctions personnalisées

- la manipulation de chaînes

- la génération de HTML dynamique avec PHP

- le travail sur les tableaux (simples et associatifs)

- l’utilisation d’objets comme DateTime

- la validation de données (email, valeurs diverses)

- la construction d’éléments de formulaire (input, radio, checkbox, select…)

- Les objectifs sont d’apprendre à générer dynamiquement du contenu HTML grâce à PHP, tout en apprenant les fonctions nécessaires à la manipulation de données.

✅ **Notions PHP utilisées dans la partie 2**

🔹 **1. Fonctions personnalisées**

**Exemples :**

- convertirMajRouge($texte)

- afficherTableHTML($capitales)

- afficherInput($nomsInput)

- alimenterListeDeroulante()

- genererCheckbox()

- repetImage()

- afficherRadio()

- formation()

- formaterDateFr()

**Concepts :**

✔ Création de fonctions

✔ Passage de paramètres typés

✔ Retour de chaîne HTML (string)

✔ Génération dynamique de contenu

🔹**2. Manipulation de chaînes**

**Fonctions utilisées :**

mb_strtoupper() → mettre en majuscules (fonction multibyte)

strtoupper() / ucfirst() → mise en forme

urlencode() → encoder une URL

**Concepts :**

✔ Mise en forme du texte

✔ Transformation en majuscule

✔ Sécurisation des URL pour les liens

🔹 **3. Génération de tableaux HTML**

**Utilisation des structures :**

- construction d’un <table> avec <thead>, <tbody>, <tr>, <td>

- ajout d’une colonne contenant un lien Wikipédia

- tri du tableau avec :

   -ksort() → tri par clé

   -asort() → tri par valeur

**Concepts :**

✔ Tableaux associatifs (pays → capitale)

✔ Tri automatique

✔ Construction dynamique de lignes de tableau

✔ Ajout de liens hypertexte (<a href="">)

🔹 **4. Formulaires générés en PHP**

**Types d’éléments générés :**

- Input texte (<input type="text">)

- Liste déroulante (<select><option>)

- Checkbox (<input type="checkbox">)

- Boutons radio (<input type="radio">)

- Formulaire complet avec bouton

**Concepts :**

✔ Génération dynamique d’un formulaire

✔ Parcours de tableau pour créer des champs

✔ Utilisation de htmlspecialchars() pour sécuriser les valeurs affichées

✔ Construction de select, radio, checkbox

🔹 **5. Boucles**

**Boucles utilisées :**

- foreach pour parcourir des tableaux

- for pour répéter l’affichage d’images (exercice repetImage)

**Concepts :**

✔ Parcours d’éléments

✔ Génération répétée d’éléments HTML

🔹 **6. Manipulation d’objets DateTime**

**Fonctions et objets utilisés :**

- new DateTime()

- new DateTimeZone()

- date_default_timezone_set()

- IntlDateFormatter::formatObject() → formatage localisé

**Concepts :**

✔ Création d’objet DateTime

✔ Gestion du fuseau horaire

✔ Formatage de dates en français

✔ Utilisation de l’extension intl

🔹 **7. Validation et filtrage de données**

**Exemples :**

- filter_var($email, FILTER_VALIDATE_EMAIL)

**Concepts :**

✔ Validation d’adresse email

✔ Vérification de données utilisateur

🔹**8. Affichage de valeurs variées (debug)**

**Utilisation de :**

- var_dump() → analyse du type et du contenu

**Concepts :**

✔ Inspection de valeurs de types différents

✔ Tableaux, boolean, string, float, integer

🎯 **Objectifs pédagogiques**

✔ Savoir créer des fonctions PHP structurées

✔ Savoir générer du code HTML dynamiquement

✔ Renforcer l’utilisation des tableaux et de leur tri

✔ Maîtriser la manipulation de chaînes

✔ Produire des formulaires complets automatiquement

✔ Manipuler les dates avec l’objet DateTime

✔ Effectuer des validations de données

✔ Développer une logique algorithmique plus avancée
