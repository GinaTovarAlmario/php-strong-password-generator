<?php
// funzione per generare password
    function generatePassword($num){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!£$%*/?_-+';
        $charactersLength = strlen($characters);
        $randomPassword = '';
        for ($i = 0; $i < $num; $i++) {
            $randomPassword .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomPassword;
    }
?>