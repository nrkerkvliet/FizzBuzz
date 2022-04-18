<?php

namespace App;

class DivisorCheck
{
    public $startingNumber;
    public $endingNumber;
    public $matchDict;
    public $minLimit = 1;
    public $maxLimit = 100;

    function __construct($startingNumber, $endingNumber, $matchDict)
    {
        $this->validateDivisorCheck($startingNumber, $endingNumber);
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

    private function validateDivisorCheck($numberStart, $numberEnd)
    {
        if($numberStart < $this->minLimit)
        {
            throw new \InvalidArgumentException('Minimum limit is ' . $this->minLimit);
        }
        if($numberEnd > $this->maxLimit)
        {
            throw new \InvalidArgumentException('Maximum limit is ' . $this->maxLimit);
        }
    }
}
?>

