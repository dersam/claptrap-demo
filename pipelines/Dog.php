<?php
declare(strict_types = 1);
namespace Dersam;

use Claptrap\Pipeline;

/**
 *
 *
 * @author Sam Schmidt <samuel@dersam.net>
 */
class Dog extends Pipeline
{
    public function assemble() : void
    {
        $this->attach(new Doggo());
        $this->attach(new Doggo());
        $this->attach(new HeadDoggo());
    }
}
