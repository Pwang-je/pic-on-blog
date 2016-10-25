<?php if(!defined("__XE__"))exit;
Context::addJsFile("./common/js/jquery.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/js_app.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/common.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/xml_handler.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/xml_js_filter.js", true, '', -100000)  ?>
<!--#Meta:modules/board/m.skins/sweetMobileBoard/js/mboard.js--><?php $__tmp=array('modules/board/m.skins/sweetMobileBoard/js/mboard.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/m.skins/sweetMobileBoard/css/smbReadStyle.css--><?php $__tmp=array('modules/board/m.skins/sweetMobileBoard/css/smbReadStyle.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/m.skins/sweetMobileBoard/css/smbStyle.css--><?php $__tmp=array('modules/board/m.skins/sweetMobileBoard/css/smbStyle.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/m.skins/sweetMobileBoard/css/xeicon/xeicon.min.css--><?php $__tmp=array('modules/board/m.skins/sweetMobileBoard/css/xeicon/xeicon.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/m.skins/sweetMobileBoard/js/script.js--><?php $__tmp=array('modules/board/m.skins/sweetMobileBoard/js/script.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/sweetMobileBoard','_setting.html') ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/sweetMobileBoard','_header.html') ?>
<div class="sweetMobileBoard">
	<div class="smbWriteHeader">
		<a href="javascript:history.back()" class="smbListBtn"><?php echo $__Context->lang->cmd_prev ?></a>
		<h3><?php echo $__Context->lang->write_comment ?></h3>
	</div>
	<?php if($__Context->oSourceComment->isExists()){ ?><div class="smbCommentList" style="padding:10px; background:#f4f4f4; border-bottom:1px solid #cfd1d4;">
		<ul class="fbList">
			<li class="fbItem" id="comment_<?php echo $__Context->oSourceComment->get('comment_srl') ?>">
				<div class="profile">
					<?php if($__Context->oSourceComment->getProfileImage()){ ?><div class="image" style="background-image:url(<?php echo $__Context->oSourceComment->getProfileImage() ?>);"></div><?php } ?>
					<?php if(!$__Context->oSourceComment->getProfileImage()){ ?><div class="image none"></div><?php } ?>
					<p class="author"><?php echo $__Context->oSourceComment->get('nick_name') ?></p>
				</div>
				<div class="content">
					<?php echo $__Context->oSourceComment->getContent(false) ?>
					<p class="action">
						<span style="font-size:0.8em; color:#ccc;"><?php echo $__Context->oSourceComment->getRegdate('Y.m.d H:i') ?></span>
					</p>
				</div>
			</li>
		</ul>
	</div><?php } ?>
	<div style="padding:10px; background:#f4f4f4;">
		<form action="./" method="post" class="smbCommentAdd" onsubmit="return procFilter(this, insert_comment);"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
			<input type="hidden" name="document_srl" value="<?php echo $__Context->oComment->get('document_srl') ?>" />
			<input type="hidden" name="comment_srl" value="<?php echo $__Context->oComment->get('comment_srl') ?>" />
			<input type="hidden" name="parent_srl" value="<?php echo $__Context->oComment->get('parent_srl') ?>" />
			<div class="smbPadding smbCommentAddTitle">
				<i class="xe-message-bubble"></i><?php echo $__Context->lang->write_comment ?>
			</div>
			<div class="smbCommentAddComment">
				<textarea name="content" rows="4" cols="42" id="rText" placeholder="<?php echo $__Context->lang->comment ?>"></textarea>
			</div>
			<div class="smbElse">
				<input name="" type="submit" value="<?php echo $__Context->lang->cmd_comment_registration ?>"<?php if(!$__Context->is_logged){ ?> class="big"<?php } ?> />
				<?php if(!$__Context->is_logged){ ?><ul class="elseInfo">
					<li>
						<input name="nick_name" type="text" id="uName" placeholder="<?php echo $__Context->lang->writer ?>" />
					</li>
					<li>
						<input name="email_address" type="email" id="uMail" placeholder="<?php echo $__Context->lang->email_address ?>" />
					</li>
					<li>
						<input name="password" type="password" id="uPw" placeholder="<?php echo $__Context->lang->password ?>" />
					</li>
					<li>
						<input name="homepage" type="url" id="uSite" value="http://" placeholder="<?php echo $__Context->lang->homepage ?>" />
					</li>
				</ul><?php } ?>
			</div>
		</form>
	</div>
</div>
