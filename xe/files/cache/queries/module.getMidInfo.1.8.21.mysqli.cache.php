<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMidInfo");
$query->setAction("select");
$query->setPriority("");
if(isset($args->mid)) {
${'mid72_argument'} = new ConditionArgument('mid', $args->mid, 'equal');
${'mid72_argument'}->createConditionValue();
if(!${'mid72_argument'}->isValid()) return ${'mid72_argument'}->getErrorMessage();
} else
${'mid72_argument'} = NULL;if(${'mid72_argument'} !== null) ${'mid72_argument'}->setColumnType('varchar');
if(isset($args->module_srl)) {
${'module_srl73_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl73_argument'}->createConditionValue();
if(!${'module_srl73_argument'}->isValid()) return ${'module_srl73_argument'}->getErrorMessage();
} else
${'module_srl73_argument'} = NULL;if(${'module_srl73_argument'} !== null) ${'module_srl73_argument'}->setColumnType('number');
if(isset($args->site_srl)) {
${'site_srl74_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl74_argument'}->createConditionValue();
if(!${'site_srl74_argument'}->isValid()) return ${'site_srl74_argument'}->getErrorMessage();
} else
${'site_srl74_argument'} = NULL;if(${'site_srl74_argument'} !== null) ${'site_srl74_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`mid`',$mid72_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl73_argument,"equal", 'and')
,new ConditionWithArgument('`site_srl`',$site_srl74_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>