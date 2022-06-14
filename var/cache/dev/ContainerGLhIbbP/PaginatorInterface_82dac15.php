<?php

namespace ContainerGLhIbbP;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2e260 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7d2b7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesad414 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        if ($this->valueHolder2e260 === $returnValue = $this->valueHolder2e260->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer7d2b7 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder2e260) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder2e260 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, '__get', ['name' => $name], $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        if (isset(self::$publicPropertiesad414[$name])) {
            return $this->valueHolder2e260->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2e260;

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

        $targetObject = $this->valueHolder2e260;
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
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2e260;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2e260;
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
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, '__isset', array('name' => $name), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2e260;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2e260;
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
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, '__unset', array('name' => $name), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2e260;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2e260;
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
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, '__clone', array(), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        $this->valueHolder2e260 = clone $this->valueHolder2e260;
    }

    public function __sleep()
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, '__sleep', array(), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return array('valueHolder2e260');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7d2b7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7d2b7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'initializeProxy', array(), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2e260;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2e260;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
