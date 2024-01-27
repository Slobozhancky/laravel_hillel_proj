<?php

namespace App\Enums;

enum Roles: string
{
    case ADMIN = 'admin';
    case CUSTOMER = 'customer';
    case MODERATOR = 'moderator';
}
