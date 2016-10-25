<?php if(!defined("__XE__"))exit;
Context::addJsFile("./common/js/jquery.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/js_app.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/common.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/xml_handler.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/xml_js_filter.js", true, '', -100000)  ?>
<!--#Meta:modules/board/m.skins/sweetMobileBoard/js/mboard.js--><?php $__tmp=array('modules/board/m.skins/sweetMobileBoard/js/mboard.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/m.skins/sweetMobileBoard/css/smbStyle.css--><?php $__tmp=array('modules/board/m.skins/sweetMobileBoard/css/smbStyle.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/m.skins/sweetMobileBoard/css/smbReadStyle.css--><?php $__tmp=array('modules/board/m.skins/sweetMobileBoard/css/smbReadStyle.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/m.skins/sweetMobileBoard/css/xeicon/xeicon.min.css--><?php $__tmp=array('modules/board/m.skins/sweetMobileBoard/css/xeicon/xeicon.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/m.skins/sweetMobileBoard/js/script.js--><?php $__tmp=array('modules/board/m.skins/sweetMobileBoard/js/script.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/m.skins/sweetMobileBoard/js/script.js--><?php $__tmp=array('modules/board/m.skins/sweetMobileBoard/js/script.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/sweetMobileBoard','_setting.html') ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/sweetMobileBoard','_header.html') ?>
<div class="sweetMobileBoard">
	<div class="smbWriteHeader">
		<a href="<?php echo getUrl('act','') ?>" class="smbListBtn"><?php echo $__Context->lang->cmd_cancel ?></a>
		<h3><?php echo $__Context->lang->cmd_delete ?></h3>
	</div>
	<h2 style="text-align:center; color:#333; margin:20px 0 10px 0;"><?php echo $__Context->lang->cmd_document_do ?> <?php echo $__Context->lang->confirm_delete ?></h2>
	<p style="text-align:center; color:#555; margin-bottom:20px;"><?php echo $__Context->lang->msg_delete_extend_form ?></p>
    <form action="./" method="get" class="ff smbPadding" onsubmit="return procFilter(this, delete_document)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
		<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
		<input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
		<div class="bna">
			<button type="submit" class="" style="width:100%; height:40px; background:#ff6f6f; color:#fff; border:0; border-radius:3px;"><?php echo $__Context->lang->approval ?></button>
		</div>
    </form>
</div>
