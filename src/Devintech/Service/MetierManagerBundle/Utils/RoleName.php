<?php

namespace App\Devintech\Service\MetierManagerBundle\Utils;

/**
 * Class RoleName
 * Classe qui contient les noms constante des rôles utilisateur
 */
class RoleName
{
    // Nom rôle
    const ROLE_SUPER_ADMINISTRATEUR = 'ROLE_SUPERADMIN';
    const ROLE_ADMINISTRATEUR = 'ROLE_ADMIN';
    const ROLE_TEAM = 'ROLE_TEAM';

    // Identifiant rôle
    const ID_ROLE_SUPERADMIN = 1;
    const ID_ROLE_ADMIN = 2;
    const ID_ROLE_TEAM = 3;

    static $ROLE_TYPE = array(
        'Admin' => 'ROLE_ADMIN',
        'Superadmin' => 'ROLE_SUPERADMIN',
        'Team' => 'ROLE_TEAM',
    );
}