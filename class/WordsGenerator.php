<?php
require_once("config.php");
require_once(DOCUMENT_ROOT."class/Words17.php");
require_once(DOCUMENT_ROOT."class/Rd.php");
class WordsGenerator
{
    CONST REPEAT_WORD_1 = "goverment";
    CONST REPEAT_WORD_2 = "itqxbmp";
    CONST FIX_LETTERS = "xxxxx xxxxxxx xxxx xxxxxxxxx xxx xxxxx xxxxxxxx";
    private static $alphabets = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
    private static $words = array("take", "year", "less", "those", "think", "point", "should", "during", "though", "last", 
                "come", "part", "never", "water", "later", "before", "school", "toward", "know", "must", "went", "hands", 
                "house", "found", "turned", "course", "number", "free", "tell", "sure", "words", "whose", "night", "cannot", 
                "period", "became", "done", "body", "word", "human", "major", "money", "street", "rather", "always", "help", 
                "keep", "feet", "death", "study", "going", "reason", "church", "system", "find", "miss", "best", "known", "ground", 
                "least", "better", "called", "really", "left", "face", "mind", "given", "began", "sense", "social", "second", 
                "family", "days", "need", "four", "white", "thing", "large", "public", "things", "looked", "case", "past", "next", 
                "times", "heard", "shall", "result", "matter", "behind", "help", "give", "name", "power", "taken", "today", "making", 
                "become", "having", "kind", "room", "half", "whole", "light", "field", "seemed", "within", "change");

    public static function words17Generator(){
		shuffle(self::$words);
        $words = array_chunk(self::$words, 17);
        $generateWords = $words[0];
        $generateWords[17] = self::REPEAT_WORD_1;
        $generateWords[18] = self::REPEAT_WORD_2;
        return implode(" ", $generateWords);
    }
    
    public static function alphabetsGenerator($length){
		shuffle(self::$alphabets);
        $word = array_chunk(self::$alphabets, $length);
        $generateAlphabets = $word[0];
        return implode("", $generateAlphabets);
    }
    
    public static function fixLettersGenerator(){
        return self::FIX_LETTERS." ".self::REPEAT_WORD_1." ".self::REPEAT_WORD_2;
    }
    
    public static function colorWordsGenerator($conn, $uuid){
        $words17 = Words17::getById($conn, $uuid);
        $rdWords = Rd::getById($conn, $uuid);
        $conn = null;

        $words17 = array_slice($words17, 0, 17); // get rid of goverment and itqxbmp
        $rdWords = array_slice($rdWords, 0, 7);; // get rid of goverment and itqxbmp

        shuffle($words17);
        shuffle($rdWords);
        
        $generateColors = array($words17[0]["wording"], $words17[1]["wording"], 
                                $rdWords[0]["wording"], $rdWords[1]["wording"], 
                                self::REPEAT_WORD_1, self::REPEAT_WORD_2);

        return $generateColors;
    }
}
?>