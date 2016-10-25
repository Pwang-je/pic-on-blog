<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertGroup");
$query->setAction("insert");
$query->setPriority("");

${'user_id49_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id49_argument'}->checkNotNull();
if(!${'user_id49_argument'}->isValid()) return ${'user_id49_argument'}->getErrorMessage();
if(${'user_id49_argument'} !== null) ${'user_id49_argument'}->setColumnType('varchar');

${'regdate50_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate50_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate50_argument'}->isValid()) return ${'regdate50_argument'}->getErrorMessage();
if(${'regdate50_argument'} !== null) ${'regdate50_argument'}->setColumnType('date');

${'description51_argument'} = new Argument('description', $args->{'description'});
${'description51_argument'}->ensureDefaultValue('');
if(!${'description51_argument'}->isValid()) return ${'description51_argument'}->getErrorMessage();
if(${'description51_argument'} !== null) ${'description51_argument'}->setColumnType('text');
if(isset($args->list_order)) {
${'list_order52_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order52_argument'}->isValid()) return ${'list_order52_argument'}->getErrorMessage();
} else
${'list_order52_argument'} = NULL;if(${'list_order52_argument'} !== null) ${'list_order52_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`user_id`', ${'user_id49_argument'})
,new InsertExpression('`regdate`', ${'regdate50_argument'})
,new InsertExpression('`description`', ${'description51_argument'})
,new InsertExpression('`list_order`', ${'list_order52_argument'})
));
$query->setTables(array(
new Table('`xe_member_denied_user_id`', '`member_denied_user_id`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>