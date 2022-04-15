<?php
require_once __DIR__ . '/../vendor/autoload.php';
use App\DivisorCheck;
/* require __DIR__ . "/../src/DivisorCheck.php"; */
class FizzBuzzTest extends \PHPUnit\Framework\TestCase
{
    public function testFizz()
    {
        $divisorChecker = new DivisorCheck(1, 100, [3=>'fizz', 5=>'buzz']);
        $result = $divisorChecker->checkDivisors(3);

        $this->assertEquals('fizz', $result);
    }

    public function testBuzz()
    {
        $divisorChecker = new App\DivisorCheck(1, 100, [3=>'fizz', 5=>'buzz']);
        $result = $divisorChecker->checkDivisors(5);

        $this->assertEquals('buzz', $result);
    }


    public function testFizzBuzz()
    {
        $divisorChecker = new App\DivisorCheck(1, 100, [3=>'fizz', 5=>'buzz']);
        $result = $divisorChecker->checkDivisors(15);

        $this->assertEquals('fizzbuzz', $result);
    }

    public function testNoMatch()
    {
        $divisorChecker = new App\DivisorCheck(1, 100, [3=>'fizz', 5=>'buzz']);
        $result = $divisorChecker->checkDivisors(7);

        $this->assertEquals('7', $result);
    }

    public function testPling()
    {
        $divisorChecker = new DivisorCheck(1, 100, [2=>'Pling', 5=>'Plong']);
        $result = $divisorChecker->checkDivisors(2);

        $this->assertEquals('Pling', $result);
    }

    public function testPlingPlong()
    {
        $divisorChecker = new App\DivisorCheck(1, 100, [2=>'Pling', 4=>'Plong']);
        $result = $divisorChecker->checkDivisors(8);

        $this->assertEquals('PlingPlong', $result);
    }

    public function testBingBangPow()
    {
        $divisorChecker = new App\DivisorCheck(1, 100, [2=>'Bing', 3=>'Bang', 4=>'Pow']);
        $result = $divisorChecker->checkDivisors(24);

        $this->assertEquals('BingBangPow', $result);
    }
}

?>