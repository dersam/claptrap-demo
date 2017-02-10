<?php

return FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/dog', 'App\Pipelines\Dog');
});
