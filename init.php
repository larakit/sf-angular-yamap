<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-yamap')
    ->usePackage('larakit/sf-angular')
    ->setSourceDir('public')
    ->jsPackage('ya-map-2.1.min.js');
\Larakit\NgAdminlte\LkNg::moduleRegister('yaMap');