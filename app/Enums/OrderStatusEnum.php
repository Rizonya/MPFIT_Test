<?php

namespace App\Enums;

enum OrderStatusEnum: string
{
    case New = 'Новый';
    case Done = 'Выполнен';

    public function label(): string
    {
        return match($this) {
            self::New => 'Принят',
            self::Done => 'Выполнен',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
