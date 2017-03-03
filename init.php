<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-yamap')
    ->usePackage('larakit/sf-angular')
    ->setSourceDir('public')
    ->ngModule('yaMap')
    ->jsPackage('ya-map-2.1.min.js')
;