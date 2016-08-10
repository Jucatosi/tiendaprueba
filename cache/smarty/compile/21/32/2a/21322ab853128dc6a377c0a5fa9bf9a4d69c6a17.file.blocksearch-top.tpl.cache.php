<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 10:55:48
         compiled from "C:\wamp\www\Tienda\themes\ap_funiture\modules\blocksearch\blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214157ab4e848837f8-18815995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21322ab853128dc6a377c0a5fa9bf9a4d69c6a17' => 
    array (
      0 => 'C:\\wamp\\www\\Tienda\\themes\\ap_funiture\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1470840140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214157ab4e848837f8-18815995',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab4e848bb4f0_46568357',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab4e848bb4f0_46568357')) {function content_57ab4e848bb4f0_46568357($_smarty_tpl) {?>

<script type="text/javascript">
// $(document).ready( function(){ 
// 		$("#search_block_top").each( function(){
// 		$(".fa-search").click( function(){
// 				$("#searchbox").toggle("slow");
// 			});
// 		}); 
// });
</script>
 
<!-- Block search module TOP -->
<div id="search_block_top" class="pull-left">
	<form id="searchbox" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',null,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<button type="submit" name="submit_search" class="fa fa-search">&nbsp;</button> 
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
