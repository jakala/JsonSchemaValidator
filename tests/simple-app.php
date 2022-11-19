<?php

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Jakala\Validator\DependencyInjection\JsonSchemaValidatorExtension;

require_once __DIR__ . '/../vendor/autoload.php';

$config = [];
$container = new ContainerBuilder();
$extension = new JsonSchemaValidatorExtension();
$extension->load($config, $container);
$container->compile();

print_r($container->getAliases());
print_r($container->getServiceIds());
