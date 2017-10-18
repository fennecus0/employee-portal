<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;

// If you don't want to setup permissions the proper way, just uncomment the following PHP line
// read http://symfony.com/doc/current/setup.html#checking-symfony-application-configuration-and-setup
// for more information
//umask(0000);

// This check prevents access to debug front controllers that are deployed by accident to production servers.
// Feel free to remove this, extend it, or make something more sophisticated.
//todo this may be a security concern if someone managed to spoof their IP as one of these
$allowedIPs = array('172.16.1.28', 'fe80::1', '::1', 'my.organisation.ip.address');

//allow app_dev.php only under these conditions (prevent for production environment) uses HTTP_X_FORWARDED_FOR because behind load balancer
if (
    isset($_SERVER['HTTP_X_FORWARDED_FOR']) &&
    ( ! in_array(@$_SERVER['HTTP_X_FORWARDED_FOR'], $allowedIPs) )
){
    header('HTTP/1.0 403 Forbidden');
    exit('You are not allowed to access the development environment.');
}

/** @var \Composer\Autoload\ClassLoader $loader */
$loader = require __DIR__.'/../app/autoload.php';
Debug::enable();

$kernel = new AppKernel('dev', true);
$kernel->loadClassCache();
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
