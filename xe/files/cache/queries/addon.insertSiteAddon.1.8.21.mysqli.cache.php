<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertSiteAddon");
$query->setAction("insert");
$query->setPriority("");

${'site_srl53_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl53_argument'}->checkNotNull();
if(!${'site_srl53_argument'}->isValid()) return ${'site_srl53_argument'}->getErrorMessage();
if(${'site_srl53_argument'} !== null) ${'site_srl53_argument'}->setColumnType('number');

${'addon54_argument'} = new Argument('addon', $args->{'addon'});
${'addon54_argument'}->checkNotNull();
if(!${'addon54_argument'}->isValid()) return ${'addon54_argument'}->getErrorMessage();
if(${'addon54_argument'} !== null) ${'addon54_argument'}->setColumnType('varchar');

${'is_used55_argument'} = new Argument('is_used', $args->{'is_used'});
${'is_used55_argument'}->ensureDefaultValue('N');
${'is_used55_argument'}->checkNotNull();
if(!${'is_used55_argument'}->isValid()) return ${'is_used55_argument'}->getErrorMessage();
if(${'is_used55_argument'} !== null) ${'is_used55_argument'}->setColumnType('char');

${'is_used_m56_argument'} = new Argument('is_used_m', $args->{'is_used_m'});
${'is_used_m56_argument'}->ensureDefaultValue('N');
if(!${'is_used_m56_argument'}->isValid()) return ${'is_used_m56_argument'}->getErrorMessage();
if(${'is_used_m56_argument'} !== null) ${'is_used_m56_argument'}->setColumnType('char');
if(isset($args->extra_vars)) {
${'extra_vars57_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars57_argument'}->isValid()) return ${'extra_vars57_argument'}->getErrorMessage();
} else
${'extra_vars57_argument'} = NULL;if(${'extra_vars57_argument'} !== null) ${'extra_vars57_argument'}->setColumnType('text');

${'regdate58_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate58_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate58_argument'}->isValid()) return ${'regdate58_argument'}->getErrorMessage();
if(${'regdate58_argument'} !== null) ${'regdate58_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl53_argument'})
,new InsertExpression('`addon`', ${'addon54_argument'})
,new InsertExpression('`is_used`', ${'is_used55_argument'})
,new InsertExpression('`is_used_m`', ${'is_used_m56_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars57_argument'})
,new InsertExpression('`regdate`', ${'regdate58_argument'})
));
$query->setTables(array(
new Table('`xe_addons_site`', '`addons_site`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>