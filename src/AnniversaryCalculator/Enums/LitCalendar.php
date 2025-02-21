<?php

namespace LiturgicalCalendar\AnniversaryCalculator\Enums;

class LitCalendar
{
    public const UNIVERSAL = "universal";
    public const NATIONAL  = "national";
    public const DIOCESAN  = "diocesan";
    public const WIDE_AREA = "wide_area";
    public const NON_LITURGICAL_EVENT = "non_liturgical_event";
    private array $GTXT;

    public static array $values = [
        "universal", "national", "diocesan", "wide_area", "non_liturgical_event"
    ];

    public function __construct()
    {
        $this->GTXT = [
            self::UNIVERSAL         => strtoupper(_("universal")),
            self::NATIONAL          => strtoupper(_("national")),
            self::DIOCESAN          => strtoupper(_("diocesan")),
            self::WIDE_AREA         => strtoupper(_("wide area")),
            self::NON_LITURGICAL_EVENT => strtoupper(_("non liturgical event"))
        ];
    }

    public static function isValid(string $value)
    {
        return in_array($value, self::$values);
    }

    public function i18n(string $value): string
    {
        if (self::isValid($value)) {
            return $this->GTXT[ $value ];
        }
        return $value;
    }
}
