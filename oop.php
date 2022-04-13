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

    public function checkDivisors($numberToCheck) : String
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





/* echo "<h1>Test</h1>";

$numberIn=0;
$endNumber=100;

for ($numberIn = 0; $numberIn <= $endNumber; $numberIn++)
{
    $outputString = "";
    $outputString .= checkMultiple(3, $numberIn, 'Fizz');
    $outputString .= checkMultiple(5, $numberIn, 'Buzz');
    if($outputString == "")
    {
        echo $numberIn;
    }
    else
    {
        echo $outputString;
    }
    echo "<br>";
}


function checkMultiple($divisor, $numberToCheck, $termOut) : String
{
    if($numberToCheck % $divisor == 0)
    {
        return $termOut;
    }
    return "";
} */


?>

