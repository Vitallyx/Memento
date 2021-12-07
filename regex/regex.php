<?php

$password = 'azerty1234';

$length = strlen($password) > 8;

$regexMajuscule = "/^[A-Z]$/"; // Regex pour avoir au moins une majuscule

$isMajOk = preg_match("/^[A-Z]{1,}$/", $password);

$isSpecialChars = preg_match("/[\W]/", $password); // vérifier qu'il y a des car spéciaux

$isNumber = preg_match("/[0-9]/", $password); // Au moins un chiffre

$isMin = preg_match("/[a-z]/", $password); // au moins une minuscule

if ($length && $isMajOk) {
    echo 'Mot de passe valide';
} else {
    echo 'Mot de passe "<strong>INVALIDE</strong>"';
};

/*  
Structure :

^ Début du regex
$ Fin du regex
[] Elements (plage de caractères) = Au moins 1
() Ensemble qui va être tester

a{x} Exactement x nombre de caractères de a
a{x,} x ou plus que a 
a{x,x} Entre x et x de a

Les classes :

[A-Z] Au moins 1 Majuscule
[a-z] Minuscule
[0-9] Chiffre
[^abc] Tous les caractères sauf a, b ou c
[abc] 1 caractère parmi a,b ou c

\D Tous les caractères hors chiffre \d Tous les chiffres
\W Tous les caractères non alphanumérique - \w  Tous les caractères alphanumérique
\S Tous les non séparateur - \s N’importe quel séparateur (espace, tabulation, nouvelle ligne...)
\V Tous les espaces verticaux - \v Tous les non espaces verticaux
\H Tous les espaces horizontaux - \h Tous les non espaces horizontaux
\n Saut de ligne

\A Début de la chaine
\z Fin de la chaine


Quantificateur :

? Facultative peut apparaître 0 ou 1 fois - ? revient à écrire {0,1}
+ Obligatoire peut apparaître 1 ou plusieurs fois - + revient à écrire {1,}
* Facultative peut apparaître 0 ou plusieurs fois - * revient à écrire {0,}
a-b Tous les caractères dans la "tranché" de a et b 


: if // Suivi d'un...
! not // Pas suivi d'un...
| ou

?! Not
?: Précedent
?=  Créer un nouveau ensemble 

Exemple de Regex

"/[A-Z]$/" Doit se terminer par une Majuscule

"/[^test]$/" Tous caractères sauf test
"/[^t]$/" Tous caractères sauf t

"/[test]$/" Tous caractères test

"/[A-Z]$/"
"/[A-Z]$/"




*/