<?php

$chaine="Bonjour";
$chaine = strtolower($chaine);
if ($chaine == strrev($chaine)) {
    echo "$chaine est un palindrome";
}else{
    echo "$chaine n'est un palindrome";
}