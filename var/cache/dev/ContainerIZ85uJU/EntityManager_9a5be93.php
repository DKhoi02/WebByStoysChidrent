<?php

namespace ContainerIZ85uJU;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder70aa1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb42d4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties62daa = [
        
    ];

    public function getConnection()
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'getConnection', array(), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'getMetadataFactory', array(), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'getExpressionBuilder', array(), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'beginTransaction', array(), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'getCache', array(), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'transactional', array('func' => $func), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'commit', array(), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->commit();
    }

    public function rollback()
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'rollback', array(), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'getClassMetadata', array('className' => $className), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'createQuery', array('dql' => $dql), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'createNamedQuery', array('name' => $name), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'createQueryBuilder', array(), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'flush', array('entity' => $entity), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'clear', array('entityName' => $entityName), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->clear($entityName);
    }

    public function close()
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'close', array(), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->close();
    }

    public function persist($entity)
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'persist', array('entity' => $entity), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'remove', array('entity' => $entity), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'refresh', array('entity' => $entity), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'detach', array('entity' => $entity), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'merge', array('entity' => $entity), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'contains', array('entity' => $entity), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'getEventManager', array(), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'getConfiguration', array(), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'isOpen', array(), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'getUnitOfWork', array(), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'getProxyFactory', array(), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'initializeObject', array('obj' => $obj), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'getFilters', array(), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'isFiltersStateClean', array(), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'hasFilters', array(), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return $this->valueHolder70aa1->hasFilters();
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

        $instance->initializerb42d4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder70aa1) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder70aa1 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder70aa1->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, '__get', ['name' => $name], $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        if (isset(self::$publicProperties62daa[$name])) {
            return $this->valueHolder70aa1->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70aa1;

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

        $targetObject = $this->valueHolder70aa1;
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
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70aa1;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder70aa1;
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
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, '__isset', array('name' => $name), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70aa1;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder70aa1;
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
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, '__unset', array('name' => $name), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70aa1;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder70aa1;
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
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, '__clone', array(), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        $this->valueHolder70aa1 = clone $this->valueHolder70aa1;
    }

    public function __sleep()
    {
        $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, '__sleep', array(), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;

        return array('valueHolder70aa1');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb42d4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb42d4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb42d4 && ($this->initializerb42d4->__invoke($valueHolder70aa1, $this, 'initializeProxy', array(), $this->initializerb42d4) || 1) && $this->valueHolder70aa1 = $valueHolder70aa1;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder70aa1;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder70aa1;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
