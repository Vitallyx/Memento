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
Made by BMuller-dev alias @Valwyns

Veuillez lire les notes pour mieux comprendre la structure du mémento 

 Note : 
► Pour rechercher un élément en particulier : ctrl + f et écrire # + le Métacaractère voulu ex : #^
► Dans les exemples les () viennent indiquer ce qui est sélectionné

 Site utile : 
► https://regex101.com - Testeur de regex en ligne

 Structure :
"/^ REGEX $/"


 ^ Début du regex
 $ Fin du regex
 [] Établit une correspondance avec tout ce qui se trouve à l’intérieur des crochets.
 () Ensemble qui va être tester




 Les Métacaractère :

╔══════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════
║► Tag : #^
╠══════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════
║ Inséré dans une classe, le caractère ^ indique une exception pour la recherche 
║   [^n]  tout caractère, sauf n  ←−→ (fzaff)n(gez)n(fez)
║
║ En dehors d'une classe elle établit une correspondance avec des caractères au début d’une chaîne de caractères 
║   ^https  commence par https ←−→ (https):test.com ; (https)fzafaz ; www.test.com
║
║Remarque : 
║► Seulement ^ est actifs dans une classe, les autres métacaractères ne sont considérés que comme simples caractères
║
╠══════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════
║► Tag : #$
╠══════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════
║ Établit une correspondance avec des caractères à la fin d’une chaîne de caractères
║   abc$  termine par abc ←−→ fzaf(abc) ; fzafabh
║   [xyz]$  termine par x, y ou z ←−→ faghex(z) ; fafzae(y) ; gezgzh 
║
╠══════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════
║► Tag : #\S, #\s, #\w, #\W, #\D, #\d, 
╠══════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════
║\S	Correspond à tous les caractères qui ne sont pas des caractères d’espacement
║   Va\Slwyns  Va suivi de tous caractères hors caractères d’espacement ←−→ (VaXlwyns)fz ; fza(Va1lwyns)s ; Va lwyns
║
║\s Correspond à tout caractère d’espacement (espace, tabulation, saut de ligne ou saut de page)
║   Valwyns\sdev  Valwyns suivi d'un caractère d’espacement puis dev ←−→ Valwyns dev ; (Valwyns[tab]dev)dz ; Valwyns<2 espaces>dev ; Valwynsdev ; Valwzyns dev
║
║\w Correspond à n’importe quel caractère alphanumérique
║   \w\w\w  sélectionne par bloc de 3 caractères alphanumérique ←−→ (daz) ; (gez)(gze) ; (Ffz)1D ici Ffz est sélectionné mais pas 1D car il n'y a que 2 caractères
║   ab\w\w\w  ab suivi de 3 caractères alphanumérique ←−→ faf(abfzd)htr
║
║\W	Correspond à n’importe quel caractère non alphanumérique
║   valwyns\W  valwyns suivi de n’importe quel caractère non alphanumérique ←−→ (valwyns!) ; (valwyns?)
║
║\d	Correspond à tout chiffre
║   abc\d\d  abc suivi de 2 chiffres ←−→ (abc80) ; (abc90) ; abc4z ; aev52
║
║\D	Correspond à tout caractère qui n’est pas un chiffre
║   abc\D  abc suivi d'un caractère qui n’est pas un chiffre ←−→ (abc!) ; (abc-). ; (abce). ; abfaabc1e
║
║\a	Correspond à tout caractère alphabétique, majuscule ou minuscule
║   n\arz n suivi d'un caractère alphabétique puis de rz ←−→ (nWrz)dz ; (nfrz)fs ; (narz).
║
║\b	Définit une limite de mot
║
║\B	Définit une non-limite de mot
║
║
║
║
║
║
║
╚══════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════
 
 Exemple de Regex :

 [net$] Correspond à n’importe lequel des caractères n, e, t ou $ ($ est un métacaractère, mais dans une classe de caractères, il ne correspond qu’à $).

 [A-Z]$ Doit se terminer par une Majuscule

 [^test]$ Tous caractères sauf t,e,s,t a la fin

 [test]$ Correspond à n’importe lequel des caractères t, e, s, t a la fin

 net[wrx] Correspond à netw, netr et netx, mais pas à netz

 net[a-z] correspond à neta, netw et netf etc, mais pas à net1

 [abc].$ termine par a, b ou c suivi de n'importe quels caractères ←−→ fzafb1, fzafbh, jjytcg

 ^Val.*Dev$ commence par Val, peut avoir 0 ou plusieurs caractères (n'importe lesquels), doit se terminer par Dev ←−→ Valfza44fas5Dev

 [^a]$ Ne doit pas se terminer par a ←−→ fzafb(1) ; feD1 zan



 A trier

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


 a{x} Exactement x nombre de caractères de a

 a{x,} x ou plus que a

 a{x,x} Entre x et x de a



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





 */