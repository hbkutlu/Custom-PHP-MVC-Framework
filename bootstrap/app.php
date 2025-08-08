<?php
require_once '../core/Helper.php';
require_once '../core/App.php';
require_once '../core/Controller.php';
require_once '../core/Model.php';
require_once '../core/View.php';
require_once '../core/Request.php';
require_once '../core/Response.php';
require_once '../core/Route.php';
require_once '../core/Session.php';
require_once '../core/Auth.php';

use Core\Route;

// Route tanımları
require_once '../routes/web.php';

$app = new App();