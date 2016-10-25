<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl36_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl36_argument'}->checkFilter('number');
${'module_srl36_argument'}->createConditionValue();
if(!${'module_srl36_argument'}->isValid()) return ${'module_srl36_argument'}->getErrorMessage();
} else
${'module_srl36_argument'} = NULL;if(${'module_srl36_argument'} !== null) ${'module_srl36_argument'}->setColumnType('number');
if(isset($args->exclude_module_srl)) {
${'exclude_module_srl37_argument'} = new ConditionArgument('exclude_module_srl', $args->exclude_module_srl, 'notin');
${'exclude_module_srl37_argument'}->checkFilter('number');
${'exclude_module_srl37_argument'}->createConditionValue();
if(!${'exclude_module_srl37_argument'}->isValid()) return ${'exclude_module_srl37_argument'}->getErrorMessage();
} else
${'exclude_module_srl37_argument'} = NULL;if(${'exclude_module_srl37_argument'} !== null) ${'exclude_module_srl37_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl38_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'in');
${'category_srl38_argument'}->createConditionValue();
if(!${'category_srl38_argument'}->isValid()) return ${'category_srl38_argument'}->getErrorMessage();
} else
${'category_srl38_argument'} = NULL;if(${'category_srl38_argument'} !== null) ${'category_srl38_argument'}->setColumnType('number');
if(isset($args->s_is_notice)) {
${'s_is_notice39_argument'} = new ConditionArgument('s_is_notice', $args->s_is_notice, 'equal');
${'s_is_notice39_argument'}->createConditionValue();
if(!${'s_is_notice39_argument'}->isValid()) return ${'s_is_notice39_argument'}->getErrorMessage();
} else
${'s_is_notice39_argument'} = NULL;if(${'s_is_notice39_argument'} !== null) ${'s_is_notice39_argument'}->setColumnType('char');
if(isset($args->member_srl)) {
${'member_srl40_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl40_argument'}->checkFilter('number');
${'member_srl40_argument'}->createConditionValue();
if(!${'member_srl40_argument'}->isValid()) return ${'member_srl40_argument'}->getErrorMessage();
} else
${'member_srl40_argument'} = NULL;if(${'member_srl40_argument'} !== null) ${'member_srl40_argument'}->setColumnType('number');
if(isset($args->statusList)) {
${'statusList41_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList41_argument'}->createConditionValue();
if(!${'statusList41_argument'}->isValid()) return ${'statusList41_argument'}->getErrorMessage();
} else
${'statusList41_argument'} = NULL;if(${'statusList41_argument'} !== null) ${'statusList41_argument'}->setColumnType('varchar');
if(isset($args->division)) {
${'division42_argument'} = new ConditionArgument('division', $args->division, 'more');
${'division42_argument'}->createConditionValue();
if(!${'division42_argument'}->isValid()) return ${'division42_argument'}->getErrorMessage();
} else
${'division42_argument'} = NULL;if(${'division42_argument'} !== null) ${'division42_argument'}->setColumnType('number');
if(isset($args->last_division)) {
${'last_division43_argument'} = new ConditionArgument('last_division', $args->last_division, 'below');
${'last_division43_argument'}->createConditionValue();
if(!${'last_division43_argument'}->isValid()) return ${'last_division43_argument'}->getErrorMessage();
} else
${'last_division43_argument'} = NULL;if(${'last_division43_argument'} !== null) ${'last_division43_argument'}->setColumnType('number');
if(isset($args->s_title)) {
${'s_title44_argument'} = new ConditionArgument('s_title', $args->s_title, 'like');
${'s_title44_argument'}->createConditionValue();
if(!${'s_title44_argument'}->isValid()) return ${'s_title44_argument'}->getErrorMessage();
} else
${'s_title44_argument'} = NULL;if(${'s_title44_argument'} !== null) ${'s_title44_argument'}->setColumnType('varchar');
if(isset($args->s_content)) {
${'s_content45_argument'} = new ConditionArgument('s_content', $args->s_content, 'like');
${'s_content45_argument'}->createConditionValue();
if(!${'s_content45_argument'}->isValid()) return ${'s_content45_argument'}->getErrorMessage();
} else
${'s_content45_argument'} = NULL;if(${'s_content45_argument'} !== null) ${'s_content45_argument'}->setColumnType('bigtext');
if(isset($args->s_user_name)) {
${'s_user_name46_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name46_argument'}->createConditionValue();
if(!${'s_user_name46_argument'}->isValid()) return ${'s_user_name46_argument'}->getErrorMessage();
} else
${'s_user_name46_argument'} = NULL;if(${'s_user_name46_argument'} !== null) ${'s_user_name46_argument'}->setColumnType('varchar');
if(isset($args->s_user_id)) {
${'s_user_id47_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id47_argument'}->createConditionValue();
if(!${'s_user_id47_argument'}->isValid()) return ${'s_user_id47_argument'}->getErrorMessage();
} else
${'s_user_id47_argument'} = NULL;if(${'s_user_id47_argument'} !== null) ${'s_user_id47_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name48_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name48_argument'}->createConditionValue();
if(!${'s_nick_name48_argument'}->isValid()) return ${'s_nick_name48_argument'}->getErrorMessage();
} else
${'s_nick_name48_argument'} = NULL;if(${'s_nick_name48_argument'} !== null) ${'s_nick_name48_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address49_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address49_argument'}->createConditionValue();
if(!${'s_email_address49_argument'}->isValid()) return ${'s_email_address49_argument'}->getErrorMessage();
} else
${'s_email_address49_argument'} = NULL;if(${'s_email_address49_argument'} !== null) ${'s_email_address49_argument'}->setColumnType('varchar');
if(isset($args->s_homepage)) {
${'s_homepage50_argument'} = new ConditionArgument('s_homepage', $args->s_homepage, 'like');
${'s_homepage50_argument'}->createConditionValue();
if(!${'s_homepage50_argument'}->isValid()) return ${'s_homepage50_argument'}->getErrorMessage();
} else
${'s_homepage50_argument'} = NULL;if(${'s_homepage50_argument'} !== null) ${'s_homepage50_argument'}->setColumnType('varchar');
if(isset($args->s_tags)) {
${'s_tags51_argument'} = new ConditionArgument('s_tags', $args->s_tags, 'like');
${'s_tags51_argument'}->createConditionValue();
if(!${'s_tags51_argument'}->isValid()) return ${'s_tags51_argument'}->getErrorMessage();
} else
${'s_tags51_argument'} = NULL;if(${'s_tags51_argument'} !== null) ${'s_tags51_argument'}->setColumnType('text');
if(isset($args->s_member_srl)) {
${'s_member_srl52_argument'} = new ConditionArgument('s_member_srl', $args->s_member_srl, 'equal');
${'s_member_srl52_argument'}->createConditionValue();
if(!${'s_member_srl52_argument'}->isValid()) return ${'s_member_srl52_argument'}->getErrorMessage();
} else
${'s_member_srl52_argument'} = NULL;if(${'s_member_srl52_argument'} !== null) ${'s_member_srl52_argument'}->setColumnType('number');
if(isset($args->s_readed_count)) {
${'s_readed_count53_argument'} = new ConditionArgument('s_readed_count', $args->s_readed_count, 'more');
${'s_readed_count53_argument'}->createConditionValue();
if(!${'s_readed_count53_argument'}->isValid()) return ${'s_readed_count53_argument'}->getErrorMessage();
} else
${'s_readed_count53_argument'} = NULL;if(${'s_readed_count53_argument'} !== null) ${'s_readed_count53_argument'}->setColumnType('number');
if(isset($args->s_voted_count)) {
${'s_voted_count54_argument'} = new ConditionArgument('s_voted_count', $args->s_voted_count, 'more');
${'s_voted_count54_argument'}->createConditionValue();
if(!${'s_voted_count54_argument'}->isValid()) return ${'s_voted_count54_argument'}->getErrorMessage();
} else
${'s_voted_count54_argument'} = NULL;if(${'s_voted_count54_argument'} !== null) ${'s_voted_count54_argument'}->setColumnType('number');
if(isset($args->s_blamed_count)) {
${'s_blamed_count55_argument'} = new ConditionArgument('s_blamed_count', $args->s_blamed_count, 'less');
${'s_blamed_count55_argument'}->createConditionValue();
if(!${'s_blamed_count55_argument'}->isValid()) return ${'s_blamed_count55_argument'}->getErrorMessage();
} else
${'s_blamed_count55_argument'} = NULL;if(${'s_blamed_count55_argument'} !== null) ${'s_blamed_count55_argument'}->setColumnType('number');
if(isset($args->s_comment_count)) {
${'s_comment_count56_argument'} = new ConditionArgument('s_comment_count', $args->s_comment_count, 'more');
${'s_comment_count56_argument'}->createConditionValue();
if(!${'s_comment_count56_argument'}->isValid()) return ${'s_comment_count56_argument'}->getErrorMessage();
} else
${'s_comment_count56_argument'} = NULL;if(${'s_comment_count56_argument'} !== null) ${'s_comment_count56_argument'}->setColumnType('number');
if(isset($args->s_trackback_count)) {
${'s_trackback_count57_argument'} = new ConditionArgument('s_trackback_count', $args->s_trackback_count, 'more');
${'s_trackback_count57_argument'}->createConditionValue();
if(!${'s_trackback_count57_argument'}->isValid()) return ${'s_trackback_count57_argument'}->getErrorMessage();
} else
${'s_trackback_count57_argument'} = NULL;if(${'s_trackback_count57_argument'} !== null) ${'s_trackback_count57_argument'}->setColumnType('number');
if(isset($args->s_uploaded_count)) {
${'s_uploaded_count58_argument'} = new ConditionArgument('s_uploaded_count', $args->s_uploaded_count, 'more');
${'s_uploaded_count58_argument'}->createConditionValue();
if(!${'s_uploaded_count58_argument'}->isValid()) return ${'s_uploaded_count58_argument'}->getErrorMessage();
} else
${'s_uploaded_count58_argument'} = NULL;if(${'s_uploaded_count58_argument'} !== null) ${'s_uploaded_count58_argument'}->setColumnType('number');
if(isset($args->s_regdate)) {
${'s_regdate59_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate59_argument'}->createConditionValue();
if(!${'s_regdate59_argument'}->isValid()) return ${'s_regdate59_argument'}->getErrorMessage();
} else
${'s_regdate59_argument'} = NULL;if(${'s_regdate59_argument'} !== null) ${'s_regdate59_argument'}->setColumnType('date');
if(isset($args->s_last_update)) {
${'s_last_update60_argument'} = new ConditionArgument('s_last_update', $args->s_last_update, 'like_prefix');
${'s_last_update60_argument'}->createConditionValue();
if(!${'s_last_update60_argument'}->isValid()) return ${'s_last_update60_argument'}->getErrorMessage();
} else
${'s_last_update60_argument'} = NULL;if(${'s_last_update60_argument'} !== null) ${'s_last_update60_argument'}->setColumnType('date');
if(isset($args->s_ipaddress)) {
${'s_ipaddress61_argument'} = new ConditionArgument('s_ipaddress', $args->s_ipaddress, 'like_prefix');
${'s_ipaddress61_argument'}->createConditionValue();
if(!${'s_ipaddress61_argument'}->isValid()) return ${'s_ipaddress61_argument'}->getErrorMessage();
} else
${'s_ipaddress61_argument'} = NULL;if(${'s_ipaddress61_argument'} !== null) ${'s_ipaddress61_argument'}->setColumnType('varchar');
if(isset($args->start_date)) {
${'start_date62_argument'} = new ConditionArgument('start_date', $args->start_date, 'more');
${'start_date62_argument'}->createConditionValue();
if(!${'start_date62_argument'}->isValid()) return ${'start_date62_argument'}->getErrorMessage();
} else
${'start_date62_argument'} = NULL;if(${'start_date62_argument'} !== null) ${'start_date62_argument'}->setColumnType('date');
if(isset($args->end_date)) {
${'end_date63_argument'} = new ConditionArgument('end_date', $args->end_date, 'less');
${'end_date63_argument'}->createConditionValue();
if(!${'end_date63_argument'}->isValid()) return ${'end_date63_argument'}->getErrorMessage();
} else
${'end_date63_argument'} = NULL;if(${'end_date63_argument'} !== null) ${'end_date63_argument'}->setColumnType('date');

${'page66_argument'} = new Argument('page', $args->{'page'});
${'page66_argument'}->ensureDefaultValue('1');
if(!${'page66_argument'}->isValid()) return ${'page66_argument'}->getErrorMessage();

${'page_count67_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count67_argument'}->ensureDefaultValue('10');
if(!${'page_count67_argument'}->isValid()) return ${'page_count67_argument'}->getErrorMessage();

${'list_count68_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count68_argument'}->ensureDefaultValue('20');
if(!${'list_count68_argument'}->isValid()) return ${'list_count68_argument'}->getErrorMessage();

${'sort_index64_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index64_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index64_argument'}->isValid()) return ${'sort_index64_argument'}->getErrorMessage();

${'order_type65_argument'} = new SortArgument('order_type65', $args->order_type);
${'order_type65_argument'}->ensureDefaultValue('asc');
if(!${'order_type65_argument'}->isValid()) return ${'order_type65_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl36_argument,"in")
,new ConditionWithArgument('`module_srl`',$exclude_module_srl37_argument,"notin", 'and')
,new ConditionWithArgument('`category_srl`',$category_srl38_argument,"in", 'and')
,new ConditionWithArgument('`is_notice`',$s_is_notice39_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl40_argument,"equal", 'and')
,new ConditionWithArgument('`status`',$statusList41_argument,"in", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`list_order`',$division42_argument,"more", 'and')
,new ConditionWithArgument('`list_order`',$last_division43_argument,"below", 'and')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`title`',$s_title44_argument,"like")
,new ConditionWithArgument('`content`',$s_content45_argument,"like", 'or')
,new ConditionWithArgument('`user_name`',$s_user_name46_argument,"like", 'or')
,new ConditionWithArgument('`user_id`',$s_user_id47_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$s_nick_name48_argument,"like", 'or')
,new ConditionWithArgument('`email_address`',$s_email_address49_argument,"like", 'or')
,new ConditionWithArgument('`homepage`',$s_homepage50_argument,"like", 'or')
,new ConditionWithArgument('`tags`',$s_tags51_argument,"like", 'or')
,new ConditionWithArgument('`member_srl`',$s_member_srl52_argument,"equal", 'or')
,new ConditionWithArgument('`readed_count`',$s_readed_count53_argument,"more", 'or')
,new ConditionWithArgument('`voted_count`',$s_voted_count54_argument,"more", 'or')
,new ConditionWithArgument('`blamed_count`',$s_blamed_count55_argument,"less", 'or')
,new ConditionWithArgument('`comment_count`',$s_comment_count56_argument,"more", 'or')
,new ConditionWithArgument('`trackback_count`',$s_trackback_count57_argument,"more", 'or')
,new ConditionWithArgument('`uploaded_count`',$s_uploaded_count58_argument,"more", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate59_argument,"like_prefix", 'or')
,new ConditionWithArgument('`last_update`',$s_last_update60_argument,"like_prefix", 'or')
,new ConditionWithArgument('`ipaddress`',$s_ipaddress61_argument,"like_prefix", 'or')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`last_update`',$start_date62_argument,"more", 'and')
,new ConditionWithArgument('`last_update`',$end_date63_argument,"less", 'and')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index64_argument'}, $order_type65_argument)
));
$query->setLimit(new Limit(${'list_count68_argument'}, ${'page66_argument'}, ${'page_count67_argument'}));
return $query; ?>