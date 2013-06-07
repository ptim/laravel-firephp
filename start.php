<?php

Autoloader::map(array(
    'FirePHP' => Bundle::path('firephp').'FirePHPCore-0.3.2/lib/FirePHPCore/FirePHP.class.php',
    'FB' => Bundle::path('firephp').'FirePHPCore-0.3.2/lib/FirePHPCore/fb.php',
));

/*
|--------------------------------------------------------------------------
| Conditionally enable FirePHP
|--------------------------------------------------------------------------
*/

if( Request::env() === 'local') {
    FB::setEnabled(true);
}
else {
    FB::setEnabled(false);
}
