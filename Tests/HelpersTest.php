<?php

namespace Wa72\HtmlPageDom\Tests;

use PHPUnit\Framework\TestCase;
use Wa72\HtmlPageDom\Helpers;

class HelpersTest extends TestCase
{
    public function testCssStringToArray()
    {
        $this->assertEquals([
            'font-size' => '15px',
            'font-weight' => 'bold',
            'font-color' => 'black'
        ], Helpers::cssStringToArray('invalid_css_string;font-size: 15px;font-weight: bold;font-color: black;'));
    }

    public function testCssArrayToString()
    {
        $this->assertEquals('font-size: 15px;font-weight: bold;font-color: black;', Helpers::cssArrayToString([
            'font-size' => '15px',
            'font-weight' => 'bold',
            'font-color' => 'black'
        ]));
    }
}
