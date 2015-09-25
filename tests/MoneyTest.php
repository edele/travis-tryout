<?php
class MoneyTest extends PHPUnit_Framework_TestCase
{
    // ...

    public function testCanBeNegated()
    {
        // Arrange
        $a = new Money(1);

        // Act
        $b = $a->negate();

        // Assert
        $this->assertEquals(-1, $b->getAmount());
    }

    public function testAdd()
    {
        // Arrange
        $a = new Money(600);

        // Act
        $a->add(66);

        // Assert
        $this->assertEquals(666, $a->getAmount());
    }

    // ...
}