<?php
require_once __DIR__."/classes/router.php";


$path = substr($_SERVER['REQUEST_URI'], 8); // cut '/amocrm/' in url
$pos = strpos($path, '?');
if ($pos !== FALSE) {
    $path = substr($path, 0, $pos);
}
$pos = strpos($path, '#');
if ($pos !== FALSE) {
    $path = substr($path, 0, $pos);
}
$path = trim($path, '/');


// --------------------------------
// init router
$router = Router::instance();
$router->set_current_route("/amocrm/{$path}");
// --------------------------------


// --------------------------------
// include file
if (is_dir(__DIR__."/views/{$path}") && file_exists(__DIR__."/views/{$path}/index.php")){
    require_once __DIR__."/views/{$path}/index.php";
}
else if(file_exists(__DIR__."/views/{$path}.php")){
    require_once __DIR__."/views/{$path}.php";
} 
else {
    header("HTTP/1.0 404 Not Found"); 
    echo "Page not found";
}
// --------------------------------
