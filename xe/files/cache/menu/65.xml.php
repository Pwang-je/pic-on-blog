<?php define('__XE__', true); require_once('/host/home3/a1473695/html/xe/config/config.inc.php'); $oContext = Context::getInstance(); $oContext->init(); header("Content-Type: text/xml; charset=UTF-8"); header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); header("Cache-Control: no-store, no-cache, must-revalidate"); header("Cache-Control: post-check=0, pre-check=0", false); header("Pragma: no-cache"); $lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); $site_srl = 0;$site_admin = false;if($site_srl) { $oModuleModel = getModel('module');$site_module_info = $oModuleModel->getSiteInfo($site_srl); if($site_module_info) Context::set('site_module_info',$site_module_info);else $site_module_info = Context::get('site_module_info');$grant = $oModuleModel->getGrant($site_module_info, $logged_info); if($grant->manager ==1) $site_admin = true;}if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srls = array(); } $oContext->close(); ?><root><node node_srl="67" parent_srl="0" menu_name_key='Pic-on' text="<?php if(true) { $_names = array("en"=>'Pic-on',"ko"=>'Pic-on',"jp"=>'Pic-on',"zh-CN"=>'Pic-on',"zh-TW"=>'Pic-on',"fr"=>'Pic-on',"de"=>'Pic-on',"ru"=>'Pic-on',"es"=>'Pic-on',"tr"=>'Pic-on',"vi"=>'Pic-on',"mn"=>'Pic-on',); print $_names[$lang_type]; }?>" url="<?php print(true?"index":"")?>" href="<?php print(true?getSiteUrl('', '','mid','index'):"")?>" is_shortcut="N" desc="" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="69" parent_srl="0" menu_name_key='Board' text="<?php if(true) { $_names = array("en"=>'Pic-on',"ko"=>'Pic-on',"jp"=>'Pic-on',"zh-CN"=>'Pic-on',"zh-TW"=>'Pic-on',"fr"=>'Pic-on',"de"=>'Pic-on',"ru"=>'Pic-on',"es"=>'Pic-on',"tr"=>'Pic-on',"vi"=>'Pic-on',"mn"=>'Pic-on',"en"=>'Board',"ko"=>'Board',"jp"=>'Board',"zh-CN"=>'Board',"zh-TW"=>'Board',"fr"=>'Board',"de"=>'Board',"ru"=>'Board',"es"=>'Board',"tr"=>'Board',"vi"=>'Board',"mn"=>'Board',); print $_names[$lang_type]; }?>" url="<?php print(true?"board":"")?>" href="<?php print(true?getSiteUrl('', '','mid','board'):"")?>" is_shortcut="N" desc="" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></root>