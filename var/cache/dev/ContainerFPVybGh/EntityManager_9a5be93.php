<?php

namespace ContainerFPVybGh;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera705f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb336a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties91cb9 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'getConnection', array(), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'getMetadataFactory', array(), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'getExpressionBuilder', array(), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'beginTransaction', array(), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'getCache', array(), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'transactional', array('func' => $func), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'commit', array(), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->commit();
    }

    public function rollback()
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'rollback', array(), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'getClassMetadata', array('className' => $className), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'createQuery', array('dql' => $dql), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'createNamedQuery', array('name' => $name), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'createQueryBuilder', array(), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'flush', array('entity' => $entity), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'clear', array('entityName' => $entityName), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->clear($entityName);
    }

    public function close()
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'close', array(), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->close();
    }

    public function persist($entity)
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'persist', array('entity' => $entity), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'remove', array('entity' => $entity), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'refresh', array('entity' => $entity), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'detach', array('entity' => $entity), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'merge', array('entity' => $entity), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'contains', array('entity' => $entity), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'getEventManager', array(), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'getConfiguration', array(), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'isOpen', array(), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'getUnitOfWork', array(), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'getProxyFactory', array(), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'initializeObject', array('obj' => $obj), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'getFilters', array(), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'isFiltersStateClean', array(), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'hasFilters', array(), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return $this->valueHoldera705f->hasFilters();
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

        $instance->initializerb336a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera705f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera705f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera705f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, '__get', ['name' => $name], $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        if (isset(self::$publicProperties91cb9[$name])) {
            return $this->valueHoldera705f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera705f;

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

        $targetObject = $this->valueHoldera705f;
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
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera705f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera705f;
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
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, '__isset', array('name' => $name), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera705f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera705f;
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
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, '__unset', array('name' => $name), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera705f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera705f;
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
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, '__clone', array(), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        $this->valueHoldera705f = clone $this->valueHoldera705f;
    }

    public function __sleep()
    {
        $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, '__sleep', array(), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;

        return array('valueHoldera705f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb336a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb336a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb336a && ($this->initializerb336a->__invoke($valueHoldera705f, $this, 'initializeProxy', array(), $this->initializerb336a) || 1) && $this->valueHoldera705f = $valueHoldera705f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera705f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera705f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
