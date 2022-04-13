<?php

$numberStart = 1; // must be > 0  &&   <= 100    && must be < $numberEnd
$numberEnd = 100; // must be > 0  &&   <= 100    && must be > $numberSTart

$arrayOfBangers = array();
$arrayOfBangers[] = new Banger(3, "Fizz");
$arrayOfBangers[] = new Banger(5, "Buzz");
/* 
$arrayOfBangers[] = new Banger(2, "Pling");
$arrayOfBangers[] = new Banger(4, "Plong");
 */

DivisorCheck::validateDivisorCheck($numberStart, $numberEnd);
$divisorChecker = new DivisorCheck($numberStart, $numberEnd, $arrayOfBangers);


$divisorChecker->outputDivisorTests();


class DivisorCheck
{
    public $startingNumber;
    public $endingNumber;
    public $arrayOfBangers;

    function __construct($startingNumber, $endingNumber, $arrayOfBangers)
    {
        $this->startingNumber = $startingNumber;
        $this->endingNumber = $endingNumber;
        $this->arrayOfBangers = $arrayOfBangers;

        // if time > noon
        // array = {fizz,3}, {buzz,5}
        // else
        // array = {plip,2 {plop,4}

    }

    public function outputDivisorTests()
    {
        for ($x = $this->startingNumber; $x <= $this->endingNumber; $x++)
        {
            $outputString = "";
            $outputString = $this->checkDivisors($x);
            if($outputString == "")
            {
                echo $x;
            }
            else
            {
                echo $outputString;
            }
            echo "<br>";
        }
    }

    private function checkDivisors($numberToCheck) : String
    {
        $termOut = "";
        foreach($this->arrayOfBangers AS $banger)
        {
            if($numberToCheck % $banger->divisor == 0)
            {
                $termOut .= $banger->stringOutput;
            }
        }
        return $termOut;
    }

    public static function validateDivisorCheck($numberStart, $numberEnd)
    {
        // add validation
        throw new InvalidArgumentException();
    }
}

class Banger
{
    public $divisor; // 3
    public $stringOutput; // fizz

    function __construct($divisor, $stringOutput)
    {
        $this->divisor = $divisor;
        $this->stringOutput = $stringOutput;
    }

}

?>

