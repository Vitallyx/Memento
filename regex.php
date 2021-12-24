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
}


/* 
Made by @Valwyns
► Pour rechercher un élément en particulier : ctrl + f et écrire # + le Métacaractère voulu ex : #^


 Structure :

 ^ Début du regex
 $ Fin du regex
 [] Établit une correspondance avec tout ce qui se trouve à l’intérieur des crochets.
 () Ensemble qui va être tester


 a{x} Exactement x nombre de caractères de a

 a{x,} x ou plus que a

 a{x,x} Entre x et x de a

╔══════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════
║► Tag : #^
╠══════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════
║ Inséré dans une classe, le caractère ^ indique une exception pour la recherche
║   [^n] correspond à tout caractère, sauf n
║
║ En dehours d'une classe elle établit une correspondance avec des caractères au début d’une chaîne de caractères
║   ^https correspond à https:test.com, mais pas à www.test.com
║
╠══════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════
║► Tag : #$
╠══════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════
║ Établit une correspondance avec des caractères à la fin d’une chaîne de caractères
║
║
║
║
║
╠══════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════
║► Tag : #\S, #\s, #\w
╠══════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════
║\S	Correspond à tous les caractères qui ne sont pas des caractères d’espacement
║   Va\Slwyns correspond à VaXlwyns et à Va1lwyns mais pas a Va lwyns
║\s Correspond à tout caractère d’espacement (espace, tabulation, saut de ligne ou saut de page)
║   Valwyns\sdev correspond à Valwyns dev et à Valwyns(tab)dev, mais pas à Valwyns<2 espaces>dev ni à Valwynsdev
║
║\w Correspond à n’importe quel caractère alphanumérique
║   \w\w\w correspond à daz, gez et FfzafD
║\W	Correspond à n’importe quel caractère non alphanumérique
║   valwyns\W correspond à valwyns! et valwyns?
║
╚══════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════


 \D Tous les caractères hors chiffre \d Tous les chiffres
 \W Tous les caractères non alphanumérique - \w Tous les caractères alphanumérique
 \S Tous les non séparateur - \s N’importe quel séparateur (espace, tabulation, nouvelle ligne...)
 \V Tous les espaces verticaux - \v Tous les non espaces verticaux
 \H Tous les espaces horizontaux - \h Tous les non espaces horizontaux
 \n Saut de ligne
 \A Début de la chaine
 \z Fin de la chaine

 
  [A-Z] Au moins 1 Majuscule

 [a-z] Minuscule

 [0-9] Chiffre

 [^abc] Tous les caractères sauf a, b ou c

 [abc] 1 caractère parmi a,b ou c



 Métacaractère :


 ? Facultative peut apparaître 0 ou 1 fois - ? revient à écrire {0,1}

 + Obligatoire peut apparaître 1 ou plusieurs fois - + revient à écrire {1,}

 * Facultative peut apparaître 0 ou plusieurs fois - * revient à écrire {0,}

 a-b Tous les caractères dans la "tranché" de a et b


 . Représente n’importe quel caractère






 * com$ correspond à www.Valwyns.com ou à télécom, mais pas à communication.



 : if 
  Suivi d'un...

 ! not 
  Pas suivi d'un...

 | ou


 ?! Not

 ?: Précedent

 ?= Créer un nouveau ensemble


 Exemple de Regex :


 [net$] Correspond à n’importe lequel des caractères n, e, t ou $ ($ est un métacaractère, mais dans une classe de caractères, il ne correspond qu’à $).

 [A-Z]$ Doit se terminer par une Majuscule

 [^test]$ Tous caractères sauf t,e,s,t a la fin

 [test]$ Correspond à n’importe lequel des caractères t, e, s, t a la fin

 net[wrx] Correspond à netw, netr et netx, mais pas à netz

 net[a-z] correspond à neta, netw et netf etc, mais pas à net1




║
║
║
║
║
║
║
║




 */