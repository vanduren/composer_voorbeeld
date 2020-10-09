<?php

use RandomQuotes\RandomQuotes;

include('./src/RandomQuotes.php');
$myQuote = new RandomQuotes;
print_r($myQuote->generate());
