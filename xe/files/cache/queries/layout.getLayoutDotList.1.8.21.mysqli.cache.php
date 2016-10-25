<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLayoutDotList");
$query->setAction("select");
$query->setPriority("");

${'site_srl42_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl42_argument'}->checkFilter('number');
${'site_srl42_argument'}->ensureDefaultValue('0');
${'site_srl42_argument'}->checkNotNull();
${'site_srl42_argument'}->createConditionValue();
if(!${'site_srl42_argument'}->isValid()) return ${'site_srl42_argument'}->getErrorMessage();
if(${'site_srl42_argument'} !== null) ${'site_srl42_argument'}->setColumnType('number');

${'layout_type43_argument'} = new ConditionArgument('layout_type', $args->layout_type, 'equal');
${'layout_type43_argument'}->ensureDefaultValue('P');
${'layout_type43_argument'}->createConditionValue();
if(!${'layout_type43_argument'}->isValid()) return ${'layout_type43_argument'}->getErrorMessage();
if(${'layout_type43_argument'} !== null) ${'layout_type43_argument'}->setColumnType('char');

${'layout44_argument'} = new ConditionArgument('layout', $args->layout, 'like');
${'layout44_argument'}->ensureDefaultValue('.');
${'layout44_argument'}->createConditionValue();
if(!${'layout44_argument'}->isValid()) return ${'layout44_argument'}->getErrorMessage();
if(${'layout44_argument'} !== null) ${'layout44_argument'}->setColumnType('varchar');

${'sort_index45_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index45_argument'}->ensureDefaultValue('layout_srl');
if(!${'sort_index45_argument'}->isValid()) return ${'sort_index45_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl42_argument,"equal")
,new ConditionWithArgument('`layout_type`',$layout_type43_argument,"equal", 'and')
,new ConditionWithArgument('`layout`',$layout44_argument,"like", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index45_argument'}, "desc")
));
$query->setLimit();
return $query; ?>