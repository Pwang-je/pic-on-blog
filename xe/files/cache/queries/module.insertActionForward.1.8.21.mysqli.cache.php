<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertActionForward");
$query->setAction("insert");
$query->setPriority("");

${'act62_argument'} = new Argument('act', $args->{'act'});
${'act62_argument'}->checkNotNull();
if(!${'act62_argument'}->isValid()) return ${'act62_argument'}->getErrorMessage();
if(${'act62_argument'} !== null) ${'act62_argument'}->setColumnType('varchar');

${'module63_argument'} = new Argument('module', $args->{'module'});
${'module63_argument'}->checkNotNull();
if(!${'module63_argument'}->isValid()) return ${'module63_argument'}->getErrorMessage();
if(${'module63_argument'} !== null) ${'module63_argument'}->setColumnType('varchar');

${'type64_argument'} = new Argument('type', $args->{'type'});
${'type64_argument'}->checkNotNull();
if(!${'type64_argument'}->isValid()) return ${'type64_argument'}->getErrorMessage();
if(${'type64_argument'} !== null) ${'type64_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`act`', ${'act62_argument'})
,new InsertExpression('`module`', ${'module63_argument'})
,new InsertExpression('`type`', ${'type64_argument'})
));
$query->setTables(array(
new Table('`xe_action_forward`', '`action_forward`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>