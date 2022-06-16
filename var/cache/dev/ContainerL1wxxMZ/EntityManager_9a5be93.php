<?php

namespace ContainerL1wxxMZ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder14e64 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer24b25 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5f1f9 = [
        
    ];

    public function getConnection()
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'getConnection', array(), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'getMetadataFactory', array(), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'getExpressionBuilder', array(), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'beginTransaction', array(), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'getCache', array(), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->getCache();
    }

    public function transactional($func)
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'transactional', array('func' => $func), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'wrapInTransaction', array('func' => $func), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'commit', array(), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->commit();
    }

    public function rollback()
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'rollback', array(), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'getClassMetadata', array('className' => $className), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'createQuery', array('dql' => $dql), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'createNamedQuery', array('name' => $name), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'createQueryBuilder', array(), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'flush', array('entity' => $entity), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'clear', array('entityName' => $entityName), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->clear($entityName);
    }

    public function close()
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'close', array(), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->close();
    }

    public function persist($entity)
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'persist', array('entity' => $entity), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'remove', array('entity' => $entity), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'refresh', array('entity' => $entity), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'detach', array('entity' => $entity), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'merge', array('entity' => $entity), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'getRepository', array('entityName' => $entityName), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'contains', array('entity' => $entity), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'getEventManager', array(), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'getConfiguration', array(), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'isOpen', array(), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'getUnitOfWork', array(), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'getProxyFactory', array(), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'initializeObject', array('obj' => $obj), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'getFilters', array(), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'isFiltersStateClean', array(), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'hasFilters', array(), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return $this->valueHolder14e64->hasFilters();
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

        $instance->initializer24b25 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder14e64) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder14e64 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder14e64->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, '__get', ['name' => $name], $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        if (isset(self::$publicProperties5f1f9[$name])) {
            return $this->valueHolder14e64->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder14e64;

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

        $targetObject = $this->valueHolder14e64;
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
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder14e64;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder14e64;
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
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, '__isset', array('name' => $name), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder14e64;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder14e64;
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
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, '__unset', array('name' => $name), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder14e64;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder14e64;
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
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, '__clone', array(), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        $this->valueHolder14e64 = clone $this->valueHolder14e64;
    }

    public function __sleep()
    {
        $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, '__sleep', array(), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;

        return array('valueHolder14e64');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer24b25 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer24b25;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer24b25 && ($this->initializer24b25->__invoke($valueHolder14e64, $this, 'initializeProxy', array(), $this->initializer24b25) || 1) && $this->valueHolder14e64 = $valueHolder14e64;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder14e64;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder14e64;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
