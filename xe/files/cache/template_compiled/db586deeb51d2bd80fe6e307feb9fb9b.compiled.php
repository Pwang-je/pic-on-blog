<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/board/skins/ena_board_set_simpledashed/style.default.css--><?php $__tmp=array('modules/board/skins/ena_board_set_simpledashed/style.default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/skins/ena_board_set_simpledashed/board.default.js--><?php $__tmp=array('modules/board/skins/ena_board_set_simpledashed/board.default.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
 
<?php if($__Context->module_info->default_style=='diary'){ ?> 
	<!--#Meta:modules/board/skins/ena_board_set_simpledashed/style.diary.css--><?php $__tmp=array('modules/board/skins/ena_board_set_simpledashed/style.diary.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }elseif($__Context->module_info->default_style=='memo'){ ?> 
	<!--#Meta:modules/board/skins/ena_board_set_simpledashed/style.memo.css--><?php $__tmp=array('modules/board/skins/ena_board_set_simpledashed/style.memo.css','','','');Context::loadFile($__tmp);unset($__tmp); ?> 
<?php }elseif($__Context->module_info->default_style=='1line_memo'){ ?> 
	<!--#Meta:modules/board/skins/ena_board_set_simpledashed/style.1line.css--><?php $__tmp=array('modules/board/skins/ena_board_set_simpledashed/style.1line.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }elseif($__Context->module_info->default_style=='guestbook'){ ?> 
	<!--#Meta:modules/board/skins/ena_board_set_simpledashed/style.guestbook.css--><?php $__tmp=array('modules/board/skins/ena_board_set_simpledashed/style.guestbook.css','','','');Context::loadFile($__tmp);unset($__tmp); ?> 
<?php }elseif($__Context->module_info->default_style=='gallery'){ ?> 
	<!--#Meta:modules/board/skins/ena_board_set_simpledashed/style.gallery.css--><?php $__tmp=array('modules/board/skins/ena_board_set_simpledashed/style.gallery.css','','','');Context::loadFile($__tmp);unset($__tmp); ?> 
<?php }elseif($__Context->module_info->default_style=='banner_link'){ ?> 
	<!--#Meta:modules/board/skins/ena_board_set_simpledashed/style.bannerlink.css--><?php $__tmp=array('modules/board/skins/ena_board_set_simpledashed/style.bannerlink.css','','','');Context::loadFile($__tmp);unset($__tmp); ?> 
<?php }else{ ?> 
	<!--#Meta:modules/board/skins/ena_board_set_simpledashed/style.normal.css--><?php $__tmp=array('modules/board/skins/ena_board_set_simpledashed/style.normal.css','','','');Context::loadFile($__tmp);unset($__tmp); ?> 
<?php } ?> 
<?php if($__Context->order_type == "desc"){ ?>
    <?php  $__Context->order_type = "asc";  ?>
<?php }else{ ?>
    <?php  $__Context->order_type = "desc";  ?>
<?php } ?>
<?php if(!$__Context->module_info->duration_new = (int)$__Context->module_info->duration_new){;
$__Context->module_info->duration_new = 12;
} ?>
<?php  $__Context->cate_list = array(); $__Context->current_key = null;  ?>
<?php if($__Context->category_list&&count($__Context->category_list))foreach($__Context->category_list as $__Context->key=>$__Context->val){ ?>
	<?php if(!$__Context->val->depth){ ?>
		<?php 
			$__Context->cate_list[$__Context->key] = $__Context->val;
			$__Context->cate_list[$__Context->key]->children = array();
			$__Context->current_key = $__Context->key;
		 ?>
	<?php }elseif($__Context->current_key){ ?>
		<?php  $__Context->cate_list[$__Context->current_key]->children[] = $__Context->val  ?>
	<?php } ?>
<?php } ?>
<!-- skin title : 이나 통합 게시판 - simpleDashed, ver : 1.0.0, by 이나( http://starlight01.tistory.com/ ) - 이 주석은 지우지 마세요 -->
<?php if($__Context->module_info->point_color){ ?>
<?php if($__Context->module_info->point_color){ ?><style type="text/css">
.board a:hover, .board a:active,
.pagination .now,
button:hover, button:active,
.read_body .secret, .feedback .secret,
.context_data .title, .context_message .title,
.btnArea input[type="submit"]:hover, .btnArea input[type="submit"]:active,
.read_header .secretMark, .feedback .secretMark{color:<?php echo $__Context->module_info->point_color ?>;}
ul.category .on>a, ul.category .on_>a{border-color:<?php echo $__Context->module_info->point_color ?>;}
</style><?php } ?>
<?php if($__Context->module_info->point_color && $__Context->module_info->default_style=='diary'){ ?><style type="text/css">
.board_read .read_header .titleWrap .title:link, .board_read .read_header .titleWrap .title:visited{color:<?php echo $__Context->module_info->point_color ?>;}
</style><?php } ?>
<?php if($__Context->module_info->point_color && $__Context->module_info->default_style=='memo'){ ?><style type="text/css">
.board_read .read_header .titleWrap .date:link, .board_read .read_header .titleWrap .date:visited,
.feedback .fbList .fbMeta .time{color:<?php echo $__Context->module_info->point_color ?>;}
</style><?php } ?>
<?php if($__Context->module_info->point_color && $__Context->module_info->default_style=='1line_memo'){ ?><style type="text/css">
.noticeDocument .read_header .name, .feedback .fbList .fbMeta .author .replyMark,
.read_body .secretMark, .feedback .secretMark{color:<?php echo $__Context->module_info->point_color ?>;}
</style><?php } ?>
<?php if($__Context->module_info->point_color && $__Context->module_info->default_style=='gallery'){ ?><style type="text/css">
.board_list .notice .notice,
.board_list .opt:link, .board_list .opt:visited, .board_list .opt,
.board_read .read_header .category a:link, .board_read .read_header .category a:visited,
.read_footer .sign .sign_title{color:<?php echo $__Context->module_info->point_color ?>;}
</style><?php } ?>
<?php if($__Context->module_info->point_color && $__Context->module_info->default_style=='guestbook'){ ?><style type="text/css">
.board .read_header .title a:link, .board .read_header .title a:visited,
.feedback .fbList .replyMark{color:<?php echo $__Context->module_info->point_color ?>;}
</style><?php } ?>
<?php if($__Context->module_info->point_color && $__Context->module_info->default_style=='banner_link'){ ?><style type="text/css">
.board_list  .link_title .category, 
.board_list .notice .link_title a:link, .board_list .notice .link_title a:visited, 
.board_list .opt:link, .board_list .opt:visited, .board_list .opt,
.board_read .read_header .category a:link, .board_read .read_header .category a:visited,
.read_footer .sign .sign_title{color:<?php echo $__Context->module_info->point_color ?>;}
</style><?php } ?>
<?php if($__Context->module_info->point_color && $__Context->module_info->default_style==''){ ?><style type="text/css">
.board_list .notice .notice,
.board_list .opt:link, .board_list .opt:visited, .board_list .opt,
.board_read .read_header .category a:link, .board_read .read_header .category a:visited,
.read_footer .sign .sign_title{color:<?php echo $__Context->module_info->point_color ?>;}
</style><?php } ?>
<?php } ?>
<script type="text/javascript">
function showhide(idMyDiv){
    var objDiv = document.getElementById(idMyDiv);
    if(objDiv.style.display=="block"){ objDiv.style.display = "none"; }
    else{ objDiv.style.display = "block"; }
  }
</script>
<?php if($__Context->module_info->default_style=='diary' || $__Context->module_info->default_style=='memo' || $__Context->module_info->default_style=='1line_memo' || $__Context->module_info->default_style=='guestbook'){ ?><script type="text/javascript">
//create and delete action
function completeDocumentInserted(ret_obj)
{
    var error = ret_obj.error;
    var message = ret_obj.message;
    var mid = ret_obj.mid;
    var document_srl = ret_obj.document_srl;
    var category_srl = ret_obj.category_srl;
    var url = request_uri+mid;
    location.href = url;
}
function completeDocumentInserted(ret_obj)
{
    var error = ret_obj.error;
    var message = ret_obj.message;
    var mid = ret_obj.mid;
    var document_srl = ret_obj.document_srl;
    var category_srl = ret_obj.category_srl;
    var url = request_uri+mid;
    location.href = url;
}
function completeInsertComment(ret_obj) {
    var error = ret_obj.error;
    var message = ret_obj.message;
    var mid = ret_obj.mid;
    var document_srl = ret_obj.document_srl;
    var comment_srl = ret_obj.comment_srl;
    var url = request_uri+mid;
    location.href = url;
}
function completeDeleteDocument(ret_obj) {
    var error = ret_obj.error;
    var message = ret_obj.message;
    var mid = ret_obj.mid;
    var page = ret_obj.page;
    var url = request_uri+mid;
    location.href = url;
  }
function completeDeleteComment(ret_obj) {
    var error = ret_obj.error;
    var message = ret_obj.message;
    var mid = ret_obj.mid;
    var document_srl = ret_obj.document_srl;
    var page = ret_obj.page;
    var url = request_uri+mid;
    location.href = url;
  }
</script><?php } ?>
<?php 
 $__Context->oDocumentModel = &getModel('document');
 $__Context->count = $__Context->oDocumentModel->getDocumentCount($__Context->val->module_srl);
 ?>
<div class="board">
	<?php echo $__Context->module_info->header_text ?>
	<?php if($__Context->module_info->title_image || $__Context->grant->manager){ ?><div class="board_header">
		<?php if($__Context->module_info->title_image){ ?><h2><a href="<?php echo getUrl('','mid',$__Context->mid) ?>"><img src="<?php echo $__Context->module_info->title_image ?>" alt="<?php echo $__Context->module_info->title_alt ?>" /></a></h2><?php } ?>
		<?php if($__Context->grant->manager){ ?><a class="setup" href="<?php echo getUrl('act','dispBoardAdminBoardInfo') ?>" title="<?php echo $__Context->lang->cmd_setup ?>"><?php echo $__Context->lang->cmd_setup ?></a><?php } ?>
	</div><?php } ?>