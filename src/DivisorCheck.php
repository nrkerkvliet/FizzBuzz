<?php

/* echo $_SERVER["DOCUMENT_ROOT"];
die; */

/* $numberStart = 1; // must be > 0  &&   <= 100    && must be < $numberEnd
$numberEnd = 100; // must be > 0  &&   <= 100    && must be > $numberSTart

$matchDict = array();
$matchDict[3] = 'fizz';
$matchDict[5] = 'buzz';

//DivisorCheck::validateDivisorCheck($numberStart, $numberEnd);
$divisorChecker = new DivisorCheck($numberStart, $numberEnd, $matchDict);

$divisorChecker->outputDivisorTests(); */

class DivisorCheck
{
    public $startingNumber;
    public $endingNumber;
    public $matchDict;

    function __construct($startingNumber, $endingNumber, $matchDict)
    {
        $this->startingNumber = $startingNumber;
        $this->endingNumber = $endingNumber;
        $this->matchDict = $matchDict;
    }

    public function outputDivisorTests()
    {
        for ($x = $this->startingNumber; $x <= $this->endingNumber; $x++)
        {
            $outputString = "";
            $outputString = $this->checkDivisors($x);
            echo $outputString;
            echo "<br>";
        }
    }

    public function checkDivisors($numberToCheck) : String
    {
        $termOut = "";
        foreach($this->matchDict AS $divisor => $term)
        {
            if($numberToCheck % $divisor == 0)
            {
                $termOut .= $term;
            }
        }

        if($termOut == "")
        {
            return $numberToCheck;
        }

        return $termOut;
    }

    public static function validateDivisorCheck($numberStart, $numberEnd)
    {
        // add validation
        throw new InvalidArgumentException();
    }
}
?>

