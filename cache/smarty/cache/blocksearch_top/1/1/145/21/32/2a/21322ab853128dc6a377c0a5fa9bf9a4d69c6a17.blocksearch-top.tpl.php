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
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab4e848c8d22_94789284',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab4e848c8d22_94789284')) {function content_57ab4e848c8d22_94789284($_smarty_tpl) {?>
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
	<form id="searchbox" method="get" action="//localhost/tienda/index.php?controller=search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<button type="submit" name="submit_search" class="fa fa-search">&nbsp;</button> 
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Buscar" value="" />
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
