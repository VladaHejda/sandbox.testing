<?php

$container = require_once "app/bootstrap.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($container->getService('entityManager'));
