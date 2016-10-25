<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/ena_board_set_simpledashed','_header.html') ?>
<div id="categoryWrap">
	<?php if($__Context->module_info->use_category=='Y'){ ?><ul id="header_category" class="category">
		<li<?php if(!$__Context->category){ ?> class="on"<?php } ?>><a href="<?php echo getUrl('category','','page','') ?>"><?php echo $__Context->lang->total;
if($__Context->count){ ?><span>(<?php echo $__Context->count ?>)</span><?php } ?></a></li>
		<?php if($__Context->cate_list&&count($__Context->cate_list))foreach($__Context->cate_list as $__Context->key=>$__Context->val){ ?><li<?php if($__Context->category==$__Context->val->category_srl){ ?> class="on"<?php } ?>><a href="<?php echo getUrl(category,$__Context->val->category_srl,'document_srl','', 'page', '') ?>"><?php echo $__Context->val->title;
if($__Context->val->document_count){ ?><span>(<?php echo $__Context->val->document_count ?>)</span><?php } ?></a>
			<?php if(count($__Context->val->children)){ ?><ul>
				<?php if($__Context->val->children&&count($__Context->val->children))foreach($__Context->val->children as $__Context->idx=>$__Context->item){ ?><li<?php if($__Context->category==$__Context->item->category_srl){ ?> class="on_"<?php } ?>><a href="<?php echo getUrl(category,$__Context->item->category_srl,'document_srl','', 'page', '') ?>">-<?php echo $__Context->item->title;
if($__Context->item->document_count){ ?><span>(<?php echo $__Context->item->document_count ?>)</span><?php } ?></a></li><?php } ?>
			</ul><?php } ?>
		</li><?php } ?>
	</ul><?php } ?>
	<?php if($__Context->module_info->use_category=='Y'){ ?><a id="scrollLeft" href="#">&lt;</a><?php } ?>
	<?php if($__Context->module_info->use_category=='Y'){ ?><a id="scrollRight" href="#">&gt;</a><?php } ?>
</div>
<?php if($__Context->oDocument->isExists()){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/ena_board_set_simpledashed','_read.html');
} ?>
<div class="board_list" id="board_list">
	<table width="100%" border="1" cellspacing="0" summary="List of Articles">
		<thead>
			<!-- LIST HEADER -->
			
			<!-- /LIST HEADER -->
		</thead>
		<?php if(!$__Context->document_list && !$__Context->notice_list){ ?><tbody>
			<tr>
				<td<?php if(!$__Context->grant->manager){ ?> colspan="<?php echo count($__Context->list_config) ?>"<?php };
if($__Context->grant->manager){ ?> colspan="<?php echo count($__Context->list_config)+1 ?>"<?php } ?>>
					<p style="text-align:center"><?php echo $__Context->lang->no_documents ?></p>
				</td>
			</tr>
		</tbody><?php } ?>
		<?php if($__Context->document_list || $__Context->notice_list){ ?><tbody>
			<!-- NOTICE -->
			<?php if($__Context->notice_list&&count($__Context->notice_list))foreach($__Context->notice_list as $__Context->no=>$__Context->document){ ?><tr class="notice">
				<?php if($__Context->list_config&&count($__Context->list_config))foreach($__Context->list_config as $__Context->key=>$__Context->val){ ?>
				<?php if($__Context->val->type=='no' && $__Context->val->idx==-1){ ?><td class="notice">
					<?php if($__Context->document_srl==$__Context->document->document_srl){ ?>&gt;<?php } ?>
					<?php if($__Context->document_srl!=$__Context->document->document_srl){;
echo $__Context->lang->notice;
} ?>
				</td><?php } ?>
				<?php if($__Context->val->type=='title' && $__Context->val->idx==-1){ ?>
				<?php if($__Context->module_info->use_category=='Y' && $__Context->module_info->list_category=='td'){ ?><td class="category">
					<?php echo $__Context->cate_list[$__Context->document->get('category_srl')]->title ?>
					<?php if(!$__Context->document->get('category_srl')){ ?>-<?php } ?>
				</td><?php } ?>
					<td class="title">
						<?php if($__Context->module_info->use_category=='Y' && $__Context->module_info->list_category=='seperate' && $__Context->document->get('category_srl')){ ?><span class="category"><?php echo $__Context->cate_list[$__Context->document->get('category_srl')]->title ?></span><?php } ?>
						<a<?php if($__Context->module_info->list_style==!'link'){ ?> href="<?php echo getUrl('document_srl',$__Context->document->document_srl, 'listStyle', $__Context->listStyle, 'cpage','') ?>"<?php };
if($__Context->module_info->list_style=='link'){ ?> href="<?php echo $__Context->document->getExtraEidValue('link_url') ?>"<?php };
if($__Context->module_info->list_style=='link'){ ?> target="_blank"<?php } ?>><?php echo $__Context->document->getTitle() ?></a>
						<?php if($__Context->document->getCommentCount()){ ?><a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>#comment" class="replyNum opt" title="Replies">
							<?php echo $__Context->document->getCommentCount() ?>
						</a><?php } ?>
						<?php if($__Context->document->variables[status]=='SECRET'){ ?><span class="secret opt">secret</span><?php } ?>
						
						<?php if((int)($__Context->document->getRegdate('YmdHis')>date("YmdHis", time()-$__Context->module_info->duration_new*60*60))){ ?>
						<span class="new opt">new</span><?php } ?>
						<?php if($__Context->module_info->list_style=='link' && $__Context->document->isGranted()){ ?><a class="mod opt" href="<?php echo getUrl('document_srl',$__Context->document->document_srl, 'listStyle', $__Context->listStyle, 'cpage','') ?>">mod</a><?php } ?>
					</td>
				<?php } ?>
				<?php if($__Context->val->type=='nick_name' && $__Context->val->idx==-1){ ?><td class="author"><a href="#popup_menu_area" class="member_<?php echo $__Context->document->get('member_srl') ?>" onclick="return false"><?php echo $__Context->document->getNickName() ?></a></td><?php } ?>
				<?php if($__Context->val->type=='user_id' && $__Context->val->idx==-1){ ?><td class="author"><?php echo $__Context->document->getUserID() ?></td><?php } ?>
				<?php if($__Context->val->type=='user_name' && $__Context->val->idx==-1){ ?><td class="author"><?php echo $__Context->document->getUserName() ?></td><?php } ?>
				<?php if($__Context->val->type=='regdate' && $__Context->val->idx==-1){ ?><td class="time"><?php echo $__Context->document->getRegdate('Y.m.d') ?></td><?php } ?>
				<?php if($__Context->val->type=='last_update' && $__Context->val->idx==-1){ ?><td class="time"><?php echo zdate($__Context->document->get('last_update'),'Y.m.d') ?></td><?php } ?>
				<?php if($__Context->val->type=='last_post' && $__Context->val->idx==-1){ ?><td class="lastReply">
					<?php if((int)($__Context->document->get('comment_count'))>0){ ?>
						<a href="<?php echo $__Context->document->getPermanentUrl() ?>#comment" title="Last Reply">
							<?php echo zdate($__Context->document->get('last_update'),'Y.m.d') ?>
						</a>
						<?php if($__Context->document->getLastUpdater()){ ?><span>
							<sub>by</sub>
							<?php echo $__Context->document->getLastUpdater() ?>
						</span><?php } ?>
					<?php } ?>
					<?php if((int)($__Context->document->get('comment_count'))==0){ ?>&nbsp;<?php } ?>
				</td><?php } ?>
				<?php if($__Context->val->type=='readed_count' && $__Context->val->idx==-1){ ?><td class="readNum"><?php echo $__Context->document->get('readed_count')>0?$__Context->document->get('readed_count'):'0' ?></td><?php } ?>
				<?php if($__Context->val->type=='voted_count' && $__Context->val->idx==-1){ ?><td class="voteNum"><?php echo $__Context->document->get('voted_count')!=0?$__Context->document->get('voted_count'):'0' ?></td><?php } ?>
				<?php if($__Context->val->type=='blamed_count' && $__Context->val->idx==-1){ ?><td class="voteNum"><?php echo $__Context->document->get('blamed_count')!=0?$__Context->document->get('blamed_count'):'0' ?></td><?php } ?>
				<?php if($__Context->val->idx!=-1){ ?><td><?php echo $__Context->document->getExtraValueHTML($__Context->val->idx) ?>&nbsp;</td><?php } ?>
				<?php } ?>
				<?php if($__Context->grant->manager){ ?><td class="check"><input type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" class="iCheck" title="Check This Article" onclick="doAddDocumentCart(this)"<?php if($__Context->document->isCarted()){ ?> checked="checked"<?php } ?> /></td><?php } ?>
			</tr><?php } ?>
			<!-- /NOTICE -->
			<!-- LIST -->
			<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->no=>$__Context->document){ ?><tr>
				<?php if($__Context->list_config&&count($__Context->list_config))foreach($__Context->list_config as $__Context->key=>$__Context->val){ ?>
				<?php if($__Context->val->type=='no' && $__Context->val->idx==-1){ ?><td class="no">
					<?php if($__Context->document_srl==$__Context->document->document_srl){ ?>&gt;<?php } ?>
					<?php if($__Context->document_srl!=$__Context->document->document_srl){;
echo $__Context->no;
} ?>
				</td><?php } ?>
				<?php if($__Context->val->type=='title' && $__Context->val->idx==-1){ ?>
					<?php if($__Context->module_info->use_category=='Y' && $__Context->module_info->list_category=='td'){ ?><td class="category">
						<?php echo $__Context->cate_list[$__Context->document->get('category_srl')]->title ?>
						<?php if(!$__Context->document->get('category_srl')){ ?>-<?php } ?>
					</td><?php } ?>
					<td class="title">
						<?php if($__Context->module_info->use_category=='Y' && $__Context->module_info->list_category=='seperate' && $__Context->document->get('category_srl')){ ?><span class="category"><?php echo $__Context->cate_list[$__Context->document->get('category_srl')]->title ?></span><?php } ?>
						<a<?php if($__Context->module_info->list_style==!'link'){ ?> href="<?php echo getUrl('document_srl',$__Context->document->document_srl, 'listStyle', $__Context->listStyle, 'cpage','') ?>"<?php };
if($__Context->module_info->list_style=='link'){ ?> href="<?php echo $__Context->document->getExtraEidValue('link_url') ?>"<?php };
if($__Context->module_info->list_style=='link'){ ?> target="_blank"<?php } ?>><?php echo $__Context->document->getTitle() ?></a>
						<?php if($__Context->document->getCommentCount()){ ?><a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>#comment" class="replyNum opt" title="Replies"><?php echo $__Context->document->getCommentCount() ?></a><?php } ?>
						<?php if($__Context->document->variables[status]=='SECRET'){ ?><span class="secret opt">secret</span><?php } ?>
						
						<?php if((int)($__Context->document->getRegdate('YmdHis')>date("YmdHis", time()-$__Context->module_info->duration_new*60*60))){ ?>
						<span class="new opt">new</span><?php } ?>
						<?php if($__Context->module_info->list_style=='link' && $__Context->document->isGranted()){ ?><a class="mod opt" href="<?php echo getUrl('document_srl',$__Context->document->document_srl, 'listStyle', $__Context->listStyle, 'cpage','') ?>">mod</a><?php } ?>
					</td>
				<?php } ?>
				<?php if($__Context->val->type=='nick_name' && $__Context->val->idx==-1){ ?><td class="author"><a href="#popup_menu_area" class="member_<?php echo $__Context->document->get('member_srl') ?>" onclick="return false"><?php echo $__Context->document->getNickName() ?></a></td><?php } ?>
				<?php if($__Context->val->type=='user_id' && $__Context->val->idx==-1){ ?><td class="author"><?php echo $__Context->document->getUserID() ?></td><?php } ?>
				<?php if($__Context->val->type=='user_name' && $__Context->val->idx==-1){ ?><td class="author"><?php echo $__Context->document->getUserName() ?></td><?php } ?>
				<?php if($__Context->val->type=='regdate' && $__Context->val->idx==-1){ ?><td class="time"><?php echo $__Context->document->getRegdate('Y.m.d') ?></td><?php } ?>
				<?php if($__Context->val->type=='last_update' && $__Context->val->idx==-1){ ?><td class="time"><?php echo zdate($__Context->document->get('last_update'),'Y.m.d') ?></td><?php } ?>
				<?php if($__Context->val->type=='last_post' && $__Context->val->idx==-1){ ?><td class="lastReply">
					<?php if((int)($__Context->document->get('comment_count'))>0){ ?>
						<a href="<?php echo $__Context->document->getPermanentUrl() ?>#comment" title="Last Reply">
							<?php echo zdate($__Context->document->get('last_update'),'Y.m.d') ?>
						</a>
						<?php if($__Context->document->getLastUpdater()){ ?><span>
							<sub>by</sub>
							<?php echo $__Context->document->getLastUpdater() ?>
						</span><?php } ?>
					<?php } ?>
					<?php if((int)($__Context->document->get('comment_count'))==0){ ?>&nbsp;<?php } ?>
				</td><?php } ?>
				<?php if($__Context->val->type=='readed_count' && $__Context->val->idx==-1){ ?><td class="readNum"><?php echo $__Context->document->get('readed_count')>0?$__Context->document->get('readed_count'):'0' ?></td><?php } ?>
				<?php if($__Context->val->type=='voted_count' && $__Context->val->idx==-1){ ?><td class="voteNum"><?php echo $__Context->document->get('voted_count')!=0?$__Context->document->get('voted_count'):'0' ?></td><?php } ?>
				<?php if($__Context->val->type=='blamed_count' && $__Context->val->idx==-1){ ?><td class="voteNum"><?php echo $__Context->document->get('blamed_count')!=0?$__Context->document->get('blamed_count'):'0' ?></td><?php } ?>
				<?php if($__Context->val->idx!=-1){ ?><td><?php echo $__Context->document->getExtraValueHTML($__Context->val->idx) ?>&nbsp;</td><?php } ?>
				<?php } ?>
				<?php if($__Context->grant->manager){ ?><td class="check"><input type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" class="iCheck" title="Check This Article" onclick="doAddDocumentCart(this)"<?php if($__Context->document->isCarted()){ ?> checked="checked"<?php } ?> /></td><?php } ?>
			</tr><?php } ?>
			<!-- /LIST -->
		</tbody><?php } ?>
	</table>
</div>
<div class="list_footer">
	<?php if($__Context->document_list || $__Context->notice_list){ ?><div class="pagination">
		<?php if($__Context->page != $__Context->page_navigation->first_page){ ?><a href="<?php echo getUrl('page','','document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>" class="direction prev"><span></span><span></span> &lt;</a><?php } ?> 
		<?php while($__Context->page_no=$__Context->page_navigation->getNextPage()){ ?>
			<?php if($__Context->page==$__Context->page_no){ ?><strong class="now num"><?php echo $__Context->page_no ?></strong><?php } ?> 
			<?php if($__Context->page!=$__Context->page_no){ ?><a class="num" href="<?php echo getUrl('page',$__Context->page_no,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>"><?php echo $__Context->page_no ?></a><?php } ?>
		<?php } ?>
		<?php if($__Context->page != $__Context->page_navigation->last_page){ ?><a href="<?php echo getUrl('page',$__Context->page_navigation->last_page,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>" class="direction next">&gt; <span></span><span></span></a><?php } ?>
	</div><?php } ?>
	<div class="btnArea">
		<?php if($__Context->grant->write_document){ ?><a href="<?php echo getUrl('act','dispBoardWrite','document_srl','') ?>"><?php echo $__Context->lang->cmd_write ?></a><?php } ?>
		<?php if($__Context->grant->manager){ ?><a href="<?php echo getUrl('','module','document','act','dispDocumentManageDocument') ?>"  onclick="popopen(this.href,'manageDocument'); return false;"><?php echo $__Context->lang->cmd_manage_document ?></a><?php } ?>
	</div>
	<?php if($__Context->grant->view){ ?><form action="<?php echo getUrl() ?>" method="get" onsubmit="return procFilter(this, search)" id="board_search" class="board_search" ><input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
		<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
		<input type="hidden" name="category" value="<?php echo $__Context->category ?>" />
		<input type="text" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" title="<?php echo $__Context->lang->cmd_search ?>" class="iText" />
		<select name="search_target">
			<?php if($__Context->search_option&&count($__Context->search_option))foreach($__Context->search_option as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->search_target==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val ?></option><?php } ?>
		</select>
		<button type="submit" onclick="xGetElementById('board_search').submit();return false;"><?php echo $__Context->lang->cmd_search ?></button>
        <?php if($__Context->last_division){ ?><a href="<?php echo getUrl('page',1,'document_srl','','division',$__Context->last_division,'last_division','') ?>" class="btn"><?php echo $__Context->lang->cmd_search_next ?></a><?php } ?>
	</form><?php } ?>
	
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/ena_board_set_simpledashed','_footer.html') ?>
