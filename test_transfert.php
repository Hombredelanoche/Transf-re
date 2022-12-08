<?php

require_once('./transfert.php');

/**
 *   Régle métier : Transférer de l’argent entre 2 comptes :
 * 
 *   Si compte 1 à 1000€ et transfère 250euros vers compte 2 alors compte 1 à = 750€
 *   Si compte 1 à moins de 750€ alors ERREUR
 *   Si compte 2 valeur inférieur à 250 alors ERREUR
 *   Si compte 2 reçoit 250€ de compte 1 alors compte 1 = 750€
 *   Si montant du transfère entre compte 1 et 2 n’est pas égale à 250 alors ERREUR
 */

function test_transfert_amont(): bool
{
    $feed = 250;
    $feedAccount = [];
    $debitAccount = transfertAmont([1000], $feedAccount);

    if (array_sum($debitAccount) - $feed) {
        return array_push($feedAccount, $feed);
        $test = true;
    } else {
        $test = false;
    }

    if (array_sum($feedAccount) == 250) {
        $test2 = true;
    } else {
        $test2 = false;
    }

    if (array_sum($feedAccount) == 1000 && array_sum($feedAccount) == 0) {
        $test3 = false;
    } else {
        $test3 = true;
    }

    if (count($feedAccount) == 0) {
        $test4 = false;
    } else {
        $test4 = true;
    }

    if ($feed !== 250) {
        $test5 = false;
    } else {
        $test5 = true;
    }

    return $test && $test2 && $test3 && $test4 && $test5;
}

echo test_transfert_amont();
