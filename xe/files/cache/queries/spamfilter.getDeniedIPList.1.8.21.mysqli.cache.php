<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDeniedIPList");
$query->setAction("select");
$query->setPriority("");

${'sort_index108_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index108_argument'}->ensureDefaultValue('regdate');
if(!${'sort_index108_argument'}->isValid()) return ${'sort_index108_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_spamfilter_denied_ip`', '`spamfilter_denied_ip`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index108_argument'}, "desc")
));
$query->setLimit();
return $query; ?>