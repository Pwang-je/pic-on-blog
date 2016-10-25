<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMenuItem");
$query->setAction("insert");
$query->setPriority("");

${'menu_item_srl76_argument'} = new Argument('menu_item_srl', $args->{'menu_item_srl'});
${'menu_item_srl76_argument'}->checkFilter('number');
${'menu_item_srl76_argument'}->checkNotNull();
if(!${'menu_item_srl76_argument'}->isValid()) return ${'menu_item_srl76_argument'}->getErrorMessage();
if(${'menu_item_srl76_argument'} !== null) ${'menu_item_srl76_argument'}->setColumnType('number');

${'parent_srl77_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl77_argument'}->checkFilter('number');
${'parent_srl77_argument'}->ensureDefaultValue('0');
if(!${'parent_srl77_argument'}->isValid()) return ${'parent_srl77_argument'}->getErrorMessage();
if(${'parent_srl77_argument'} !== null) ${'parent_srl77_argument'}->setColumnType('number');

${'menu_srl78_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl78_argument'}->checkFilter('number');
${'menu_srl78_argument'}->checkNotNull();
if(!${'menu_srl78_argument'}->isValid()) return ${'menu_srl78_argument'}->getErrorMessage();
if(${'menu_srl78_argument'} !== null) ${'menu_srl78_argument'}->setColumnType('number');

${'name79_argument'} = new Argument('name', $args->{'name'});
${'name79_argument'}->checkNotNull();
if(!${'name79_argument'}->isValid()) return ${'name79_argument'}->getErrorMessage();
if(${'name79_argument'} !== null) ${'name79_argument'}->setColumnType('text');
if(isset($args->desc)) {
${'desc80_argument'} = new Argument('desc', $args->{'desc'});
if(!${'desc80_argument'}->isValid()) return ${'desc80_argument'}->getErrorMessage();
} else
${'desc80_argument'} = NULL;if(${'desc80_argument'} !== null) ${'desc80_argument'}->setColumnType('varchar');
if(isset($args->url)) {
${'url81_argument'} = new Argument('url', $args->{'url'});
if(!${'url81_argument'}->isValid()) return ${'url81_argument'}->getErrorMessage();
} else
${'url81_argument'} = NULL;if(${'url81_argument'} !== null) ${'url81_argument'}->setColumnType('varchar');

${'is_shortcut82_argument'} = new Argument('is_shortcut', $args->{'is_shortcut'});
${'is_shortcut82_argument'}->ensureDefaultValue('N');
${'is_shortcut82_argument'}->checkNotNull();
if(!${'is_shortcut82_argument'}->isValid()) return ${'is_shortcut82_argument'}->getErrorMessage();
if(${'is_shortcut82_argument'} !== null) ${'is_shortcut82_argument'}->setColumnType('char');
if(isset($args->open_window)) {
${'open_window83_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window83_argument'}->isValid()) return ${'open_window83_argument'}->getErrorMessage();
} else
${'open_window83_argument'} = NULL;if(${'open_window83_argument'} !== null) ${'open_window83_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand84_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand84_argument'}->isValid()) return ${'expand84_argument'}->getErrorMessage();
} else
${'expand84_argument'} = NULL;if(${'expand84_argument'} !== null) ${'expand84_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn85_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn85_argument'}->isValid()) return ${'normal_btn85_argument'}->getErrorMessage();
} else
${'normal_btn85_argument'} = NULL;if(${'normal_btn85_argument'} !== null) ${'normal_btn85_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn86_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn86_argument'}->isValid()) return ${'hover_btn86_argument'}->getErrorMessage();
} else
${'hover_btn86_argument'} = NULL;if(${'hover_btn86_argument'} !== null) ${'hover_btn86_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn87_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn87_argument'}->isValid()) return ${'active_btn87_argument'}->getErrorMessage();
} else
${'active_btn87_argument'} = NULL;if(${'active_btn87_argument'} !== null) ${'active_btn87_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls88_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls88_argument'}->isValid()) return ${'group_srls88_argument'}->getErrorMessage();
} else
${'group_srls88_argument'} = NULL;if(${'group_srls88_argument'} !== null) ${'group_srls88_argument'}->setColumnType('text');

${'listorder89_argument'} = new Argument('listorder', $args->{'listorder'});
${'listorder89_argument'}->checkNotNull();
if(!${'listorder89_argument'}->isValid()) return ${'listorder89_argument'}->getErrorMessage();
if(${'listorder89_argument'} !== null) ${'listorder89_argument'}->setColumnType('number');

${'regdate90_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate90_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate90_argument'}->isValid()) return ${'regdate90_argument'}->getErrorMessage();
if(${'regdate90_argument'} !== null) ${'regdate90_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`menu_item_srl`', ${'menu_item_srl76_argument'})
,new InsertExpression('`parent_srl`', ${'parent_srl77_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl78_argument'})
,new InsertExpression('`name`', ${'name79_argument'})
,new InsertExpression('`desc`', ${'desc80_argument'})
,new InsertExpression('`url`', ${'url81_argument'})
,new InsertExpression('`is_shortcut`', ${'is_shortcut82_argument'})
,new InsertExpression('`open_window`', ${'open_window83_argument'})
,new InsertExpression('`expand`', ${'expand84_argument'})
,new InsertExpression('`normal_btn`', ${'normal_btn85_argument'})
,new InsertExpression('`hover_btn`', ${'hover_btn86_argument'})
,new InsertExpression('`active_btn`', ${'active_btn87_argument'})
,new InsertExpression('`group_srls`', ${'group_srls88_argument'})
,new InsertExpression('`listorder`', ${'listorder89_argument'})
,new InsertExpression('`regdate`', ${'regdate90_argument'})
));
$query->setTables(array(
new Table('`xe_menu_item`', '`menu_item`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>