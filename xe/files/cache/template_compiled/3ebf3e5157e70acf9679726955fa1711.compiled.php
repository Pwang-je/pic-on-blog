<?php if(!defined("__XE__"))exit;?> 
<?php if($__Context->module_info->default_style=='diary'){ ?> 
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/ena_board_set_simpledashed','list_read.html') ?>
<?php }elseif($__Context->module_info->default_style=='memo'){ ?> 
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/ena_board_set_simpledashed','list_read.html') ?> 
<?php }elseif($__Context->module_info->default_style=='1line_memo'){ ?> 
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/ena_board_set_simpledashed','list_read.html') ?>
<?php }elseif($__Context->module_info->default_style=='guestbook'){ ?> 
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/ena_board_set_simpledashed','list_read.html') ?> 
<?php }elseif($__Context->module_info->default_style=='gallery'){ ?> 
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/ena_board_set_simpledashed','list_gallery.html') ?> 
<?php }elseif($__Context->module_info->default_style=='banner_link'){ ?> 
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/ena_board_set_simpledashed','list_bannerlink.html') ?> 
<?php }else{ ?> 
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/ena_board_set_simpledashed','list_normal.html') ?> 
<?php } ?> 
