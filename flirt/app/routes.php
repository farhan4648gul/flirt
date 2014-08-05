<?php

foreach (File::allFiles(__DIR__ . '/Acme/Routes') as $partial_route) {
    require $partial_route->getPathname();
}
