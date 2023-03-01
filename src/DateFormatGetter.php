<?php

namespace Itsimiro\PhpCarbonParseAnyFormat;

use Itsimiro\PhpCarbonParseAnyFormat\Contracts\FormatGetterInterface;

class DateFormatGetter implements FormatGetterInterface
{
    public function get(): array
    {
        return [
            'd/m/Y',
            'j/m/Y',
            'd/n/Y',
            'j/n/Y',
            'Y-m-d',
            'Y-m-d H:i',
            'Y-m-d H:i:s',
            'd M Y',
            'd M Y H:i',
            'd M Y H:i:s',
            'd F Y',
            'd F Y H:i',
            'd F Y H:i:s',
            'j M Y',
            'j M Y H:i',
            'j M Y H:i:s',
            'j F Y',
            'j F Y H:i',
            'j F Y H:i:s',
            'm/d/Y',
            'm/d/Y H:i',
            'm/d/Y H:i:s',
            'm/j/Y',
            'm/j/Y H:i',
            'm/j/Y H:i:s',
            'm/d/y',
            'm/d/y H:i',
            'm/d/y H:i:s',
            'm/j/y',
            'm/j/y H:i',
            'm/j/y H:i:s',
            'n/j/Y',
            'n/j/Y H:i',
            'n/j/Y G:i',
            'd.m.Y',
            'j.m.Y',
            'd.n.Y',
            'j.n.Y',
            'Y.m.d',
            'Y.m.j',
            'Y.n.d',
            'Y.n.j',
            'm-d-Y',
        ];
    }
}