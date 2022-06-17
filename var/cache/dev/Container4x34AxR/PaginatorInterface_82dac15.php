<?php

namespace Container4x34AxR;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder47392 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer74de1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb6eeb = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        if ($this->valueHolder47392 === $returnValue = $this->valueHolder47392->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        $instance->initializer74de1 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder47392) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder47392 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, '__get', ['name' => $name], $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        if (isset(self::$publicPropertiesb6eeb[$name])) {
            return $this->valueHolder47392->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47392;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder47392;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47392;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder47392;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, '__isset', array('name' => $name), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47392;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder47392;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, '__unset', array('name' => $name), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47392;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder47392;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, '__clone', array(), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        $this->valueHolder47392 = clone $this->valueHolder47392;
    }

    public function __sleep()
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, '__sleep', array(), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return array('valueHolder47392');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer74de1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer74de1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'initializeProxy', array(), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder47392;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder47392;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
