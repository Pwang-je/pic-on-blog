<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNewestCommentList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->status)) {
${'status69_argument'} = new ConditionArgument('status', $args->status, 'equal');
${'status69_argument'}->createConditionValue();
if(!${'status69_argument'}->isValid()) return ${'status69_argument'}->getErrorMessage();
} else
${'status69_argument'} = NULL;if(${'status69_argument'} !== null) ${'status69_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl70_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl70_argument'}->checkFilter('number');
${'module_srl70_argument'}->createConditionValue();
if(!${'module_srl70_argument'}->isValid()) return ${'module_srl70_argument'}->getErrorMessage();
} else
${'module_srl70_argument'} = NULL;if(${'module_srl70_argument'} !== null) ${'module_srl70_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl71_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl71_argument'}->checkFilter('number');
${'document_srl71_argument'}->createConditionValue();
if(!${'document_srl71_argument'}->isValid()) return ${'document_srl71_argument'}->getErrorMessage();
} else
${'document_srl71_argument'} = NULL;if(${'document_srl71_argument'} !== null) ${'document_srl71_argument'}->setColumnType('number');

${'list_count73_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count73_argument'}->ensureDefaultValue('20');
if(!${'list_count73_argument'}->isValid()) return ${'list_count73_argument'}->getErrorMessage();

${'sort_index72_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index72_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index72_argument'}->isValid()) return ${'sort_index72_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`status`',$status69_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl70_argument,"in", 'and')
,new ConditionWithArgument('`document_srl`',$document_srl71_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index72_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count73_argument'}));
return $query; ?>