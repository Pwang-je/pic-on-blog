<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateLayout");
$query->setAction("update");
$query->setPriority("");
if(isset($args->title)) {
${'title103_argument'} = new Argument('title', $args->{'title'});
if(!${'title103_argument'}->isValid()) return ${'title103_argument'}->getErrorMessage();
} else
${'title103_argument'} = NULL;if(${'title103_argument'} !== null) ${'title103_argument'}->setColumnType('varchar');
if(isset($args->extra_vars)) {
${'extra_vars104_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars104_argument'}->isValid()) return ${'extra_vars104_argument'}->getErrorMessage();
} else
${'extra_vars104_argument'} = NULL;if(${'extra_vars104_argument'} !== null) ${'extra_vars104_argument'}->setColumnType('text');
if(isset($args->layout)) {
${'layout105_argument'} = new Argument('layout', $args->{'layout'});
if(!${'layout105_argument'}->isValid()) return ${'layout105_argument'}->getErrorMessage();
} else
${'layout105_argument'} = NULL;if(${'layout105_argument'} !== null) ${'layout105_argument'}->setColumnType('varchar');
if(isset($args->layout_path)) {
${'layout_path106_argument'} = new Argument('layout_path', $args->{'layout_path'});
if(!${'layout_path106_argument'}->isValid()) return ${'layout_path106_argument'}->getErrorMessage();
} else
${'layout_path106_argument'} = NULL;if(${'layout_path106_argument'} !== null) ${'layout_path106_argument'}->setColumnType('varchar');

${'layout_srl107_argument'} = new ConditionArgument('layout_srl', $args->layout_srl, 'equal');
${'layout_srl107_argument'}->checkFilter('number');
${'layout_srl107_argument'}->checkNotNull();
${'layout_srl107_argument'}->createConditionValue();
if(!${'layout_srl107_argument'}->isValid()) return ${'layout_srl107_argument'}->getErrorMessage();
if(${'layout_srl107_argument'} !== null) ${'layout_srl107_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`title`', ${'title103_argument'})
,new UpdateExpression('`extra_vars`', ${'extra_vars104_argument'})
,new UpdateExpression('`layout`', ${'layout105_argument'})
,new UpdateExpression('`layout_path`', ${'layout_path106_argument'})
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`layout_srl`',$layout_srl107_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>