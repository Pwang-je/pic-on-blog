<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/ena_board_set_simpledashed','_header.html') ?>
<?php if($__Context->oDocument->isExists()){ ?><div class="context_data" style="padding:10px;border:1px solid #eee;">
	<p class="author">
		<strong><?php echo $__Context->oDocument->getNickName() ?></strong>
	</p>
	<?php echo $__Context->oDocument->getTitle() ?>
</div><?php } ?>
<form action="./" method="get" onsubmit="return procFilter(this, delete_document)" class="context_message"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
	<input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
	<div class="title" style="font-size:12px;"><?php echo $__Context->lang->cmd_document_do ?> <?php echo $__Context->lang->confirm_delete ?></div>
	<div class="btnArea">
		<input type="submit" value="<?php echo $__Context->lang->cmd_delete ?>" />
		<button type="button" onclick="history.back()"><?php echo $__Context->lang->cmd_cancel ?></button>
	</div>
</form>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/ena_board_set_simpledashed','_footer.html') ?>