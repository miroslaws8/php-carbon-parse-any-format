<?php

use Faker\Generator;
use Itsimiro\PhpCarbonParseAnyFormat\DateParser;
use PHPUnit\Framework\TestCase;

class DateParserTest extends TestCase
{
    private Generator $faker;

    protected function setUp(): void
    {
        parent::setUp();
        $this->faker = Faker\Factory::create();
    }

    public function testParseSafety(): void
    {
        $expectedDate = $this->faker->dateTime();

        $dateParser = new DateParser();

        $result = $dateParser->parseSafety($expectedDate->format('m/d/Y'));

        $this->assertEquals($expectedDate->format('Y-m-d'), $result->format('Y-m-d'));
    }
}