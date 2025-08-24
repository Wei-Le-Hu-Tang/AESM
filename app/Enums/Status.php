<?php

namespace App\Enums;

enum Status: int
{
    case Active      = 1;
    case TmpExpelled = 2;
    case DefExpelled = 3;
    case NonGrato    = 4;

    public function label(): string
    {
        return match ($this) {
            self::Active      => 'Activo',
            self::TmpExpelled => 'Expulsado Temporalmente',
            self::DefExpelled => 'Expulsado Definitivamente',
            self::NonGrato    => 'Non Grato',
        };
    }
}