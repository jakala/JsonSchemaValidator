<?php

declare(strict_types=1);

namespace Jakala\Validator\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

final class JsonSchemaValidatorExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $configDir = new FileLocator(__DIR__ . '/../../config');

        $loader = new YamlFileLoader($container, $configDir);
        $loader->load('services.yaml');

        $schema = new ConfigSchema();
        $this->processConfiguration($schema, $configs);
    }
}