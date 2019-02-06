<?php

use core\Route;
use core\Registry;

Registry::set('controllers', $_SERVER['DOCUMENT_ROOT'] . "/controllers/");
Registry::set('models', $_SERVER['DOCUMENT_ROOT'] . "/models/");
Registry::set('views', $_SERVER['DOCUMENT_ROOT'] . "/views/");
Registry::set('core', $_SERVER['DOCUMENT_ROOT'] . "/core/");

Route::start();