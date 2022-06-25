<?php

namespace ContainerRc1odlW;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'getConnection', array(), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'getMetadataFactory', array(), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'getExpressionBuilder', array(), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'beginTransaction', array(), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'getCache', array(), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'transactional', array('func' => $func), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'commit', array(), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->commit();
    }

    public function rollback()
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'rollback', array(), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'getClassMetadata', array('className' => $className), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'createQuery', array('dql' => $dql), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'createNamedQuery', array('name' => $name), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'createQueryBuilder', array(), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'flush', array('entity' => $entity), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'clear', array('entityName' => $entityName), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->clear($entityName);
    }

    public function close()
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'close', array(), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->close();
    }

    public function persist($entity)
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'persist', array('entity' => $entity), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'remove', array('entity' => $entity), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'refresh', array('entity' => $entity), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'detach', array('entity' => $entity), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'merge', array('entity' => $entity), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'contains', array('entity' => $entity), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'getEventManager', array(), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'getConfiguration', array(), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'isOpen', array(), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'getUnitOfWork', array(), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'getProxyFactory', array(), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'initializeObject', array('obj' => $obj), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'getFilters', array(), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'isFiltersStateClean', array(), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, 'hasFilters', array(), $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        return $this->valueHolder36570->hasFilters();
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

        $instance->initializerd2ad5 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder36570) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder36570 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder36570->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd2ad5 && ($this->initializerd2ad5->__invoke($valueHolder36570, $this, '__get', ['name' => $name], $this->initializerd2ad5) || 1) && $this->valueHolder36570 = $valueHolder36570;

        if (isset(self::$publicPropertiesd773e[$name])) {
            return $this->valueHolder36570->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
