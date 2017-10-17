<?php

class BrowserDefaultLanguageTest extends PHPUnit_Framework_TestCase
{

    public function testParseDefaultLanguage()
    {
        $this->assertEquals("de", parseDefaultLanguage("de,en;q=0.8,de-DE;q=0.6,en-US;q=0.4"));
        $this->assertEquals("fr-ch", parseDefaultLanguage("fr-CH, fr;q=0.9, en;q=0.8, de;q=0.7, *;q=0.5"));
    }
}