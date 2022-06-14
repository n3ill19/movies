<?php

namespace ContainerGLhIbbP;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'getConnection', array(), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'getMetadataFactory', array(), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'getExpressionBuilder', array(), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'beginTransaction', array(), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'getCache', array(), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'transactional', array('func' => $func), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'wrapInTransaction', array('func' => $func), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'commit', array(), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->commit();
    }

    public function rollback()
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'rollback', array(), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'getClassMetadata', array('className' => $className), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'createQuery', array('dql' => $dql), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'createNamedQuery', array('name' => $name), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'createQueryBuilder', array(), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'flush', array('entity' => $entity), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'clear', array('entityName' => $entityName), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->clear($entityName);
    }

    public function close()
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'close', array(), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->close();
    }

    public function persist($entity)
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'persist', array('entity' => $entity), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'remove', array('entity' => $entity), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'refresh', array('entity' => $entity), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'detach', array('entity' => $entity), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'merge', array('entity' => $entity), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'contains', array('entity' => $entity), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'getEventManager', array(), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'getConfiguration', array(), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'isOpen', array(), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'getUnitOfWork', array(), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'getProxyFactory', array(), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'initializeObject', array('obj' => $obj), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'getFilters', array(), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'isFiltersStateClean', array(), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, 'hasFilters', array(), $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        return $this->valueHolder2e260->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer7d2b7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder2e260) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2e260 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2e260->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7d2b7 && ($this->initializer7d2b7->__invoke($valueHolder2e260, $this, '__get', ['name' => $name], $this->initializer7d2b7) || 1) && $this->valueHolder2e260 = $valueHolder2e260;

        if (isset(self::$publicPropertiesad414[$name])) {
            return $this->valueHolder2e260->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
