<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder670a9 = null;
    private $initializer36143 = null;
    private static $publicProperties3be7f = [
        
    ];
    public function getConnection()
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'getConnection', array(), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'getMetadataFactory', array(), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'getExpressionBuilder', array(), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'beginTransaction', array(), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'getCache', array(), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->getCache();
    }
    public function transactional($func)
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'transactional', array('func' => $func), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'wrapInTransaction', array('func' => $func), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'commit', array(), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->commit();
    }
    public function rollback()
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'rollback', array(), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'getClassMetadata', array('className' => $className), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'createQuery', array('dql' => $dql), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'createNamedQuery', array('name' => $name), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'createQueryBuilder', array(), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'flush', array('entity' => $entity), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'clear', array('entityName' => $entityName), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->clear($entityName);
    }
    public function close()
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'close', array(), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->close();
    }
    public function persist($entity)
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'persist', array('entity' => $entity), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'remove', array('entity' => $entity), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'refresh', array('entity' => $entity), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'detach', array('entity' => $entity), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'merge', array('entity' => $entity), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'getRepository', array('entityName' => $entityName), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'contains', array('entity' => $entity), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'getEventManager', array(), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'getConfiguration', array(), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'isOpen', array(), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'getUnitOfWork', array(), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'getProxyFactory', array(), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'initializeObject', array('obj' => $obj), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'getFilters', array(), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'isFiltersStateClean', array(), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'hasFilters', array(), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return $this->valueHolder670a9->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer36143 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder670a9) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder670a9 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder670a9->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, '__get', ['name' => $name], $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        if (isset(self::$publicProperties3be7f[$name])) {
            return $this->valueHolder670a9->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder670a9;
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
        $targetObject = $this->valueHolder670a9;
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
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder670a9;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder670a9;
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
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, '__isset', array('name' => $name), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder670a9;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder670a9;
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
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, '__unset', array('name' => $name), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder670a9;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder670a9;
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
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, '__clone', array(), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        $this->valueHolder670a9 = clone $this->valueHolder670a9;
    }
    public function __sleep()
    {
        $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, '__sleep', array(), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
        return array('valueHolder670a9');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer36143 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer36143;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer36143 && ($this->initializer36143->__invoke($valueHolder670a9, $this, 'initializeProxy', array(), $this->initializer36143) || 1) && $this->valueHolder670a9 = $valueHolder670a9;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder670a9;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder670a9;
    }
}
