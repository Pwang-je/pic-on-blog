<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteModulePartConfig");
$query->setAction("delete");
$query->setPriority("");

${'module45_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module45_argument'}->checkNotNull();
${'module45_argument'}->createConditionValue();
if(!${'module45_argument'}->isValid()) return ${'module45_argument'}->getErrorMessage();
if(${'module45_argument'} !== null) ${'module45_argument'}->setColumnType('varchar');

${'module_srl46_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl46_argument'}->checkNotNull();
${'module_srl46_argument'}->createConditionValue();
if(!${'module_srl46_argument'}->isValid()) return ${'module_srl46_argument'}->getErrorMessage();
if(${'module_srl46_argument'} !== null) ${'module_srl46_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_module_part_config`', '`module_part_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module45_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl46_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>