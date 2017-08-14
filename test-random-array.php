<?php
$words = array("take", "year", "less", "those", "think", "point", "should", "during", "though", "last", 
"come", "part", "never", "water", "later", "before", "school", "toward", "know", "must", "went", "hands", 
"house", "found", "turned", "course", "number", "free", "tell", "sure", "words", "whose", "night", "cannot", 
"period", "became", "done", "body", "word", "human", "major", "money", "street", "rather", "always", "help", 
"keep", "feet", "death", "study", "going", "reason", "church", "system", "find", "miss", "best", "known", "ground", 
"least", "better", "called", "really", "left", "face", "mind", "given", "began", "sense", "social", "second", 
"family", "days", "need", "four", "white", "thing", "large", "public", "things", "looked", "case", "past", "next", 
"times", "heard", "shall", "result", "matter", "behind", "help", "give", "name", "power", "taken", "today", "making", 
"become", "having", "kind", "room", "half", "whole", "light", "field", "seemed", "within", "change");
shuffle($words);
print_r($words);
echo "<br/>";
$words = array_chunk($words, 17);
print_r($words);
echo "<br/>";
echo implode(" ", $words[0]);
?>