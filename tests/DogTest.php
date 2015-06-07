<?php
namespace Divarsoy\PetWars\Test;
use Divarsoy\PetWars\Dog;
use Divarsoy\PetWars\Animal;

/**
 * Class DogTest
 * @package Divarsoy\PetWars\Test
 * @author Dag A. Ivarsøy <dag@ivarsoysolutions.co.uk>
 */
class DogTest extends \PHPUnit_Framework_TestCase {

    public function testAttack()
    {
        /** @var Animal $mock */
        $mock = $this->getMock('Divarsoy\PetWars\Animal');
        $mock->expects($this->once())->method('attacked');

        $dog = new Dog();
        $dog->attack($mock);
    }

    public function testSqueal()
    {
        $expected = "Woff";
        $dog = new Dog();
        $actual = $dog->squeal();
        $this->assertEquals($expected, $actual);
    }

    public function testAttackedResponse()
    {
        $expected = "Woff";
        $dog = new Dog();
        $actual = $dog->attacked();
        $this->assertEquals($expected, $actual);
    }

    public function testAttackRemoves5FromHp()
    {
        $expected = 95;
        $dog = new Dog();
        $dog->attacked();
        $actual = \PHPUnit_Framework_Assert::readAttribute($dog, "hp");
        $this->assertEquals( $actual, $expected);
    }
}
