<?php

foreach (File::allFiles(__DIR__ . '/Acme/Filters') as $partial_route) {
    require $partial_route->getPathname();
}
