<?php
declare(strict_types = 1);
namespace Dersam;

use Claptrap\Http\Request;
use Claptrap\Http\Response;
use Claptrap\Pipe;
use Claptrap\Renderable\Text;

/**
 *
 *
 * @author Sam Schmidt <samuel@dersam.net>
 */
class Doggo implements Pipe
{
    public function transform(
        Request $request,
        Response $response
    ) {
        $item = (new Text());
        $item->addLine('hello i am dog');
        $response->addRenderableItem(
            $item
        );
    }
}
