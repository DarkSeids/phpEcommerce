<?php 

require_once __DIR__.'/../bootstrap/init.php';
//$getname = getenv('APP_NAME');

use Illuminate\Database\Capsule\Manager as Capsule;

$user = Capsule::table('categories')->get();
var_dump($user);