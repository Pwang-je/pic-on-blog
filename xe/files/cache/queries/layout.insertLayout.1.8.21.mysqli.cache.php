<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertLayout");
$query->setAction("insert");
$query->setPriority("");

${'layout_srl94_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
${'layout_srl94_argument'}->checkFilter('number');
${'layout_srl94_argument'}->checkNotNull();
if(!${'layout_srl94_argument'}->isValid()) return ${'layout_srl94_argument'}->getErrorMessage();
if(${'layout_srl94_argument'} !== null) ${'layout_srl94_argument'}->setColumnType('number');

${'site_srl95_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl95_argument'}->checkFilter('number');
${'site_srl95_argument'}->ensureDefaultValue('0');
${'site_srl95_argument'}->checkNotNull();
if(!${'site_srl95_argument'}->isValid()) return ${'site_srl95_argument'}->getErrorMessage();
if(${'site_srl95_argument'} !== null) ${'site_srl95_argument'}->setColumnType('number');

${'layout96_argument'} = new Argument('layout', $args->{'layout'});
${'layout96_argument'}->checkNotNull();
if(!${'layout96_argument'}->isValid()) return ${'layout96_argument'}->getErrorMessage();
if(${'layout96_argument'} !== null) ${'layout96_argument'}->setColumnType('varchar');

${'title97_argument'} = new Argument('title', $args->{'title'});
${'title97_argument'}->checkNotNull();
if(!${'title97_argument'}->isValid()) return ${'title97_argument'}->getErrorMessage();
if(${'title97_argument'} !== null) ${'title97_argument'}->setColumnType('varchar');
if(isset($args->module_srl)) {
${'module_srl98_argument'} = new Argument('module_srl', $args->{'module_srl'});
if(!${'module_srl98_argument'}->isValid()) return ${'module_srl98_argument'}->getErrorMessage();
} else
${'module_srl98_argument'} = NULL;if(${'module_srl98_argument'} !== null) ${'module_srl98_argument'}->setColumnType('number');
if(isset($args->extra_vars)) {
${'extra_vars99_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars99_argument'}->isValid()) return ${'extra_vars99_argument'}->getErrorMessage();
} else
${'extra_vars99_argument'} = NULL;if(${'extra_vars99_argument'} !== null) ${'extra_vars99_argument'}->setColumnType('text');
if(isset($args->layout_path)) {
${'layout_path100_argument'} = new Argument('layout_path', $args->{'layout_path'});
if(!${'layout_path100_argument'}->isValid()) return ${'layout_path100_argument'}->getErrorMessage();
} else
${'layout_path100_argument'} = NULL;if(${'layout_path100_argument'} !== null) ${'layout_path100_argument'}->setColumnType('varchar');

${'regdate101_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate101_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate101_argument'}->isValid()) return ${'regdate101_argument'}->getErrorMessage();
if(${'regdate101_argument'} !== null) ${'regdate101_argument'}->setColumnType('date');

${'layout_type102_argument'} = new Argument('layout_type', $args->{'layout_type'});
${'layout_type102_argument'}->ensureDefaultValue('P');
if(!${'layout_type102_argument'}->isValid()) return ${'layout_type102_argument'}->getErrorMessage();
if(${'layout_type102_argument'} !== null) ${'layout_type102_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`layout_srl`', ${'layout_srl94_argument'})
,new InsertExpression('`site_srl`', ${'site_srl95_argument'})
,new InsertExpression('`layout`', ${'layout96_argument'})
,new InsertExpression('`title`', ${'title97_argument'})
,new InsertExpression('`module_srl`', ${'module_srl98_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars99_argument'})
,new InsertExpression('`layout_path`', ${'layout_path100_argument'})
,new InsertExpression('`regdate`', ${'regdate101_argument'})
,new InsertExpression('`layout_type`', ${'layout_type102_argument'})
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>