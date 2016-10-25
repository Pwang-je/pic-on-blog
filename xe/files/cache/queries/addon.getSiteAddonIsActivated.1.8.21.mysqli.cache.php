<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteAddonIsActivated");
$query->setAction("select");
$query->setPriority("");

${'site_srl74_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl74_argument'}->checkNotNull();
${'site_srl74_argument'}->createConditionValue();
if(!${'site_srl74_argument'}->isValid()) return ${'site_srl74_argument'}->getErrorMessage();
if(${'site_srl74_argument'} !== null) ${'site_srl74_argument'}->setColumnType('number');

${'addon75_argument'} = new ConditionArgument('addon', $args->addon, 'equal');
${'addon75_argument'}->checkNotNull();
${'addon75_argument'}->createConditionValue();
if(!${'addon75_argument'}->isValid()) return ${'addon75_argument'}->getErrorMessage();
if(${'addon75_argument'} !== null) ${'addon75_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_addons_site`', '`addons_site`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl74_argument,"equal")
,new ConditionWithArgument('`addon`',$addon75_argument,"equal", 'and')
,new ConditionWithoutArgument('`is_used`',"'Y'","equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>