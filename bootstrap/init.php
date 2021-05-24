<?php 
/* start session if not start already */
if (!isset($_session)) session_start();

/* sesssion start */

require_once __DIR__.'/../app/config/_env.php';

# instantiate database class
new \App\Classes\Database();


require_once __DIR__.'/../app/Routing/routes.php';
require_once __DIR__.'/../app/Routing/RouteDispatcher.php';

new \App\RouteDispatcher($router);
