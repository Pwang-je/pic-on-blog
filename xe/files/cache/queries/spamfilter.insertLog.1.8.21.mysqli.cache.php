<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertLog");
$query->setAction("insert");
$query->setPriority("");

${'spamfilter_log_srl110_argument'} = new Argument('spamfilter_log_srl', $args->{'spamfilter_log_srl'});
$db = DB::getInstance(); $sequence = $db->getNextSequence(); ${'spamfilter_log_srl110_argument'}->ensureDefaultValue($sequence);
if(!${'spamfilter_log_srl110_argument'}->isValid()) return ${'spamfilter_log_srl110_argument'}->getErrorMessage();
if(${'spamfilter_log_srl110_argument'} !== null) ${'spamfilter_log_srl110_argument'}->setColumnType('number');

${'ipaddress111_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress111_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress111_argument'}->isValid()) return ${'ipaddress111_argument'}->getErrorMessage();
if(${'ipaddress111_argument'} !== null) ${'ipaddress111_argument'}->setColumnType('varchar');

${'regdate112_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate112_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate112_argument'}->isValid()) return ${'regdate112_argument'}->getErrorMessage();
if(${'regdate112_argument'} !== null) ${'regdate112_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`spamfilter_log_srl`', ${'spamfilter_log_srl110_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress111_argument'})
,new InsertExpression('`regdate`', ${'regdate112_argument'})
));
$query->setTables(array(
new Table('`xe_spamfilter_log`', '`spamfilter_log`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>