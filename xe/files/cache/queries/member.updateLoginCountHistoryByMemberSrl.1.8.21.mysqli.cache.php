<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateLoginCountHistoryByMemberSrl");
$query->setAction("update");
$query->setPriority("");

${'content4_argument'} = new Argument('content', $args->{'content'});
${'content4_argument'}->checkNotNull();
if(!${'content4_argument'}->isValid()) return ${'content4_argument'}->getErrorMessage();
if(${'content4_argument'} !== null) ${'content4_argument'}->setColumnType('bigtext');

${'last_update5_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update5_argument'}->ensureDefaultValue(date("YmdHis"));
${'last_update5_argument'}->checkNotNull();
if(!${'last_update5_argument'}->isValid()) return ${'last_update5_argument'}->getErrorMessage();
if(${'last_update5_argument'} !== null) ${'last_update5_argument'}->setColumnType('date');

${'member_srl6_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl6_argument'}->checkNotNull();
${'member_srl6_argument'}->createConditionValue();
if(!${'member_srl6_argument'}->isValid()) return ${'member_srl6_argument'}->getErrorMessage();
if(${'member_srl6_argument'} !== null) ${'member_srl6_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`content`', ${'content4_argument'})
,new UpdateExpression('`last_update`', ${'last_update5_argument'})
));
$query->setTables(array(
new Table('`xe_member_count_history`', '`member_count_history`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl6_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>