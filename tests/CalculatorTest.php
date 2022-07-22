<?php
// Php version required PHP 8.1.2 or latest
// composer require --dev phpunit/phpunit ^9.5
// composer update

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