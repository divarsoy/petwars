<?php
namespace Divarsoy\PetWars;

/**
 * CuteFluffyAnimals class
 * This class implements the Animal interface and sets up
 * healthpoints (hp) for all Cute Fluffy Animals inheriting
 * this class. It also implements common behaviours.
 *
 * @package Divarsoy\PetWars
 * @author Dag A. Ivarsøy <dag@ivarsoysolutions.co.uk>
 */

Abstract class CuteFluffyAnimals implements Animal {

    /**
     * @var int
     */
    private $hp;

    public function __construct()
    {
        $this->hp = 100;
    }

    /**
     * @param Animal $animal
     */
    public function attack(Animal $animal)
    {
        $animal->attacked();
    }

    /**
     *
     * @return string
     */
    public function attacked()
    {
        $this->hp -= 5;
        return $this->squeal();
    }
}