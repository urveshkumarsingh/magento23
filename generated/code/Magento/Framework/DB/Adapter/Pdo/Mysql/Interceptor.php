<?php
namespace Magento\Framework\DB\Adapter\Pdo\Mysql;

/**
 * Interceptor class for @see \Magento\Framework\DB\Adapter\Pdo\Mysql
 */
class Interceptor extends \Magento\Framework\DB\Adapter\Pdo\Mysql implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Stdlib\StringUtils $string, \Magento\Framework\Stdlib\DateTime $dateTime, \Magento\Framework\DB\LoggerInterface $logger, \Magento\Framework\DB\SelectFactory $selectFactory, array $config = [], ?\Magento\Framework\Serialize\SerializerInterface $serializer = null)
    {
        $this->___init();
        parent::__construct($string, $dateTime, $logger, $selectFactory, $config, $serializer);
    }

    /**
     * {@inheritdoc}
     */
    public function beginTransaction()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beginTransaction');
        if (!$pluginInfo) {
            return parent::beginTransaction();
        } else {
            return $this->___callPlugins('beginTransaction', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'commit');
        if (!$pluginInfo) {
            return parent::commit();
        } else {
            return $this->___callPlugins('commit', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function rollBack()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'rollBack');
        if (!$pluginInfo) {
            return parent::rollBack();
        } else {
            return $this->___callPlugins('rollBack', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTransactionLevel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTransactionLevel');
        if (!$pluginInfo) {
            return parent::getTransactionLevel();
        } else {
            return $this->___callPlugins('getTransactionLevel', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertDate($date)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertDate');
        if (!$pluginInfo) {
            return parent::convertDate($date);
        } else {
            return $this->___callPlugins('convertDate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertDateTime($datetime)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertDateTime');
        if (!$pluginInfo) {
            return parent::convertDateTime($datetime);
        } else {
            return $this->___callPlugins('convertDateTime', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function rawQuery($sql)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'rawQuery');
        if (!$pluginInfo) {
            return parent::rawQuery($sql);
        } else {
            return $this->___callPlugins('rawQuery', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function rawFetchRow($sql, $field = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'rawFetchRow');
        if (!$pluginInfo) {
            return parent::rawFetchRow($sql, $field);
        } else {
            return $this->___callPlugins('rawFetchRow', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function query($sql, $bind = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'query');
        if (!$pluginInfo) {
            return parent::query($sql, $bind);
        } else {
            return $this->___callPlugins('query', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function multiQuery($sql, $bind = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'multiQuery');
        if (!$pluginInfo) {
            return parent::multiQuery($sql, $bind);
        } else {
            return $this->___callPlugins('multiQuery', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function proccessBindCallback($matches)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'proccessBindCallback');
        if (!$pluginInfo) {
            return parent::proccessBindCallback($matches);
        } else {
            return $this->___callPlugins('proccessBindCallback', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setQueryHook($hook)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setQueryHook');
        if (!$pluginInfo) {
            return parent::setQueryHook($hook);
        } else {
            return $this->___callPlugins('setQueryHook', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function dropForeignKey($tableName, $fkName, $schemaName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dropForeignKey');
        if (!$pluginInfo) {
            return parent::dropForeignKey($tableName, $fkName, $schemaName);
        } else {
            return $this->___callPlugins('dropForeignKey', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function purgeOrphanRecords($tableName, $columnName, $refTableName, $refColumnName, $onDelete = 'CASCADE')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'purgeOrphanRecords');
        if (!$pluginInfo) {
            return parent::purgeOrphanRecords($tableName, $columnName, $refTableName, $refColumnName, $onDelete);
        } else {
            return $this->___callPlugins('purgeOrphanRecords', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function tableColumnExists($tableName, $columnName, $schemaName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'tableColumnExists');
        if (!$pluginInfo) {
            return parent::tableColumnExists($tableName, $columnName, $schemaName);
        } else {
            return $this->___callPlugins('tableColumnExists', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addColumn($tableName, $columnName, $definition, $schemaName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addColumn');
        if (!$pluginInfo) {
            return parent::addColumn($tableName, $columnName, $definition, $schemaName);
        } else {
            return $this->___callPlugins('addColumn', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function dropColumn($tableName, $columnName, $schemaName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dropColumn');
        if (!$pluginInfo) {
            return parent::dropColumn($tableName, $columnName, $schemaName);
        } else {
            return $this->___callPlugins('dropColumn', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function changeColumn($tableName, $oldColumnName, $newColumnName, $definition, $flushData = false, $schemaName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'changeColumn');
        if (!$pluginInfo) {
            return parent::changeColumn($tableName, $oldColumnName, $newColumnName, $definition, $flushData, $schemaName);
        } else {
            return $this->___callPlugins('changeColumn', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function modifyColumn($tableName, $columnName, $definition, $flushData = false, $schemaName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'modifyColumn');
        if (!$pluginInfo) {
            return parent::modifyColumn($tableName, $columnName, $definition, $flushData, $schemaName);
        } else {
            return $this->___callPlugins('modifyColumn', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function showTableStatus($tableName, $schemaName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'showTableStatus');
        if (!$pluginInfo) {
            return parent::showTableStatus($tableName, $schemaName);
        } else {
            return $this->___callPlugins('showTableStatus', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCreateTable($tableName, $schemaName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCreateTable');
        if (!$pluginInfo) {
            return parent::getCreateTable($tableName, $schemaName);
        } else {
            return $this->___callPlugins('getCreateTable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getForeignKeys($tableName, $schemaName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getForeignKeys');
        if (!$pluginInfo) {
            return parent::getForeignKeys($tableName, $schemaName);
        } else {
            return $this->___callPlugins('getForeignKeys', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getForeignKeysTree()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getForeignKeysTree');
        if (!$pluginInfo) {
            return parent::getForeignKeysTree();
        } else {
            return $this->___callPlugins('getForeignKeysTree', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function modifyTables($tables)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'modifyTables');
        if (!$pluginInfo) {
            return parent::modifyTables($tables);
        } else {
            return $this->___callPlugins('modifyTables', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIndexList($tableName, $schemaName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIndexList');
        if (!$pluginInfo) {
            return parent::getIndexList($tableName, $schemaName);
        } else {
            return $this->___callPlugins('getIndexList', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function select()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'select');
        if (!$pluginInfo) {
            return parent::select();
        } else {
            return $this->___callPlugins('select', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function quoteInto($text, $value, $type = null, $count = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'quoteInto');
        if (!$pluginInfo) {
            return parent::quoteInto($text, $value, $type, $count);
        } else {
            return $this->___callPlugins('quoteInto', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function loadDdlCache($tableCacheKey, $ddlType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadDdlCache');
        if (!$pluginInfo) {
            return parent::loadDdlCache($tableCacheKey, $ddlType);
        } else {
            return $this->___callPlugins('loadDdlCache', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function saveDdlCache($tableCacheKey, $ddlType, $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveDdlCache');
        if (!$pluginInfo) {
            return parent::saveDdlCache($tableCacheKey, $ddlType, $data);
        } else {
            return $this->___callPlugins('saveDdlCache', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function resetDdlCache($tableName = null, $schemaName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resetDdlCache');
        if (!$pluginInfo) {
            return parent::resetDdlCache($tableName, $schemaName);
        } else {
            return $this->___callPlugins('resetDdlCache', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function disallowDdlCache()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'disallowDdlCache');
        if (!$pluginInfo) {
            return parent::disallowDdlCache();
        } else {
            return $this->___callPlugins('disallowDdlCache', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function allowDdlCache()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'allowDdlCache');
        if (!$pluginInfo) {
            return parent::allowDdlCache();
        } else {
            return $this->___callPlugins('allowDdlCache', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function describeTable($tableName, $schemaName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'describeTable');
        if (!$pluginInfo) {
            return parent::describeTable($tableName, $schemaName);
        } else {
            return $this->___callPlugins('describeTable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getColumnCreateByDescribe($columnData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getColumnCreateByDescribe');
        if (!$pluginInfo) {
            return parent::getColumnCreateByDescribe($columnData);
        } else {
            return $this->___callPlugins('getColumnCreateByDescribe', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function createTableByDdl($tableName, $newTableName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createTableByDdl');
        if (!$pluginInfo) {
            return parent::createTableByDdl($tableName, $newTableName);
        } else {
            return $this->___callPlugins('createTableByDdl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function modifyColumnByDdl($tableName, $columnName, $definition, $flushData = false, $schemaName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'modifyColumnByDdl');
        if (!$pluginInfo) {
            return parent::modifyColumnByDdl($tableName, $columnName, $definition, $flushData, $schemaName);
        } else {
            return $this->___callPlugins('modifyColumnByDdl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function changeTableEngine($tableName, $engine, $schemaName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'changeTableEngine');
        if (!$pluginInfo) {
            return parent::changeTableEngine($tableName, $engine, $schemaName);
        } else {
            return $this->___callPlugins('changeTableEngine', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function changeTableComment($tableName, $comment, $schemaName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'changeTableComment');
        if (!$pluginInfo) {
            return parent::changeTableComment($tableName, $comment, $schemaName);
        } else {
            return $this->___callPlugins('changeTableComment', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function insertForce($table, array $bind)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'insertForce');
        if (!$pluginInfo) {
            return parent::insertForce($table, $bind);
        } else {
            return $this->___callPlugins('insertForce', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function insertOnDuplicate($table, array $data, array $fields = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'insertOnDuplicate');
        if (!$pluginInfo) {
            return parent::insertOnDuplicate($table, $data, $fields);
        } else {
            return $this->___callPlugins('insertOnDuplicate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function insertMultiple($table, array $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'insertMultiple');
        if (!$pluginInfo) {
            return parent::insertMultiple($table, $data);
        } else {
            return $this->___callPlugins('insertMultiple', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function insertArray($table, array $columns, array $data, $strategy = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'insertArray');
        if (!$pluginInfo) {
            return parent::insertArray($table, $columns, $data, $strategy);
        } else {
            return $this->___callPlugins('insertArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCacheAdapter(\Magento\Framework\Cache\FrontendInterface $cacheAdapter)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCacheAdapter');
        if (!$pluginInfo) {
            return parent::setCacheAdapter($cacheAdapter);
        } else {
            return $this->___callPlugins('setCacheAdapter', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function newTable($tableName = null, $schemaName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'newTable');
        if (!$pluginInfo) {
            return parent::newTable($tableName, $schemaName);
        } else {
            return $this->___callPlugins('newTable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function createTable(\Magento\Framework\DB\Ddl\Table $table)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createTable');
        if (!$pluginInfo) {
            return parent::createTable($table);
        } else {
            return $this->___callPlugins('createTable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function createTemporaryTable(\Magento\Framework\DB\Ddl\Table $table)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createTemporaryTable');
        if (!$pluginInfo) {
            return parent::createTemporaryTable($table);
        } else {
            return $this->___callPlugins('createTemporaryTable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function createTemporaryTableLike($temporaryTableName, $originTableName, $ifNotExists = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createTemporaryTableLike');
        if (!$pluginInfo) {
            return parent::createTemporaryTableLike($temporaryTableName, $originTableName, $ifNotExists);
        } else {
            return $this->___callPlugins('createTemporaryTableLike', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function renameTablesBatch(array $tablePairs)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'renameTablesBatch');
        if (!$pluginInfo) {
            return parent::renameTablesBatch($tablePairs);
        } else {
            return $this->___callPlugins('renameTablesBatch', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getColumnDefinitionFromDescribe($options, $ddlType = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getColumnDefinitionFromDescribe');
        if (!$pluginInfo) {
            return parent::getColumnDefinitionFromDescribe($options, $ddlType);
        } else {
            return $this->___callPlugins('getColumnDefinitionFromDescribe', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function dropTable($tableName, $schemaName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dropTable');
        if (!$pluginInfo) {
            return parent::dropTable($tableName, $schemaName);
        } else {
            return $this->___callPlugins('dropTable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function dropTemporaryTable($tableName, $schemaName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dropTemporaryTable');
        if (!$pluginInfo) {
            return parent::dropTemporaryTable($tableName, $schemaName);
        } else {
            return $this->___callPlugins('dropTemporaryTable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function truncateTable($tableName, $schemaName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'truncateTable');
        if (!$pluginInfo) {
            return parent::truncateTable($tableName, $schemaName);
        } else {
            return $this->___callPlugins('truncateTable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isTableExists($tableName, $schemaName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isTableExists');
        if (!$pluginInfo) {
            return parent::isTableExists($tableName, $schemaName);
        } else {
            return $this->___callPlugins('isTableExists', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function renameTable($oldTableName, $newTableName, $schemaName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'renameTable');
        if (!$pluginInfo) {
            return parent::renameTable($oldTableName, $newTableName, $schemaName);
        } else {
            return $this->___callPlugins('renameTable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addIndex($tableName, $indexName, $fields, $indexType = 'index', $schemaName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addIndex');
        if (!$pluginInfo) {
            return parent::addIndex($tableName, $indexName, $fields, $indexType, $schemaName);
        } else {
            return $this->___callPlugins('addIndex', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function dropIndex($tableName, $keyName, $schemaName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dropIndex');
        if (!$pluginInfo) {
            return parent::dropIndex($tableName, $keyName, $schemaName);
        } else {
            return $this->___callPlugins('dropIndex', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addForeignKey($fkName, $tableName, $columnName, $refTableName, $refColumnName, $onDelete = 'CASCADE', $purge = false, $schemaName = null, $refSchemaName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addForeignKey');
        if (!$pluginInfo) {
            return parent::addForeignKey($fkName, $tableName, $columnName, $refTableName, $refColumnName, $onDelete, $purge, $schemaName, $refSchemaName);
        } else {
            return $this->___callPlugins('addForeignKey', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function formatDate($date, $includeTime = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'formatDate');
        if (!$pluginInfo) {
            return parent::formatDate($date, $includeTime);
        } else {
            return $this->___callPlugins('formatDate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function startSetup()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'startSetup');
        if (!$pluginInfo) {
            return parent::startSetup();
        } else {
            return $this->___callPlugins('startSetup', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function endSetup()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'endSetup');
        if (!$pluginInfo) {
            return parent::endSetup();
        } else {
            return $this->___callPlugins('endSetup', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function prepareSqlCondition($fieldName, $condition)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareSqlCondition');
        if (!$pluginInfo) {
            return parent::prepareSqlCondition($fieldName, $condition);
        } else {
            return $this->___callPlugins('prepareSqlCondition', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function prepareColumnValue(array $column, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareColumnValue');
        if (!$pluginInfo) {
            return parent::prepareColumnValue($column, $value);
        } else {
            return $this->___callPlugins('prepareColumnValue', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCheckSql($expression, $true, $false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCheckSql');
        if (!$pluginInfo) {
            return parent::getCheckSql($expression, $true, $false);
        } else {
            return $this->___callPlugins('getCheckSql', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIfNullSql($expression, $value = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIfNullSql');
        if (!$pluginInfo) {
            return parent::getIfNullSql($expression, $value);
        } else {
            return $this->___callPlugins('getIfNullSql', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCaseSql($valueName, $casesResults, $defaultValue = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCaseSql');
        if (!$pluginInfo) {
            return parent::getCaseSql($valueName, $casesResults, $defaultValue);
        } else {
            return $this->___callPlugins('getCaseSql', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getConcatSql(array $data, $separator = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConcatSql');
        if (!$pluginInfo) {
            return parent::getConcatSql($data, $separator);
        } else {
            return $this->___callPlugins('getConcatSql', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLengthSql($string)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLengthSql');
        if (!$pluginInfo) {
            return parent::getLengthSql($string);
        } else {
            return $this->___callPlugins('getLengthSql', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLeastSql(array $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLeastSql');
        if (!$pluginInfo) {
            return parent::getLeastSql($data);
        } else {
            return $this->___callPlugins('getLeastSql', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getGreatestSql(array $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGreatestSql');
        if (!$pluginInfo) {
            return parent::getGreatestSql($data);
        } else {
            return $this->___callPlugins('getGreatestSql', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDateAddSql($date, $interval, $unit)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDateAddSql');
        if (!$pluginInfo) {
            return parent::getDateAddSql($date, $interval, $unit);
        } else {
            return $this->___callPlugins('getDateAddSql', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDateSubSql($date, $interval, $unit)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDateSubSql');
        if (!$pluginInfo) {
            return parent::getDateSubSql($date, $interval, $unit);
        } else {
            return $this->___callPlugins('getDateSubSql', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDateFormatSql($date, $format)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDateFormatSql');
        if (!$pluginInfo) {
            return parent::getDateFormatSql($date, $format);
        } else {
            return $this->___callPlugins('getDateFormatSql', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDatePartSql($date)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDatePartSql');
        if (!$pluginInfo) {
            return parent::getDatePartSql($date);
        } else {
            return $this->___callPlugins('getDatePartSql', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSubstringSql($stringExpression, $pos, $len = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSubstringSql');
        if (!$pluginInfo) {
            return parent::getSubstringSql($stringExpression, $pos, $len);
        } else {
            return $this->___callPlugins('getSubstringSql', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getStandardDeviationSql($expressionField)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStandardDeviationSql');
        if (!$pluginInfo) {
            return parent::getStandardDeviationSql($expressionField);
        } else {
            return $this->___callPlugins('getStandardDeviationSql', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDateExtractSql($date, $unit)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDateExtractSql');
        if (!$pluginInfo) {
            return parent::getDateExtractSql($date, $unit);
        } else {
            return $this->___callPlugins('getDateExtractSql', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTableName($tableName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTableName');
        if (!$pluginInfo) {
            return parent::getTableName($tableName);
        } else {
            return $this->___callPlugins('getTableName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTriggerName($tableName, $time, $event)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTriggerName');
        if (!$pluginInfo) {
            return parent::getTriggerName($tableName, $time, $event);
        } else {
            return $this->___callPlugins('getTriggerName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIndexName($tableName, $fields, $indexType = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIndexName');
        if (!$pluginInfo) {
            return parent::getIndexName($tableName, $fields, $indexType);
        } else {
            return $this->___callPlugins('getIndexName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getForeignKeyName($priTableName, $priColumnName, $refTableName, $refColumnName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getForeignKeyName');
        if (!$pluginInfo) {
            return parent::getForeignKeyName($priTableName, $priColumnName, $refTableName, $refColumnName);
        } else {
            return $this->___callPlugins('getForeignKeyName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function disableTableKeys($tableName, $schemaName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'disableTableKeys');
        if (!$pluginInfo) {
            return parent::disableTableKeys($tableName, $schemaName);
        } else {
            return $this->___callPlugins('disableTableKeys', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function enableTableKeys($tableName, $schemaName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'enableTableKeys');
        if (!$pluginInfo) {
            return parent::enableTableKeys($tableName, $schemaName);
        } else {
            return $this->___callPlugins('enableTableKeys', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function insertFromSelect(\Magento\Framework\DB\Select $select, $table, array $fields = [], $mode = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'insertFromSelect');
        if (!$pluginInfo) {
            return parent::insertFromSelect($select, $table, $fields, $mode);
        } else {
            return $this->___callPlugins('insertFromSelect', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function selectsByRange($rangeField, \Magento\Framework\DB\Select $select, $stepCount = 100)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'selectsByRange');
        if (!$pluginInfo) {
            return parent::selectsByRange($rangeField, $select, $stepCount);
        } else {
            return $this->___callPlugins('selectsByRange', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function updateFromSelect(\Magento\Framework\DB\Select $select, $table)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'updateFromSelect');
        if (!$pluginInfo) {
            return parent::updateFromSelect($select, $table);
        } else {
            return $this->___callPlugins('updateFromSelect', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function deleteFromSelect(\Magento\Framework\DB\Select $select, $table)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteFromSelect');
        if (!$pluginInfo) {
            return parent::deleteFromSelect($select, $table);
        } else {
            return $this->___callPlugins('deleteFromSelect', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTablesChecksum($tableNames, $schemaName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTablesChecksum');
        if (!$pluginInfo) {
            return parent::getTablesChecksum($tableNames, $schemaName);
        } else {
            return $this->___callPlugins('getTablesChecksum', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function supportStraightJoin()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'supportStraightJoin');
        if (!$pluginInfo) {
            return parent::supportStraightJoin();
        } else {
            return $this->___callPlugins('supportStraightJoin', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function orderRand(\Magento\Framework\DB\Select $select, $field = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'orderRand');
        if (!$pluginInfo) {
            return parent::orderRand($select, $field);
        } else {
            return $this->___callPlugins('orderRand', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function forUpdate($sql)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'forUpdate');
        if (!$pluginInfo) {
            return parent::forUpdate($sql);
        } else {
            return $this->___callPlugins('forUpdate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPrimaryKeyName($tableName, $schemaName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPrimaryKeyName');
        if (!$pluginInfo) {
            return parent::getPrimaryKeyName($tableName, $schemaName);
        } else {
            return $this->___callPlugins('getPrimaryKeyName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function decodeVarbinary($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'decodeVarbinary');
        if (!$pluginInfo) {
            return parent::decodeVarbinary($value);
        } else {
            return $this->___callPlugins('decodeVarbinary', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function createTrigger(\Magento\Framework\DB\Ddl\Trigger $trigger)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createTrigger');
        if (!$pluginInfo) {
            return parent::createTrigger($trigger);
        } else {
            return $this->___callPlugins('createTrigger', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function dropTrigger($triggerName, $schemaName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dropTrigger');
        if (!$pluginInfo) {
            return parent::dropTrigger($triggerName, $schemaName);
        } else {
            return $this->___callPlugins('dropTrigger', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTables($likeCondition = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTables');
        if (!$pluginInfo) {
            return parent::getTables($likeCondition);
        } else {
            return $this->___callPlugins('getTables', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAutoIncrementField($tableName, $schemaName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAutoIncrementField');
        if (!$pluginInfo) {
            return parent::getAutoIncrementField($tableName, $schemaName);
        } else {
            return $this->___callPlugins('getAutoIncrementField', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSchemaListener()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSchemaListener');
        if (!$pluginInfo) {
            return parent::getSchemaListener();
        } else {
            return $this->___callPlugins('getSchemaListener', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function closeConnection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'closeConnection');
        if (!$pluginInfo) {
            return parent::closeConnection();
        } else {
            return $this->___callPlugins('closeConnection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getQuoteIdentifierSymbol()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQuoteIdentifierSymbol');
        if (!$pluginInfo) {
            return parent::getQuoteIdentifierSymbol();
        } else {
            return $this->___callPlugins('getQuoteIdentifierSymbol', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listTables()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'listTables');
        if (!$pluginInfo) {
            return parent::listTables();
        } else {
            return $this->___callPlugins('listTables', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function limit($sql, $count, $offset = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'limit');
        if (!$pluginInfo) {
            return parent::limit($sql, $count, $offset);
        } else {
            return $this->___callPlugins('limit', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isConnected()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isConnected');
        if (!$pluginInfo) {
            return parent::isConnected();
        } else {
            return $this->___callPlugins('isConnected', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function prepare($sql)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepare');
        if (!$pluginInfo) {
            return parent::prepare($sql);
        } else {
            return $this->___callPlugins('prepare', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function lastInsertId($tableName = null, $primaryKey = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'lastInsertId');
        if (!$pluginInfo) {
            return parent::lastInsertId($tableName, $primaryKey);
        } else {
            return $this->___callPlugins('lastInsertId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function exec($sql)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'exec');
        if (!$pluginInfo) {
            return parent::exec($sql);
        } else {
            return $this->___callPlugins('exec', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setFetchMode($mode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setFetchMode');
        if (!$pluginInfo) {
            return parent::setFetchMode($mode);
        } else {
            return $this->___callPlugins('setFetchMode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function supportsParameters($type)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'supportsParameters');
        if (!$pluginInfo) {
            return parent::supportsParameters($type);
        } else {
            return $this->___callPlugins('supportsParameters', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getServerVersion()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getServerVersion');
        if (!$pluginInfo) {
            return parent::getServerVersion();
        } else {
            return $this->___callPlugins('getServerVersion', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getConnection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConnection');
        if (!$pluginInfo) {
            return parent::getConnection();
        } else {
            return $this->___callPlugins('getConnection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getConfig()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfig');
        if (!$pluginInfo) {
            return parent::getConfig();
        } else {
            return $this->___callPlugins('getConfig', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setProfiler($profiler)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setProfiler');
        if (!$pluginInfo) {
            return parent::setProfiler($profiler);
        } else {
            return $this->___callPlugins('setProfiler', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProfiler()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProfiler');
        if (!$pluginInfo) {
            return parent::getProfiler();
        } else {
            return $this->___callPlugins('getProfiler', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getStatementClass()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStatementClass');
        if (!$pluginInfo) {
            return parent::getStatementClass();
        } else {
            return $this->___callPlugins('getStatementClass', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setStatementClass($class)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStatementClass');
        if (!$pluginInfo) {
            return parent::setStatementClass($class);
        } else {
            return $this->___callPlugins('setStatementClass', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function insert($table, array $bind)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'insert');
        if (!$pluginInfo) {
            return parent::insert($table, $bind);
        } else {
            return $this->___callPlugins('insert', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function update($table, array $bind, $where = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'update');
        if (!$pluginInfo) {
            return parent::update($table, $bind, $where);
        } else {
            return $this->___callPlugins('update', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function delete($table, $where = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        if (!$pluginInfo) {
            return parent::delete($table, $where);
        } else {
            return $this->___callPlugins('delete', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFetchMode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFetchMode');
        if (!$pluginInfo) {
            return parent::getFetchMode();
        } else {
            return $this->___callPlugins('getFetchMode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function fetchAll($sql, $bind = [], $fetchMode = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'fetchAll');
        if (!$pluginInfo) {
            return parent::fetchAll($sql, $bind, $fetchMode);
        } else {
            return $this->___callPlugins('fetchAll', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function fetchRow($sql, $bind = [], $fetchMode = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'fetchRow');
        if (!$pluginInfo) {
            return parent::fetchRow($sql, $bind, $fetchMode);
        } else {
            return $this->___callPlugins('fetchRow', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function fetchAssoc($sql, $bind = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'fetchAssoc');
        if (!$pluginInfo) {
            return parent::fetchAssoc($sql, $bind);
        } else {
            return $this->___callPlugins('fetchAssoc', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function fetchCol($sql, $bind = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'fetchCol');
        if (!$pluginInfo) {
            return parent::fetchCol($sql, $bind);
        } else {
            return $this->___callPlugins('fetchCol', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function fetchPairs($sql, $bind = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'fetchPairs');
        if (!$pluginInfo) {
            return parent::fetchPairs($sql, $bind);
        } else {
            return $this->___callPlugins('fetchPairs', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function fetchOne($sql, $bind = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'fetchOne');
        if (!$pluginInfo) {
            return parent::fetchOne($sql, $bind);
        } else {
            return $this->___callPlugins('fetchOne', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function quote($value, $type = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'quote');
        if (!$pluginInfo) {
            return parent::quote($value, $type);
        } else {
            return $this->___callPlugins('quote', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function quoteIdentifier($ident, $auto = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'quoteIdentifier');
        if (!$pluginInfo) {
            return parent::quoteIdentifier($ident, $auto);
        } else {
            return $this->___callPlugins('quoteIdentifier', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function quoteColumnAs($ident, $alias, $auto = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'quoteColumnAs');
        if (!$pluginInfo) {
            return parent::quoteColumnAs($ident, $alias, $auto);
        } else {
            return $this->___callPlugins('quoteColumnAs', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function quoteTableAs($ident, $alias = null, $auto = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'quoteTableAs');
        if (!$pluginInfo) {
            return parent::quoteTableAs($ident, $alias, $auto);
        } else {
            return $this->___callPlugins('quoteTableAs', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function lastSequenceId($sequenceName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'lastSequenceId');
        if (!$pluginInfo) {
            return parent::lastSequenceId($sequenceName);
        } else {
            return $this->___callPlugins('lastSequenceId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function nextSequenceId($sequenceName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'nextSequenceId');
        if (!$pluginInfo) {
            return parent::nextSequenceId($sequenceName);
        } else {
            return $this->___callPlugins('nextSequenceId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function foldCase($key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'foldCase');
        if (!$pluginInfo) {
            return parent::foldCase($key);
        } else {
            return $this->___callPlugins('foldCase', func_get_args(), $pluginInfo);
        }
    }
}
