<?php

$f3 = require_once __DIR__.'/lib/base.php';

$f3->set('DEBUG',1);
if ((float)PCRE_VERSION<7.9)
	trigger_error('PCRE version is out of date');

$f3->config('config.ini');

$f3->config('app/routes.ini');

$f3->run();
