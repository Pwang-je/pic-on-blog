<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getActionForward");
$query->setAction("select");
$query->setPriority("");
if(isset($args->act)) {
${'act48_argument'} = new ConditionArgument('act', $args->act, 'equal');
${'act48_argument'}->createConditionValue();
if(!${'act48_argument'}->isValid()) return ${'act48_argument'}->getErrorMessage();
} else
${'act48_argument'} = NULL;if(${'act48_argument'} !== null) ${'act48_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_action_forward`', '`action_forward`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`act`',$act48_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>