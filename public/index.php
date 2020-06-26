<?php
 
 require '../vendor/autoload.php';

 $kernel = new Ridem\Kernel();
 
 $kernel->router->load(include dirname(__DIR__) . '/app/routes.php');
 
 $kernel->run($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);