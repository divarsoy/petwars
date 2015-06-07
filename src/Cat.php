<?php
namespace Divarsoy\PetWars;

/**
 * Cat class
 *
 * The Cat class extends the Cute Fluffy Animals class and
 * returns "Meow" when squeal is called.
 *
 * @package Divarsoy\PetWars
 * @author Dag A. Ivarsøy <dag@ivarsoysolutions.co.uk>
 */

class Cat extends CuteFluffyAnimals {

    public function squeal()
    {
        return "Meow";
    }
}