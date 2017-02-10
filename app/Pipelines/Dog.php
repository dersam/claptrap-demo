<?php
declare(strict_types = 1);
namespace App\Pipelines;

use App\Pipes\Doggo;
use App\Pipes\HeadDoggo;
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
