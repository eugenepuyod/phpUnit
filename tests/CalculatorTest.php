<?php
// To run the phpunit
// ./vendor/bin/phpunit --testdox or ./vendor/bin/phpunit

class CalculatorTest extends \PHPUnit\Framework\TestCase {
    public function testAdd() {
        $calculator = new App\Calculator;
        $result = $calculator->add(20,5);

        $this->assertEquals(25, $result);
    }

    public function testMinus() {
        $calculator = new App\Calculator;
        $result = $calculator->minus(20,5);

        $this->assertEquals(15, $result);
    }
}

?>