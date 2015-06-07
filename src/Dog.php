<?php
namespace Divarsoy\PetWars;

/**
 * Dog class
 *
 * The Dog class extends the Cute Fluffy Animals class and
 * returns "Woff" when squeal is called.
 *
 * @package Divarsoy\PetWars
 * @author Dag A. Ivarsøy <dag@ivarsoysolutions.co.uk>
 */

class Dog extends CuteFluffyAnimals {

    /**
     * @return string
     */
    public function squeal()
    {
        return "Woff";
    }
}
