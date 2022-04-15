<?php
require_once __DIR__ . '/../vendor/autoload.php';
use App\DivisorCheck;
?>

<div style="width:50%; float: left;">
<h3>Stage 1</h3>
<?php
$numberStart = 1; // must be > 0  &&   <= 100    && must be < $numberEnd
$numberEnd = 100; // must be > 0  &&   <= 100    && must be > $numberSTart

$matchDict = array();
$matchDict[3] = 'Fizz';
$matchDict[5] = 'Buzz';
$divisorChecker = new DivisorCheck($numberStart, $numberEnd, $matchDict);
$divisorChecker->outputDivisorTests();
?>
</div>

<div style="width:50%; float: right;">
<h3>Stage 2</h3>
<?php
$numberStart = 1; // must be > 0  &&   <= 100    && must be < $numberEnd
$numberEnd = 100; // must be > 0  &&   <= 100    && must be > $numberSTart
$matchDict = array();
$matchDict[2] = 'Pling';
$matchDict[4] = 'Plong';
$divisorChecker = new DivisorCheck($numberStart, $numberEnd, $matchDict);
$divisorChecker->outputDivisorTests();
?>
</div>