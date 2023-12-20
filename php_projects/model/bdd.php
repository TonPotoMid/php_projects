<?php
$host = '51.158.59.186:14301';
$db   = 'Hd';
$user = 'phppex';
$pass = 'Supermotdepasse!42';
class Bdd
{
    public static function connexion()
    {
        try {
            return new PDO("mysql:host=localhost;prot=3306;dbname=news", "root", "");
        } catch (Exception $e) {
            return $e->getMessage();

        }
    }

}

$bdd = Bdd::connexion();