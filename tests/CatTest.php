<?php
namespace Divarsoy\PetWars\Test;
use Divarsoy\PetWars\Cat;
use Divarsoy\PetWars\Animal;

/**
 * Class CatTest
 * @package Divarsoy\PetWars\Test
 * @author Dag A. Ivarsøy <dag@ivarsoysolutions.co.uk>
 */

class CatTest extends \PHPUnit_Framework_TestCase {

    public function testAttack()
    {
        /** @var Animal $mock */
        $mock = $this->getMock('Divarsoy\PetWars\Animal');
        $mock->expects($this->once())->method('attacked');

        $cat = new Cat();
        $cat->attack($mock);
    }

    public function testSqueal()
    {
        $expected = "Meow";
        $cat = new Cat();
        $actual = $cat->squeal();
        $this->assertEquals($expected, $actual);
    }

    public function testAttackedResponse()
    {
        $expected = "Meow";
        $cat = new Cat();
        $actual = $cat->attacked();
        $this->assertEquals($expected, $actual);
    }

    public function testAttackRemoves5FromHp()
    {
        $expected = 95;
        $cat = new Cat();
        $cat->attacked();
        $actual = \PHPUnit_Framework_Assert::readAttribute($cat, "hp");
        $this->assertEquals( $actual, $expected);
    }
}
