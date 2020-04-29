<?php

// la syntaxe d'un cookie simple:
// setcookie(nomCookie, valeurCooke, dateExpiration en secondes)

// la syntaxe d'un cookie complete:
// setcookie(nomCookie, valeurCooke, dateExpiration en secondes, chemin, domain, securisé)

// pour modifier un cookie: 
// il suffit de faire un setcookie avec les nouvelles valeurs.

// pour effacer un cookie:
// il suffit de faire un setcookie avec une date d'expiration  dans le passé 
// par exemple time()-1;

// pour verifier l'existence d'un cookie: par ex 'nom'
// tester aves isset($_COOKIE['nom']) ou l'operateur '??' en PHP 7