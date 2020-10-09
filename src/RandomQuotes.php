<?php

namespace RandomQuotes;

class RandomQuotes
{
    public function getRandomQuotes()
    {
        // lijst met quotes
        $quotes = file_get_contents(__DIR__ . '/../inc/quotes.json');
        // converteer JSON document naar een php array
        $quotes = json_decode($quotes, true);
        // pak een willekeurig index nummer
        $index = mt_rand(0, count($quotes));
        // geef de quote
        return $quotes[$index];
    }

    public function generate()
    {
        return $this->getRandomQuotes();
    }
}
