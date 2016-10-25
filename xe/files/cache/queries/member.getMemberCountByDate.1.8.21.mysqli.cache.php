<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberCountByDate");
$query->setAction("select");
$query->setPriority("");
if(isset($args->regDate)) {
${'regDate32_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate32_argument'}->createConditionValue();
if(!${'regDate32_argument'}->isValid()) return ${'regDate32_argument'}->getErrorMessage();
} else
${'regDate32_argument'} = NULL;if(${'regDate32_argument'} !== null) ${'regDate32_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$regDate32_argument,"like_prefix")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>