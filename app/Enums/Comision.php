<?php

namespace App\Enums;

enum Comision: int
{
    case Mantenimiento = 1;
    case Bodega        = 2;
    case Medios        = 3;

    public function label(): string
    {
        return match($this) {
            self::Mantenimiento => 'Mantenimiento',
            self::Bodega        => 'Bodega',
            self::Medios        => 'Medios',
        };
    }
}
