<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/board/m.skins/sweetMobileBoard/css/smbCardStyle.css--><?php $__tmp=array('modules/board/m.skins/sweetMobileBoard/css/smbCardStyle.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="smbCardWrap">
	<ul class="smbCard">
		<?php if($__Context->notice_list&&count($__Context->notice_list))foreach($__Context->notice_list as $__Context->no=>$__Context->document){ ?><li>
			<a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>">
				<div<?php if($__Context->document->getThumbnail()){ ?> class="smbInfo"<?php };
if(!$__Context->document->getThumbnail()){ ?> class="smbInfo noThumb"<?php } ?>>
					<p class="title"><span class="notice"><?php echo $__Context->lang->notice ?></span><?php echo $__Context->document->getTitle(0) ?></p>
					<ul class="category">
						<?php if($__Context->module_info->view_category == 'Y'){ ?><li class="category"><?php echo $__Context->category_list[$__Context->document->get('category_srl')]->title ?></li><?php } ?>
						<?php if($__Context->module_info->view_author == 'Y'){ ?><li class="nickname"><?php echo $__Context->document->getNickName() ?></li><?php } ?>
						<?php if($__Context->module_info->view_regdate == 'Y'){ ?><li class="regdate"><?php echo $__Context->document->getRegDate("Y.m.d") ?></li><?php } ?>
					</ul>
					<p class="summary"><?php echo $__Context->document->getSummary(1000) ?></p>
					<ul class="smbIcon">
						<?php if($__Context->module_info->view_vote == 'Y'){ ?><li class="voted">
							<i class="xe-heart"></i>
							<span class="text"><?php echo $__Context->lang->voted_count ?></span>
							<span class="num"><?php echo $__Context->document->get('voted_count')!=0?$__Context->document->get('voted_count'):'0' ?><span>
						</li><?php } ?>
						<?php if($__Context->module_info->view_comment == 'Y'){ ?><li class="comment">
							<i class="xe-comment-list"></i>
							<span class="text"><?php echo $__Context->lang->comment ?></span>
							<span class="num"><?php echo $__Context->document->getCommentCount() ?><span>
						</li><?php } ?>
						<?php if($__Context->module_info->view_read == 'Y'){ ?><li class="view">
							<i class="xe-eye"></i>
							<span class="text"><?php echo $__Context->lang->readed_count ?></span>
							<span class="num"><?php echo $__Context->document->get('readed_count') ?><span>
						</li><?php } ?>
					</ul>
				</div>
				<div<?php if($__Context->document->getThumbnail()){ ?> class="smbCardContent"<?php };
if(!$__Context->document->getThumbnail()){ ?> class="smbCardContent noThumb"<?php } ?>>
					
					<?php if($__Context->document->getThumbnail() && $__Context->module_info->thumb == 'y'){ ?>
					<div class="smbThumbnail"  style="background-image:url(<?php echo $__Context->document->getThumbnail(360,360,'ratio') ?>);"></div>
					<?php }else{ ?>
					<div class="smbSummary">
						<p><?php echo $__Context->document->getSummary(1000) ?></p>
					</div>
					<?php } ?>
					<ul class="smbIcon">
						<?php if($__Context->module_info->view_vote == 'Y'){ ?><li class="voted">
							<i class="xe-heart"></i>
							<span class="text"><?php echo $__Context->lang->voted_count ?></span>
							<span class="num"><?php echo $__Context->document->get('voted_count')!=0?$__Context->document->get('voted_count'):'0' ?><span>
						</li><?php } ?>
						<?php if($__Context->module_info->view_comment == 'Y'){ ?><li class="comment">
							<i class="xe-comment-list"></i>
							<span class="text"><?php echo $__Context->lang->comment ?></span>
							<span class="num"><?php echo $__Context->document->getCommentCount() ?><span>
						</li><?php } ?>
						<?php if($__Context->module_info->view_read == 'Y'){ ?><li class="view">
							<i class="xe-eye"></i>
							<span class="text"><?php echo $__Context->lang->readed_count ?></span>
							<span class="num"><?php echo $__Context->document->get('readed_count') ?><span>
						</li><?php } ?>
					</ul>
					<span class="border"></span>
				</div>
			</a>
		</li><?php } ?>
		<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->no=>$__Context->document){ ?><li>
			<a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>">
				<div<?php if($__Context->document->getThumbnail()){ ?> class="smbInfo"<?php };
if(!$__Context->document->getThumbnail()){ ?> class="smbInfo noThumb"<?php } ?>>
					<p class="title"><?php echo $__Context->document->getTitle(0) ?></p>
					<ul class="category">
						<?php if($__Context->module_info->view_category == 'Y'){ ?><li class="category"><?php echo $__Context->category_list[$__Context->document->get('category_srl')]->title ?></li><?php } ?>
						<?php if($__Context->module_info->view_author == 'Y'){ ?><li class="nickname"><?php echo $__Context->document->getNickName() ?></li><?php } ?>
						<?php if($__Context->module_info->view_regdate == 'Y'){ ?><li class="regdate"><?php echo $__Context->document->getRegDate("Y.m.d") ?></li><?php } ?>
					</ul>
					<p class="summary"><?php echo $__Context->document->getSummary(1000) ?></p>
					<ul class="smbIcon">
						<?php if($__Context->module_info->view_vote == 'Y'){ ?><li class="voted">
							<i class="xe-heart"></i>
							<span class="text"><?php echo $__Context->lang->voted_count ?></span>
							<span class="num"><?php echo $__Context->document->get('voted_count')!=0?$__Context->document->get('voted_count'):'0' ?><span>
						</li><?php } ?>
						<?php if($__Context->module_info->view_comment == 'Y'){ ?><li class="comment">
							<i class="xe-comment-list"></i>
							<span class="text"><?php echo $__Context->lang->comment ?></span>
							<span class="num"><?php echo $__Context->document->getCommentCount() ?><span>
						</li><?php } ?>
						<?php if($__Context->module_info->view_read == 'Y'){ ?><li class="view">
							<i class="xe-eye"></i>
							<span class="text"><?php echo $__Context->lang->readed_count ?></span>
							<span class="num"><?php echo $__Context->document->get('readed_count') ?><span>
						</li><?php } ?>
					</ul>
				</div>
				<div<?php if($__Context->document->getThumbnail()){ ?> class="smbCardContent"<?php };
if(!$__Context->document->getThumbnail()){ ?> class="smbCardContent noThumb"<?php } ?>>
					<?php if($__Context->document->getThumbnail() && $__Context->module_info->thumb == 'y'){ ?>
					<div class="smbThumbnail" style="background-image:url(<?php echo $__Context->document->getThumbnail(360,360,'ratio') ?>);"></div>
					<?php }else{ ?>
					<div class="smbSummary">
						<p><?php echo $__Context->document->getSummary(1000) ?></p>
					</div>
					<?php } ?>
					<ul class="smbIcon">
						<?php if($__Context->module_info->view_vote == 'Y'){ ?><li class="voted">
							<i class="xe-heart"></i>
							<span class="text"><?php echo $__Context->lang->voted_count ?></span>
							<span class="num"><?php echo $__Context->document->get('voted_count')!=0?$__Context->document->get('voted_count'):'0' ?><span>
						</li><?php } ?>
						<?php if($__Context->module_info->view_comment == 'Y'){ ?><li class="comment">
							<i class="xe-comment-list"></i>
							<span class="text"><?php echo $__Context->lang->comment ?></span>
							<span class="num"><?php echo $__Context->document->getCommentCount() ?><span>
						</li><?php } ?>
						<?php if($__Context->module_info->view_read == 'Y'){ ?><li class="view">
							<i class="xe-eye"></i>
							<span class="text"><?php echo $__Context->lang->readed_count ?></span>
							<span class="num"><?php echo $__Context->document->get('readed_count') ?><span>
						</li><?php } ?>
					</ul>
					<span class="border"></span>
				</div>
			</a>
		</li><?php } ?>
	</ul>
</div>