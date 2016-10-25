<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuByTitle");
$query->setAction("select");
$query->setPriority("");

${'title46_argument'} = new ConditionArgument('title', $args->title, 'in');
${'title46_argument'}->checkNotNull();
${'title46_argument'}->createConditionValue();
if(!${'title46_argument'}->isValid()) return ${'title46_argument'}->getErrorMessage();
if(${'title46_argument'} !== null) ${'title46_argument'}->setColumnType('varchar');

${'site_srl47_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl47_argument'}->ensureDefaultValue('0');
${'site_srl47_argument'}->createConditionValue();
if(!${'site_srl47_argument'}->isValid()) return ${'site_srl47_argument'}->getErrorMessage();
if(${'site_srl47_argument'} !== null) ${'site_srl47_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_menu`', '`menu`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`title`',$title46_argument,"in")
,new ConditionWithArgument('`site_srl`',$site_srl47_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>