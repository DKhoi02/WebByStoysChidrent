<?php

namespace ContainerOWBF5j9;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder59f1b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera44c0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties60851 = [
        
    ];

    public function getConnection()
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'getConnection', array(), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'getMetadataFactory', array(), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'getExpressionBuilder', array(), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'beginTransaction', array(), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'getCache', array(), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->getCache();
    }

    public function transactional($func)
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'transactional', array('func' => $func), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'wrapInTransaction', array('func' => $func), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'commit', array(), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->commit();
    }

    public function rollback()
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'rollback', array(), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'getClassMetadata', array('className' => $className), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'createQuery', array('dql' => $dql), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'createNamedQuery', array('name' => $name), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'createQueryBuilder', array(), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'flush', array('entity' => $entity), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'clear', array('entityName' => $entityName), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->clear($entityName);
    }

    public function close()
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'close', array(), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->close();
    }

    public function persist($entity)
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'persist', array('entity' => $entity), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'remove', array('entity' => $entity), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'refresh', array('entity' => $entity), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'detach', array('entity' => $entity), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'merge', array('entity' => $entity), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'getRepository', array('entityName' => $entityName), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'contains', array('entity' => $entity), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'getEventManager', array(), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'getConfiguration', array(), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'isOpen', array(), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'getUnitOfWork', array(), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'getProxyFactory', array(), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'initializeObject', array('obj' => $obj), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'getFilters', array(), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'isFiltersStateClean', array(), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'hasFilters', array(), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return $this->valueHolder59f1b->hasFilters();
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

        $instance->initializera44c0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder59f1b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder59f1b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder59f1b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, '__get', ['name' => $name], $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        if (isset(self::$publicProperties60851[$name])) {
            return $this->valueHolder59f1b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59f1b;

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

        $targetObject = $this->valueHolder59f1b;
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
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59f1b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder59f1b;
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
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, '__isset', array('name' => $name), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59f1b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder59f1b;
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
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, '__unset', array('name' => $name), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59f1b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder59f1b;
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
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, '__clone', array(), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        $this->valueHolder59f1b = clone $this->valueHolder59f1b;
    }

    public function __sleep()
    {
        $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, '__sleep', array(), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;

        return array('valueHolder59f1b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera44c0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera44c0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera44c0 && ($this->initializera44c0->__invoke($valueHolder59f1b, $this, 'initializeProxy', array(), $this->initializera44c0) || 1) && $this->valueHolder59f1b = $valueHolder59f1b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder59f1b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder59f1b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
