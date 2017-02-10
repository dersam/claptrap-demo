<?php
declare(strict_types = 1);
namespace App\Pipes;

use Claptrap\Http\Request;
use Claptrap\Http\Response;
use Claptrap\Pipe;
use Claptrap\Renderer\Text;

/**
 *
 *
 * @author Sam Schmidt <samuel@dersam.net>
 */
class HeadDoggo implements Pipe
{
    public function transform(
        Request $request,
        Response $response
    ) {
        $response->setRenderer(new Text());
    }
}
