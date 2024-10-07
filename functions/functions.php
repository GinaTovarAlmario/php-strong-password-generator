<?php
// funzione per generare password
    function generatePassword($num){
        $charactersAllowed = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!#$%&'()*+,-./:;=?@[\]^_{|}~";
        $charactersAllowedLength = strlen($charactersAllowed);
        $randomPassword = '';
        for ($i = 0; $i < $num; $i++) {
            $randomPassword .= $charactersAllowed[random_int(0, $charactersAllowedLength - 1)];
        }
        return $randomPassword;
    }
?>