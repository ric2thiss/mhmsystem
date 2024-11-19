<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require('./core/Route.php');

$path = isset($_GET["path"]) ? $_GET["path"] : "";

// Autoload classes dynamically
spl_autoload_register(function ($class) {
    $directories = ['Controller', 'core'];
    foreach ($directories as $directory) {
        $file = __DIR__ . '/' . $directory . '/' . $class . '.php';
        if (file_exists($file)) {
            require $file;
            return;
        }
    }
});

session_start();
// Define routes
Route::get('/', [DashboardController::class, "index"]);
Route::get('/login', [LoginController::class, "index"]);
Route::post('/login', [LoginController::class, "login"]);

Route::get('/chart', [ChartController::class, "index"]);


// Api Route
Route::get('/api/case', [ApiController::class, "index"]);
Route::get('/api/{request}', [ApiController::class, "show"]);


$requestUri = str_replace('/mental-health-management-system', '', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));


Route::dispatch($requestUri);
