<?php

namespace Container4x34AxR;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'getConnection', array(), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'getMetadataFactory', array(), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'getExpressionBuilder', array(), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'beginTransaction', array(), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'getCache', array(), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->getCache();
    }

    public function transactional($func)
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'transactional', array('func' => $func), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'wrapInTransaction', array('func' => $func), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'commit', array(), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->commit();
    }

    public function rollback()
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'rollback', array(), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'getClassMetadata', array('className' => $className), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'createQuery', array('dql' => $dql), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'createNamedQuery', array('name' => $name), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'createQueryBuilder', array(), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'flush', array('entity' => $entity), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'clear', array('entityName' => $entityName), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->clear($entityName);
    }

    public function close()
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'close', array(), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->close();
    }

    public function persist($entity)
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'persist', array('entity' => $entity), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'remove', array('entity' => $entity), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'refresh', array('entity' => $entity), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'detach', array('entity' => $entity), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'merge', array('entity' => $entity), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'getRepository', array('entityName' => $entityName), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'contains', array('entity' => $entity), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'getEventManager', array(), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'getConfiguration', array(), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'isOpen', array(), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'getUnitOfWork', array(), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'getProxyFactory', array(), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'initializeObject', array('obj' => $obj), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'getFilters', array(), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'isFiltersStateClean', array(), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, 'hasFilters', array(), $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        return $this->valueHolder47392->hasFilters();
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

        $instance->initializer74de1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder47392) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder47392 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder47392->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer74de1 && ($this->initializer74de1->__invoke($valueHolder47392, $this, '__get', ['name' => $name], $this->initializer74de1) || 1) && $this->valueHolder47392 = $valueHolder47392;

        if (isset(self::$publicPropertiesb6eeb[$name])) {
            return $this->valueHolder47392->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
