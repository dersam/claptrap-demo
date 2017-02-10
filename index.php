<?php
/**
 *
 *
 * @author Sam Schmidt <samuel@dersam.net>
 */

define('CLAPTRAP_ROOT_DIR', __DIR__);

require_once "vendor/autoload.php";

(new \Claptrap\Claptrap())->run();
