<?php

namespace ContainerCSt2LnA;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6dbb9 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere3cc0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties87f18 = [
        
    ];

    public function getConnection()
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'getConnection', array(), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'getMetadataFactory', array(), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'getExpressionBuilder', array(), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'beginTransaction', array(), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'getCache', array(), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->getCache();
    }

    public function transactional($func)
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'transactional', array('func' => $func), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'wrapInTransaction', array('func' => $func), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'commit', array(), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->commit();
    }

    public function rollback()
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'rollback', array(), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'getClassMetadata', array('className' => $className), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'createQuery', array('dql' => $dql), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'createNamedQuery', array('name' => $name), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'createQueryBuilder', array(), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'flush', array('entity' => $entity), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'clear', array('entityName' => $entityName), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->clear($entityName);
    }

    public function close()
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'close', array(), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->close();
    }

    public function persist($entity)
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'persist', array('entity' => $entity), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'remove', array('entity' => $entity), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'refresh', array('entity' => $entity), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'detach', array('entity' => $entity), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'merge', array('entity' => $entity), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'getRepository', array('entityName' => $entityName), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'contains', array('entity' => $entity), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'getEventManager', array(), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'getConfiguration', array(), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'isOpen', array(), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'getUnitOfWork', array(), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'getProxyFactory', array(), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'initializeObject', array('obj' => $obj), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'getFilters', array(), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'isFiltersStateClean', array(), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'hasFilters', array(), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return $this->valueHolder6dbb9->hasFilters();
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

        $instance->initializere3cc0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6dbb9) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6dbb9 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6dbb9->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, '__get', ['name' => $name], $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        if (isset(self::$publicProperties87f18[$name])) {
            return $this->valueHolder6dbb9->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6dbb9;

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

        $targetObject = $this->valueHolder6dbb9;
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
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6dbb9;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6dbb9;
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
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, '__isset', array('name' => $name), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6dbb9;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6dbb9;
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
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, '__unset', array('name' => $name), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6dbb9;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6dbb9;
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
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, '__clone', array(), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        $this->valueHolder6dbb9 = clone $this->valueHolder6dbb9;
    }

    public function __sleep()
    {
        $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, '__sleep', array(), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;

        return array('valueHolder6dbb9');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere3cc0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere3cc0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere3cc0 && ($this->initializere3cc0->__invoke($valueHolder6dbb9, $this, 'initializeProxy', array(), $this->initializere3cc0) || 1) && $this->valueHolder6dbb9 = $valueHolder6dbb9;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6dbb9;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6dbb9;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
