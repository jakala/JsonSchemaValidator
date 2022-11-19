<?php

declare(strict_types=1);

namespace Jakala\Validator\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class ConfigSchema implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        return new TreeBuilder('');
    }
}