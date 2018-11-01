<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use App\Wrapper as Wrapper;
 
class WrapperTest extends TestCase {
 
    private $wrapper;
 
    function setUp() {
        $this->wrapper = new Wrapper();
    }

    //Test 1
    function testItShouldWrapAnEmptyString() {
        $this->assertEquals('', $this->wrapper->wrap('', 0));
    }
    
    //Test 2
    function testDoesNotWrapAShorterThanMaxCharsWord() {
        $wrapper = new Wrapper();
        $this->assertEquals('word', $wrapper->wrap('word', 5));
    }

    //Test 3
    function testItWrapsAWordSeveralTimesIfItsTooLong() {
        $textToBeParsed = 'averyverylongword';
        $maxLineLength = 5;
        $this->assertEquals("avery\nveryl\nongwo\nrd", $this->wrapper->wrap($textToBeParsed, $maxLineLength));
    }

    //Test 4
    function testItWrapsTwoWordsWhenSpaceAtTheEndOfLine() {
        $textToBeParsed = 'word word';
        $maxLineLength = 5;
        $this->assertEquals("word\nword", $this->wrapper->wrap($textToBeParsed, $maxLineLength));
    }

    //Test 5
    function testItWrapsTwoWordsWhenLineEndIsAfterFirstWord() {
        $textToBeParsed = 'word word';
        $maxLineLength = 7;
        $this->assertEquals("word\nword", $this->wrapper->wrap($textToBeParsed, $maxLineLength));
    }

    //Test 6
    function testItWraps3WordsOn2Lines() {
        $textToBeParsed = 'word word word';
        $maxLineLength = 12;
        $this->assertEquals("word word\nword", $this->wrapper->wrap($textToBeParsed, $maxLineLength));
    }

    //Test 7
    function testItWraps2WordsOn3Lines() {
        $textToBeParsed = 'word word';
        $maxLineLength = 3;
        $this->assertEquals("wor\nd\nwor\nd", $this->wrapper->wrap($textToBeParsed, $maxLineLength));
    }

    //Test 8
    function testItWraps2WordsAtBoundry() {
        $textToBeParsed = 'word word';
        $maxLineLength = 4;
        $this->assertEquals("word\nword", $this->wrapper->wrap($textToBeParsed, $maxLineLength));
    }
    
}