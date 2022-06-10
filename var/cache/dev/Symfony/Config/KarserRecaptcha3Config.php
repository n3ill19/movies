<?php

namespace Symfony\Config;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class KarserRecaptcha3Config implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $siteKey;
    private $secretKey;
    private $scoreThreshold;
    private $host;
    private $enabled;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function siteKey($value): static
    {
        $this->siteKey = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function secretKey($value): static
    {
        $this->secretKey = $value;
    
        return $this;
    }
    
    /**
     * @default 0.5
     * @param ParamConfigurator|float $value
     * @return $this
     */
    public function scoreThreshold($value): static
    {
        $this->scoreThreshold = $value;
    
        return $this;
    }
    
    /**
     * Default host is "www.google.com", if it is not reachable then use "www.recaptcha.net" instead.
     * @default 'www.google.com'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function host($value): static
    {
        $this->host = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): static
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'karser_recaptcha3';
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['site_key'])) {
            $this->siteKey = $value['site_key'];
            unset($value['site_key']);
        }
    
        if (isset($value['secret_key'])) {
            $this->secretKey = $value['secret_key'];
            unset($value['secret_key']);
        }
    
        if (isset($value['score_threshold'])) {
            $this->scoreThreshold = $value['score_threshold'];
            unset($value['score_threshold']);
        }
    
        if (isset($value['host'])) {
            $this->host = $value['host'];
            unset($value['host']);
        }
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->siteKey) {
            $output['site_key'] = $this->siteKey;
        }
        if (null !== $this->secretKey) {
            $output['secret_key'] = $this->secretKey;
        }
        if (null !== $this->scoreThreshold) {
            $output['score_threshold'] = $this->scoreThreshold;
        }
        if (null !== $this->host) {
            $output['host'] = $this->host;
        }
        if (null !== $this->enabled) {
            $output['enabled'] = $this->enabled;
        }
    
        return $output;
    }

}
