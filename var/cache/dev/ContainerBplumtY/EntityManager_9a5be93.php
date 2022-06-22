<?php

namespace ContainerBplumtY;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb62bc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera1c6e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc33d2 = [
        
    ];

    public function getConnection()
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'getConnection', array(), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'getMetadataFactory', array(), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'getExpressionBuilder', array(), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'beginTransaction', array(), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'getCache', array(), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->getCache();
    }

    public function transactional($func)
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'transactional', array('func' => $func), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'wrapInTransaction', array('func' => $func), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'commit', array(), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->commit();
    }

    public function rollback()
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'rollback', array(), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'getClassMetadata', array('className' => $className), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'createQuery', array('dql' => $dql), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'createNamedQuery', array('name' => $name), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'createQueryBuilder', array(), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'flush', array('entity' => $entity), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'clear', array('entityName' => $entityName), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->clear($entityName);
    }

    public function close()
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'close', array(), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->close();
    }

    public function persist($entity)
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'persist', array('entity' => $entity), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'remove', array('entity' => $entity), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'refresh', array('entity' => $entity), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'detach', array('entity' => $entity), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'merge', array('entity' => $entity), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'getRepository', array('entityName' => $entityName), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'contains', array('entity' => $entity), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'getEventManager', array(), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'getConfiguration', array(), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'isOpen', array(), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'getUnitOfWork', array(), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'getProxyFactory', array(), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'initializeObject', array('obj' => $obj), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'getFilters', array(), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'isFiltersStateClean', array(), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'hasFilters', array(), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return $this->valueHolderb62bc->hasFilters();
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

        $instance->initializera1c6e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb62bc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb62bc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb62bc->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, '__get', ['name' => $name], $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        if (isset(self::$publicPropertiesc33d2[$name])) {
            return $this->valueHolderb62bc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb62bc;

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

        $targetObject = $this->valueHolderb62bc;
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
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb62bc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb62bc;
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
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, '__isset', array('name' => $name), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb62bc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb62bc;
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
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, '__unset', array('name' => $name), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb62bc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb62bc;
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
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, '__clone', array(), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        $this->valueHolderb62bc = clone $this->valueHolderb62bc;
    }

    public function __sleep()
    {
        $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, '__sleep', array(), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;

        return array('valueHolderb62bc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera1c6e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera1c6e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera1c6e && ($this->initializera1c6e->__invoke($valueHolderb62bc, $this, 'initializeProxy', array(), $this->initializera1c6e) || 1) && $this->valueHolderb62bc = $valueHolderb62bc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb62bc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb62bc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
