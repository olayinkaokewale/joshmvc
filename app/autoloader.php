<?php

// Set this first!
define('__ROOTURI__', 'http://localhost:8080/microevents/');

define('CONTROLLER_PATH', '../app/controllers/');
define('MODEL_PATH', '../app/models/');
define('VIEW_PATH', '../app/views/');

define('ASSETS_PATH', __ROOTURI__.'public/assets/');

require 'core/definitions.php';

require 'core/Model.php';
require 'core/View.php';
require 'core/Controller.php';
require 'core/Session.php';

Session::start();