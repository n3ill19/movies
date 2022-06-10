<?php

namespace ContainerVf5BV2L;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder87e6d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb28d0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf7667 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'getConnection', array(), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'getMetadataFactory', array(), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'getExpressionBuilder', array(), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'beginTransaction', array(), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'getCache', array(), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'transactional', array('func' => $func), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'commit', array(), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->commit();
    }

    public function rollback()
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'rollback', array(), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'getClassMetadata', array('className' => $className), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'createQuery', array('dql' => $dql), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'createNamedQuery', array('name' => $name), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'createQueryBuilder', array(), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'flush', array('entity' => $entity), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'clear', array('entityName' => $entityName), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->clear($entityName);
    }

    public function close()
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'close', array(), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->close();
    }

    public function persist($entity)
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'persist', array('entity' => $entity), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'remove', array('entity' => $entity), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'refresh', array('entity' => $entity), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'detach', array('entity' => $entity), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'merge', array('entity' => $entity), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'contains', array('entity' => $entity), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'getEventManager', array(), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'getConfiguration', array(), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'isOpen', array(), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'getUnitOfWork', array(), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'getProxyFactory', array(), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'initializeObject', array('obj' => $obj), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'getFilters', array(), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'isFiltersStateClean', array(), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'hasFilters', array(), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return $this->valueHolder87e6d->hasFilters();
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

        $instance->initializerb28d0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder87e6d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder87e6d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder87e6d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, '__get', ['name' => $name], $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        if (isset(self::$publicPropertiesf7667[$name])) {
            return $this->valueHolder87e6d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder87e6d;

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

        $targetObject = $this->valueHolder87e6d;
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
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder87e6d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder87e6d;
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
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, '__isset', array('name' => $name), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder87e6d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder87e6d;
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
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, '__unset', array('name' => $name), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder87e6d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder87e6d;
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
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, '__clone', array(), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        $this->valueHolder87e6d = clone $this->valueHolder87e6d;
    }

    public function __sleep()
    {
        $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, '__sleep', array(), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;

        return array('valueHolder87e6d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb28d0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb28d0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb28d0 && ($this->initializerb28d0->__invoke($valueHolder87e6d, $this, 'initializeProxy', array(), $this->initializerb28d0) || 1) && $this->valueHolder87e6d = $valueHolder87e6d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder87e6d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder87e6d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
