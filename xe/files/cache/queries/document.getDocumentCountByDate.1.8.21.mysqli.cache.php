<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentCountByDate");
$query->setAction("select");
$query->setPriority("");
if(isset($args->moduleSrlList)) {
${'moduleSrlList33_argument'} = new ConditionArgument('moduleSrlList', $args->moduleSrlList, 'in');
${'moduleSrlList33_argument'}->createConditionValue();
if(!${'moduleSrlList33_argument'}->isValid()) return ${'moduleSrlList33_argument'}->getErrorMessage();
} else
${'moduleSrlList33_argument'} = NULL;if(${'moduleSrlList33_argument'} !== null) ${'moduleSrlList33_argument'}->setColumnType('number');
if(isset($args->regDate)) {
${'regDate34_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate34_argument'}->createConditionValue();
if(!${'regDate34_argument'}->isValid()) return ${'regDate34_argument'}->getErrorMessage();
} else
${'regDate34_argument'} = NULL;if(${'regDate34_argument'} !== null) ${'regDate34_argument'}->setColumnType('date');
if(isset($args->statusList)) {
${'statusList35_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList35_argument'}->createConditionValue();
if(!${'statusList35_argument'}->isValid()) return ${'statusList35_argument'}->getErrorMessage();
} else
${'statusList35_argument'} = NULL;if(${'statusList35_argument'} !== null) ${'statusList35_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$moduleSrlList33_argument,"in")
,new ConditionWithArgument('`regdate`',$regDate34_argument,"like_prefix", 'and')
,new ConditionWithArgument('`status`',$statusList35_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>