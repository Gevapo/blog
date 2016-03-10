<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

/* Composer autoloader */
require_once __DIR__.'/../vendor/autoload.php';

/* configuration */
require_once __DIR__.'/../config/config.php';

/* Doctrine's Entity Manager */
$entitiesPath = array(__DIR__.'/Blog/Entity');
$config = Setup::createAnnotationMetadataConfiguration($entitiesPath, $dev);
$entityManager = EntityManager::create($dbParams, $config);