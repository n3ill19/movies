<?php

namespace ContainerZ8CWTDd;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6c41d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer92c99 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties52133 = [
        
    ];

    public function getConnection()
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'getConnection', array(), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'getMetadataFactory', array(), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'getExpressionBuilder', array(), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'beginTransaction', array(), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'getCache', array(), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'transactional', array('func' => $func), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'commit', array(), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->commit();
    }

    public function rollback()
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'rollback', array(), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'getClassMetadata', array('className' => $className), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'createQuery', array('dql' => $dql), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'createNamedQuery', array('name' => $name), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'createQueryBuilder', array(), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'flush', array('entity' => $entity), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'clear', array('entityName' => $entityName), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->clear($entityName);
    }

    public function close()
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'close', array(), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->close();
    }

    public function persist($entity)
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'persist', array('entity' => $entity), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'remove', array('entity' => $entity), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'refresh', array('entity' => $entity), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'detach', array('entity' => $entity), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'merge', array('entity' => $entity), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'contains', array('entity' => $entity), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'getEventManager', array(), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'getConfiguration', array(), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'isOpen', array(), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'getUnitOfWork', array(), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'getProxyFactory', array(), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'initializeObject', array('obj' => $obj), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'getFilters', array(), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'isFiltersStateClean', array(), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'hasFilters', array(), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return $this->valueHolder6c41d->hasFilters();
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

        $instance->initializer92c99 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6c41d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6c41d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6c41d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, '__get', ['name' => $name], $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        if (isset(self::$publicProperties52133[$name])) {
            return $this->valueHolder6c41d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6c41d;

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

        $targetObject = $this->valueHolder6c41d;
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
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6c41d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6c41d;
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
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, '__isset', array('name' => $name), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6c41d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6c41d;
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
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, '__unset', array('name' => $name), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6c41d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6c41d;
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
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, '__clone', array(), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        $this->valueHolder6c41d = clone $this->valueHolder6c41d;
    }

    public function __sleep()
    {
        $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, '__sleep', array(), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;

        return array('valueHolder6c41d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer92c99 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer92c99;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer92c99 && ($this->initializer92c99->__invoke($valueHolder6c41d, $this, 'initializeProxy', array(), $this->initializer92c99) || 1) && $this->valueHolder6c41d = $valueHolder6c41d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6c41d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6c41d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
