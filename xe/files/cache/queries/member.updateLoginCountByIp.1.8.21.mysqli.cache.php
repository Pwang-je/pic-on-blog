<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateLoginCountByIp");
$query->setAction("update");
$query->setPriority("");

${'count7_argument'} = new Argument('count', $args->{'count'});
${'count7_argument'}->checkNotNull();
if(!${'count7_argument'}->isValid()) return ${'count7_argument'}->getErrorMessage();
if(${'count7_argument'} !== null) ${'count7_argument'}->setColumnType('number');

${'last_update8_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update8_argument'}->ensureDefaultValue(date("YmdHis"));
${'last_update8_argument'}->checkNotNull();
if(!${'last_update8_argument'}->isValid()) return ${'last_update8_argument'}->getErrorMessage();
if(${'last_update8_argument'} !== null) ${'last_update8_argument'}->setColumnType('date');

${'ipaddress9_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress9_argument'}->checkNotNull();
${'ipaddress9_argument'}->createConditionValue();
if(!${'ipaddress9_argument'}->isValid()) return ${'ipaddress9_argument'}->getErrorMessage();
if(${'ipaddress9_argument'} !== null) ${'ipaddress9_argument'}->setColumnType('varchar');

$query->setColumns(array(
new UpdateExpression('`count`', ${'count7_argument'})
,new UpdateExpression('`last_update`', ${'last_update8_argument'})
));
$query->setTables(array(
new Table('`xe_member_login_count`', '`member_login_count`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`ipaddress`',$ipaddress9_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>