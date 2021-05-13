<?php

class TwelveDays
{
    private $starter = 'On the %s day of Christmas my true love gave to me: ';

    private $dayLookUp = [
        1 => 'first',
        2 => 'second',
        3 => 'third',
        4 => 'fourth',
        5 => 'fifth',
        6 => 'sixth',
        7 => 'seventh',
        8 => 'eighth',
        9 => 'ninth',
        10 => 'tenth',
        11 => 'eleventh',
        12 => 'twelfth'
    ];

    private $presents = [
        1 => 'a partridge in a pear tree',
        2 => 'two turtle doves',
        3 => 'three French hens',
        4 => 'four calling birds',
        5 => 'five gold rings',
        6 => 'six geese a laying',
        7 => 'seven swans a swimming',
        8 => 'eight maids a milking',
        9 => 'nine ladies dancing',
        10 => 'ten lords a leaping',
        11 => 'eleven pipers piping',
        12 => 'twelve drummers drumming'
    ];

    private function printPresent($day, $printComma = false)
    {
        if ($day === 1) {
            $and = $printComma ? " and " : "";
            echo $and . $this->presents[$day];

            return;
        }

        $comma = $printComma ? ", " : "";

        echo $comma . $this->presents[$day];

        $this->printPresent($day-1, true);
    }

    public function printLyrics($day = 1)
    {
        echo "\n" . sprintf($this->starter, $this->dayLookUp[$day]);

        $this->printPresent($day);

        if ($day === 12) return;

        $this->printLyrics($day+1);
    }
}

$song = new TwelveDays();

$song->printLyrics();