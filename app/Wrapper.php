<?php

namespace App;

class Wrapper {
    
    protected $wrap;

    //Passes tests 1
    /* function wrap($text, $lineLength) {
        if (strlen($text) > $lineLength)
            return substr ($text, 0, $lineLength) . "\n" . substr ($text, $lineLength);
        return $text;
    } */
    
    //Passes tests 1-2
    /* function wrap($text, $lineLength) {
        if (strlen($text) > $lineLength)
            return substr ($text, 0, $lineLength) . "\n" . $this->wrap(substr($text, $lineLength), $lineLength);
        return $text;
    } */
    
    //Passes tests 1-3
   /*  function wrap($text, $lineLength) {
        if (substr($text, $lineLength - 1, 1) == ' ')
            return substr ($text, 0, strpos($text, ' ')) . "\n" . $this->wrap(substr($text, strpos($text, ' ') + 1), $lineLength);
        if (strlen($text) > $lineLength)
            return substr ($text, 0, $lineLength) . "\n" . $this->wrap(substr($text, $lineLength), $lineLength);
        return $text;
    } */
    
    //Passes tests 1-4
    /* function wrap($text, $lineLength) {
        if (strlen($text) > $lineLength) {
            if (strpos(substr($text, 0, $lineLength), ' ') != 0)
                return substr ($text, 0, strpos($text, ' ')) . "\n" . $this->wrap(substr($text, strpos($text, ' ') + 1), $lineLength);
            return substr ($text, 0, $lineLength) . "\n" . $this->wrap(substr($text, $lineLength), $lineLength);
        }
        return $text;
    } */
    
    //Passes tests 1-5
    /* function wrap($text, $lineLength) {
        if (strlen($text) <= $lineLength)
            return $text;
        if (strpos(substr($text, 0, $lineLength), ' ') != 0)
            return substr ($text, 0, strpos($text, ' ')) . "\n" . $this->wrap(substr($text, strpos($text, ' ') + 1), $lineLength);
        return substr ($text, 0, $lineLength) . "\n" . $this->wrap(substr($text, $lineLength), $lineLength);
    } */

    //Passes tests 1-7
    /*function wrap($text, $lineLength) {
        if (strlen($text) <= $lineLength)
            return $text;
        if (strpos(substr($text, 0, $lineLength), ' ') != 0)
            return substr ($text, 0, strrpos($text, ' ')) . "\n" . $this->wrap(substr($text, strrpos($text, ' ') + 1), $lineLength);
        return substr ($text, 0, $lineLength) . "\n" . $this->wrap(substr($text, $lineLength), $lineLength);
    }*/

    //Passes all tests 1-8
    public function wrap($text, $lineLength) {
        $text = trim($text);
        if (strlen($text) <= $lineLength)
            return $text;
        if (strpos(substr($text, 0, $lineLength), ' ') != 0)
            return substr ($text, 0, strrpos($text, ' ')) . "\n" . $this->wrap(substr($text, strrpos($text, ' ') + 1), $lineLength);
        return substr ($text, 0, $lineLength) . "\n" . $this->wrap(substr($text, $lineLength), $lineLength);
    }

}

