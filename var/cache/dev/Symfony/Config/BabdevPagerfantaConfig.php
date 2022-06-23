<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'BabdevPagerfanta'.\DIRECTORY_SEPARATOR.'ExceptionsStrategyConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class BabdevPagerfantaConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $defaultView;
    private $defaultTwigTemplate;
    private $exceptionsStrategy;
    
    /**
     * @default 'default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultView($value): static
    {
        $this->defaultView = $value;
    
        return $this;
    }
    
    /**
     * @default '@Pagerfanta/default.html.twig'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultTwigTemplate($value): static
    {
        $this->defaultTwigTemplate = $value;
    
        return $this;
    }
    
    public function exceptionsStrategy(array $value = []): \Symfony\Config\BabdevPagerfanta\ExceptionsStrategyConfig
    {
        if (null === $this->exceptionsStrategy) {
            $this->exceptionsStrategy = new \Symfony\Config\BabdevPagerfanta\ExceptionsStrategyConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "exceptionsStrategy()" has already been initialized. You cannot pass values the second time you call exceptionsStrategy().');
        }
    
        return $this->exceptionsStrategy;
    }
    
    public function getExtensionAlias(): string
    {
        return 'babdev_pagerfanta';
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['default_view'])) {
            $this->defaultView = $value['default_view'];
            unset($value['default_view']);
        }
    
        if (isset($value['default_twig_template'])) {
            $this->defaultTwigTemplate = $value['default_twig_template'];
            unset($value['default_twig_template']);
        }
    
        if (isset($value['exceptions_strategy'])) {
            $this->exceptionsStrategy = new \Symfony\Config\BabdevPagerfanta\ExceptionsStrategyConfig($value['exceptions_strategy']);
            unset($value['exceptions_strategy']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->defaultView) {
            $output['default_view'] = $this->defaultView;
        }
        if (null !== $this->defaultTwigTemplate) {
            $output['default_twig_template'] = $this->defaultTwigTemplate;
        }
        if (null !== $this->exceptionsStrategy) {
            $output['exceptions_strategy'] = $this->exceptionsStrategy->toArray();
        }
    
        return $output;
    }

}
