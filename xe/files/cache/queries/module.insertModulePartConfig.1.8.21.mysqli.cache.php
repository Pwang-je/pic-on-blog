<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModulePartConfig");
$query->setAction("insert");
$query->setPriority("");

${'module47_argument'} = new Argument('module', $args->{'module'});
${'module47_argument'}->checkNotNull();
if(!${'module47_argument'}->isValid()) return ${'module47_argument'}->getErrorMessage();
if(${'module47_argument'} !== null) ${'module47_argument'}->setColumnType('varchar');

${'module_srl48_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl48_argument'}->checkNotNull();
if(!${'module_srl48_argument'}->isValid()) return ${'module_srl48_argument'}->getErrorMessage();
if(${'module_srl48_argument'} !== null) ${'module_srl48_argument'}->setColumnType('number');
if(isset($args->config)) {
${'config49_argument'} = new Argument('config', $args->{'config'});
if(!${'config49_argument'}->isValid()) return ${'config49_argument'}->getErrorMessage();
} else
${'config49_argument'} = NULL;if(${'config49_argument'} !== null) ${'config49_argument'}->setColumnType('text');

${'regdate50_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate50_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate50_argument'}->isValid()) return ${'regdate50_argument'}->getErrorMessage();
if(${'regdate50_argument'} !== null) ${'regdate50_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`module`', ${'module47_argument'})
,new InsertExpression('`module_srl`', ${'module_srl48_argument'})
,new InsertExpression('`config`', ${'config49_argument'})
,new InsertExpression('`regdate`', ${'regdate50_argument'})
));
$query->setTables(array(
new Table('`xe_module_part_config`', '`module_part_config`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>