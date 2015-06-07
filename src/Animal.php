<?php
namespace Divarsoy\PetWars;

/**
 * Interface Animal
 * @package Divarsoy\PetWars
 * @author Dag A. Ivarsøy <dag@ivarsoysolutions.co.uk>
 */
interface Animal {
    /**
     * @param Animal $animal
     * @return void
     */
    public function attack(Animal $animal);

    /**
     * @return string
     */
    public function squeal();

    /**
     * @return string
     */
    public function attacked();
}