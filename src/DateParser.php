<?php

namespace Itsimiro\PhpCarbonParseAnyFormat;

use Carbon\Carbon;
use Carbon\Exceptions\InvalidFormatException;
use DateTimeInterface;
use DateTimeZone;
use Itsimiro\PhpCarbonParseAnyFormat\Contracts\FormatGetterInterface;

class DateParser
{
    private FormatGetterInterface $formatGetter;

    public function __construct(?FormatGetterInterface $formatGetter = null)
    {
        if (!$formatGetter) {
            $this->formatGetter = new DateFormatGetter();
        }
    }

    public function parseSafety(string|DateTimeInterface|null $date, DateTimeZone|string|null $tz = null): ?Carbon
    {
        $result = null;

        try {
            $result = Carbon::parse($date, $tz);
        } catch (InvalidFormatException) {
            Carbon::$strictModeEnabled = false;

            foreach ($this->formatGetter->get() as $format) {
                if ($result = Carbon::createFromFormat($format, $date, $tz)) {
                    break;
                }
            }
        }

        return $result;
    }
}