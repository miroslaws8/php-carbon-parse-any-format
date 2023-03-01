# Parse any date formats


How to install:

```
composer require itsimiro/php-carbon-parse-any-format 
```


How to use:

```php
    $dateParser = new \Itsimiro\PhpCarbonParseAnyFormat\DateParser();

    $dateParser->parseSafety('10/08/2023')->format('Y-m-d'); // output: 2023-08-10 
```