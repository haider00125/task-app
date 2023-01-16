<?php

namespace App\Enums;

enum Priorities: int
{
    case Low = 1;
    case Medium = 2;
    case High = 3;

    public function name(): string
    {
        return match($this)
        {
            self::Low => __('Low'),
            self::Medium => __('Medium'),
            self::High => __('High'),
        };
    }
}
