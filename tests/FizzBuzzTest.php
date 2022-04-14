<?php
require __DIR__ . "/../src/DivisorCheck.php";
class FizzBuzzTest extends \PHPUnit\Framework\TestCase
{
    public function testAdd()
    {
        $divisorChecker = new DivisorCheck(1, 100, [3=>'fizz', 5=>'buzz']);
        $result = $divisorChecker->checkDivisors(3);

        $this->assertEquals('fizz', $result);
    }
}





?>