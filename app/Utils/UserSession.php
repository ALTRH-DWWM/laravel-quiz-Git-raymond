<?php

namespace App\Utils;

use App\Models\User;

class UserSession
{
    // Constante contenant l'index du tableau de session
    const SESSION_INDEX_NAME = 'connectedUser';

    // Méthode permettant de connecter un utilisateur avec session
    public static function connect(User $user)
    {
        $_SESSION[self::SESSION_INDEX_NAME] = $user;
    }

    // Méthode permettant de déconnecter un utilisateur
    public static function disconnect()
    {
        if (self::isConnected()) {
            unset($_SESSION[self::SESSION_INDEX_NAME]);
        }
    }

    // Méthode permettant de savoir si le visiteur est connecté
    public static function isConnected(): bool
    {
        return !empty($_SESSION[self::SESSION_INDEX_NAME]);
    }

    // Méthode permettant de récupérer le model de l'utilisateur connecté
    public static function getUser(): User
    {
        if (self::isConnected()) {
            return $_SESSION[self::SESSION_INDEX_NAME];
        }
    }
}
