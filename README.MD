# Let's TDD a Simple App in PHP
A simple PHP project to learn TDD

[My post in Medium about the code](https://medium.com/php-brasil/tdd-iniciando-com-tdd-no-php-934a0cc90e5b)


## Introduction
Your task is to build Class called Wrapper and its method called wrap.

## Task definition:
You have to implement all tasks to pass all tests.

## tasks:
*  implement testItShouldWrapAnEmptyString 
*  implement testDoesNotWrapAShorterThanMaxCharsWord
*  implement testItWrapsAWordSeveralTimesIfItsTooLong
*  implement testItWrapsTwoWordsWhenSpaceAtTheEndOfLine
*  implement testItWrapsTwoWordsWhenLineEndIsAfterFirstWord
*  implement testItWraps3WordsOn2Lines
*  implement testItWraps2WordsOn3Lines
*  implement testItWraps2WordsAtBoundry
*  create new class named Wrapper 

# Installation

``` git clone https://github.com/eduardofg87/lets-tdd-a-simple-app ```

``` cd lets-tdd-a-simple-app ```

``` composer install ```


### EXTRA: 
keep track of the history of encoded words in a local storage.

### Hints

Think about how to prevent invalid inputs from being passed to the algorithms.

### test
to run the tests run the command: ```./vendor/bin/phpunit ./tests/FirstTest```



### Misc

* [PHP Unit](https://phpunit.de/)
* [Let's TDD a simple App in PHP](https://code.tutsplus.com/tutorials/lets-tdd-a-simple-app-in-php--net-26186)
