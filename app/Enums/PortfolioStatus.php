<?php

namespace App\Enums;

enum PortfolioStatus: string
{
    case Live = 'live';
    case Beta = 'beta';
    case InDevelopment = 'in-development';
    case Archived = 'archived';

    public function label(): string
    {
        return __('messages.portfolio.status.'.$this->value);
    }

    /**
     * Whether the product can be visited by the public right now.
     */
    public function isPubliclyAvailable(): bool
    {
        return in_array($this, [self::Live, self::Beta], true);
    }

    /**
     * @return array<string, string>
     */
    public static function options(): array
    {
        $options = [];

        foreach (self::cases() as $status) {
            $options[$status->value] = $status->label();
        }

        return $options;
    }
}
