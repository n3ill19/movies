<?php

namespace ContainerJy51cey;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3bf22 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer00973 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese9e8a = [
        
    ];

    public function getConnection()
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'getConnection', array(), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'getMetadataFactory', array(), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'getExpressionBuilder', array(), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'beginTransaction', array(), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'getCache', array(), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->getCache();
    }

    public function transactional($func)
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'transactional', array('func' => $func), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'wrapInTransaction', array('func' => $func), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'commit', array(), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->commit();
    }

    public function rollback()
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'rollback', array(), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'getClassMetadata', array('className' => $className), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'createQuery', array('dql' => $dql), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'createNamedQuery', array('name' => $name), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'createQueryBuilder', array(), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'flush', array('entity' => $entity), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'clear', array('entityName' => $entityName), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->clear($entityName);
    }

    public function close()
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'close', array(), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->close();
    }

    public function persist($entity)
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'persist', array('entity' => $entity), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'remove', array('entity' => $entity), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'refresh', array('entity' => $entity), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'detach', array('entity' => $entity), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'merge', array('entity' => $entity), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'getRepository', array('entityName' => $entityName), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'contains', array('entity' => $entity), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'getEventManager', array(), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'getConfiguration', array(), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'isOpen', array(), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'getUnitOfWork', array(), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'getProxyFactory', array(), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'initializeObject', array('obj' => $obj), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'getFilters', array(), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'isFiltersStateClean', array(), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'hasFilters', array(), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return $this->valueHolder3bf22->hasFilters();
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

        $instance->initializer00973 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3bf22) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3bf22 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3bf22->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, '__get', ['name' => $name], $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        if (isset(self::$publicPropertiese9e8a[$name])) {
            return $this->valueHolder3bf22->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3bf22;

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

        $targetObject = $this->valueHolder3bf22;
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
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3bf22;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3bf22;
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
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, '__isset', array('name' => $name), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3bf22;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3bf22;
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
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, '__unset', array('name' => $name), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3bf22;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3bf22;
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
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, '__clone', array(), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        $this->valueHolder3bf22 = clone $this->valueHolder3bf22;
    }

    public function __sleep()
    {
        $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, '__sleep', array(), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;

        return array('valueHolder3bf22');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer00973 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer00973;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer00973 && ($this->initializer00973->__invoke($valueHolder3bf22, $this, 'initializeProxy', array(), $this->initializer00973) || 1) && $this->valueHolder3bf22 = $valueHolder3bf22;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3bf22;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3bf22;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
