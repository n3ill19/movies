<?php

namespace ContainerRc1odlW;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder36570 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd2ad5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd773e = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        if ($this->valueHolder36570 === $returnValue = $this->valueHolder36570->paginate($target, $page, $limit, $options)) {
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

        $instance->initializerd2ad5 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder36570) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder36570 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, '__get', ['name' => $name], $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        if (isset(self::$publicPropertiesd773e[$name])) {
            return $this->valueHolder36570->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36570;

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

        $targetObject = $this->valueHolder36570;
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
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36570;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder36570;
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
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, '__isset', array('name' => $name), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36570;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder36570;
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
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, '__unset', array('name' => $name), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36570;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder36570;
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
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, '__clone', array(), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        $this->valueHolder36570 = clone $this->valueHolder36570;
    }

    public function __sleep()
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, '__sleep', array(), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return array('valueHolder36570');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd2ad5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd2ad5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'initializeProxy', array(), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder36570;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder36570;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
